<?php

namespace App\Http\Controllers;

use App\Models\DetailsPage;
use App\Models\ProductsDetailsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MetadataController extends Controller
{
    public function resolve(Request $request): array
    {
        $metadata = $this->productMetadata($request) ?? $this->pageMetadata($request);

        return [
            'title' => $metadata?->meta_title,
            'description' => $metadata?->meta_description,
            'canonical' => $request->url(),
            'type' => $this->pageType($request),
            'image' => asset('assets/images/products_banners/pr01.png'),
        ];
    }

    private function productMetadata(Request $request): ?ProductsDetailsPage
    {
        if (! $this->isProductMetadataRoute($request)) {
            return null;
        }

        $route = $request->route();
        $slug = trim((string) $route?->parameter('url'));

        if ($slug === '') {
            return null;
        }

        $slugCandidates = collect([
            $slug,
            Str::startsWith($slug, 'hp-') ? Str::after($slug, 'hp-') : 'hp-' . $slug,
        ])->unique()->values()->all();

        $records = ProductsDetailsPage::query()
            ->where('status', 'A')
            ->whereIn('slug', $slugCandidates)
            ->get(['slug', 'meta_title', 'meta_description'])
            ->keyBy('slug');

        foreach ($slugCandidates as $candidate) {
            if ($records->has($candidate)) {
                return $records->get($candidate);
            }
        }

        return null;
    }

    private function pageMetadata(Request $request): ?DetailsPage
    {
        $candidates = $this->pageKeys($request);

        if ($candidates === []) {
            return null;
        }

        $records = DetailsPage::query()
            ->where('status', 'A')
            ->whereIn('url', $candidates)
            ->get(['url', 'meta_title', 'meta_description'])
            ->keyBy(fn (DetailsPage $page) => Str::lower(trim($page->url, '/')));

        foreach ($candidates as $candidate) {
            if ($records->has($candidate)) {
                return $records->get($candidate);
            }
        }

        return null;
    }

    private function pageKeys(Request $request): array
    {
        $path = trim($request->path(), '/');
        $route = $request->route();
        $segments = array_values(array_filter(explode('/', $path)));
        $keys = [];

        if ($path === '') {
            $keys[] = 'home';
        }

        if ($route?->parameter('url')) {
            $keys[] = $route->parameter('url');
        }

        if ($route?->parameter('type')) {
            $keys[] = $route->parameter('type');
        }

        if ($route?->parameter('term')) {
            $keys[] = $route->parameter('term');
        }

        if ($segments !== []) {
            $keys[] = end($segments);
        }

        $keys[] = $path;

        $aliases = [
            'contact-us' => 'contact',
            'faqs' => 'faq',
            'products/printer' => 'printer',
            'search' => 'products',
        ];

        if (isset($aliases[$path])) {
            array_unshift($keys, $aliases[$path]);
        }

        return collect($keys)
            ->map(fn ($key) => Str::lower(trim((string) $key, '/')))
            ->filter()
            ->unique()
            ->values()
            ->all();
    }

    private function pageType(Request $request): string
    {
        if ($this->isProductMetadataRoute($request)) {
            return 'product';
        }

        $action = $request->route()?->getActionMethod();

        if ($action === 'index' && str_contains((string) $request->route()?->getActionName(), 'BlogController')) {
            return 'article';
        }

        return 'website';
    }

    private function isProductMetadataRoute(Request $request): bool
    {
        $route = $request->route();

        return in_array($route?->getActionMethod(), [
            'printerCategoryProductsDetails',
            'productDetailsByType',
        ], true) || $route?->getName() === 'product.enquiry.show';
    }
}
