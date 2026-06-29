<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'status',
        'inserted_at',
        'heading',
        'slug',
        'content',
        'image1',
        'image2',
        'image3',
    ];

    public function imagePaths(): array
    {
        return collect([$this->image1, $this->image2, $this->image3])
            ->filter()
            ->map(function ($image) {
                $image = trim(str_replace('\\', '/', (string) $image));
                $urlPath = parse_url($image, PHP_URL_PATH);
                $image = ltrim($urlPath ?: $image, '/');
                $image = preg_replace('#^public/#i', '', $image);

                if (! str_starts_with(strtolower($image), 'assets/')) {
                    $image = 'assets/images/blog/' . $image;
                }

                return $image;
            })
            ->filter()
            ->unique()
            ->values()
            ->all();
    }
}
