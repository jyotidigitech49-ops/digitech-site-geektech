<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function list()
    {
        $blogs = Blog::query()
            ->where('status', 'A')
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'heading' => $blog->heading,
                    'slug' => $blog->slug,
                    'excerpt' => Str::limit(strip_tags($blog->content), 130),
                    'date' => $blog->inserted_at ? Carbon::parse($blog->inserted_at)->format('M d, Y') : null,
                    'url' => url('blogs', $blog->slug),
                    'images' => $this->blogImages($blog),
                ];
            });

        return view('blog.index', compact('blogs'));
    }

    public function index($url)
    {
        $blog = Blog::query()
            ->where('status', 'A')
            ->where('slug', $url)
            ->firstOrFail();

        $previousBlog = Blog::query()
            ->where('status', 'A')
            ->where('id', '<', $blog->id)
            ->orderBy('id', 'desc')
            ->first(['heading', 'slug']);

        $nextBlog = Blog::query()
            ->where('status', 'A')
            ->where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first(['heading', 'slug']);

        $blogDetails = [
            'id' => $blog->id,
            'heading' => $blog->heading,
            'slug' => $blog->slug,
            'content' => $blog->content,
            'excerpt' => Str::limit(strip_tags($blog->content), 180),
            'date' => $blog->inserted_at ? Carbon::parse($blog->inserted_at)->format('M d, Y') : null,
            'category' => 'News',
            'images' => $this->blogImages($blog),
            'previous' => $previousBlog ? [
                'heading' => $previousBlog->heading,
                'url' => url('blogs', $previousBlog->slug),
            ] : null,
            'next' => $nextBlog ? [
                'heading' => $nextBlog->heading,
                'url' => url('blogs', $nextBlog->slug),
            ] : null,
        ];

        // dd($blogDetails);

        return view('blog.blogdetails', compact('blogDetails'));
    }

    private function blogImages(Blog $blog): array
    {
        return collect([$blog->image1, $blog->image2, $blog->image3])
            ->filter()
            ->map(function ($image) {
                $image = ltrim((string) $image, '/');

                $candidates = str_starts_with($image, 'assets/')
                    ? [$image]
                    : [$image, 'assets/images/blog/' . $image];

                return collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));
            })
            ->filter()
            ->unique()
            ->map(fn ($image) => asset($image))
            ->values()
            ->all();
    }
}
