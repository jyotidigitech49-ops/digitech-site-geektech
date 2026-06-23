<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;
use App\Models\ProductsDetailsPage;
use App\Models\ProductOverview;
use App\Models\ProductSpecification;
use Illuminate\Support\Str;

class ProductPrinterController extends Controller {
    public function productsPrinter() {

        // First: get 4 printer categories
        $printerCategories = Category::query()
        ->where( 'parent_id', 1 ) // agar printer category parent hai
        ->orderBy( 'sort', 'asc' )
        // ->limit( 4 )
        ->get();

        // Category ids
        $categoryIds = $printerCategories->pluck( 'id' );

        // Second: get 16 products from these 4 categories
        $products = Product::query()
        ->whereIn( 'cat_id', $categoryIds )
        ->orderBy( 'id', 'desc' )
        // ->limit( 16 )
        ->get();

        // dump( $printerCategories );
        // dump( $products );

        return view( 'products.products_printer', compact(
            'printerCategories',
            'products'
        ) );

    }

    public function printerCategoryProducts( $url ) {

    // First: get 4 printer categories
        $printerCategoriesAll = Category::query()
        ->where( 'parent_id', 1 ) // agar printer category parent hai
        ->orderBy( 'sort', 'asc' )
        // ->limit( 4 )
        ->get();


        $printerCategories = Category::query()
        ->where( 'url', $url )
        ->firstOrFail();

        $products = Product::query()
        ->where( 'cat_id', $printerCategories->id )
        ->orderBy( 'id', 'desc' )
        ->get();

        // dump( $printerCategories );
        // dump( $products );
        return view( 'products.printer_category_products', compact(
            'printerCategoriesAll',
            'products',
            'printerCategories'
        ) );
    }

    public function printerCategoryProductsDetails( $url ) {
        $product = Product::query()
            ->where( 'slug', $url )
            ->where( 'status', 'A' )
            ->firstOrFail();

        $category = Category::query()
            ->where( 'id', $product->cat_id )
            ->first();

        $detailsPage = ProductsDetailsPage::query()
            ->where( 'slug', $url )
            ->where( 'status', 'A' )
            ->first();

        $gallery = collect( [
            [ 'image' => $product->img1, 'alt' => $product->name, 'label' => $product->name . ' image 1' ],
            [ 'image' => $product->img2, 'alt' => $product->name, 'label' => $product->name . ' image 2' ],
            [ 'image' => $product->img3, 'alt' => $product->name, 'label' => $product->name . ' image 3' ],
            [ 'image' => $product->img4, 'alt' => $product->name, 'label' => $product->name . ' image 4' ],
        ] )
            ->filter( fn ( $thumb ) => ! empty( $thumb[ 'image' ] ) )
            ->values()
            ->all();

        $overviewRows = ProductOverview::query()
            ->where( 'product_id', $product->id )
            ->where( 'status', 'A' )
            ->orderBy( 'id', 'asc' )
            ->get();

        $overviewFeatures = $overviewRows
            ->filter( fn ( $row ) => ! empty( $row->headkey ) || ! empty( $row->value ) )
            ->map( fn ( $row ) => [
                'title' => $row->headkey,
                'description' => $row->value,
            ] )
            ->values()
            ->all();

        $overviewNotes = $overviewRows
            ->pluck( 'overview' )
            ->filter()
            ->unique()
            ->values()
            ->all();

        $specTabLabels = [
            'top-specs' => 'Top Specs',
            'all-specs' => 'All Specs',
            'logistics' => 'Logistics',
            'sustainability' => 'Sustainability',
        ];

        $specificationRows = ProductSpecification::query()
            ->where( 'product_id', $product->id )
            ->where( 'status', 'A' )
            ->orderBy( 'id', 'asc' )
            ->get();

        $specTabs = $specificationRows
            ->groupBy( fn ( $row ) => Str::slug( $row->tab ?: 'Top Specs' ) )
            ->mapWithKeys( function ( $rows, $tabKey ) use ( $specTabLabels ) {
                $label = $specTabLabels[ $tabKey ] ?? $rows->first()->tab;

                return [
                    $tabKey => [
                        'label' => $label,
                        'rows' => $rows
                            ->map( fn ( $row ) => [
                                'headkey' => $row->headkey,
                                'value' => $row->value,
                            ] )
                            ->values()
                            ->all(),
                    ],
                ];
            } )
            ->all();

        $blogIds = collect( explode( ',', (string) $product->blog_ids ) )
            ->map( fn ( $id ) => trim( $id ) )
            ->filter()
            ->map( fn ( $id ) => (int) $id )
            ->filter()
            ->values()
            ->all();

        $blogs = Blog::query()
            ->where( 'status', 'A' )
            ->when( ! empty( $blogIds ), fn ( $query ) => $query->whereIn( 'id', $blogIds ) )
            ->orderBy( 'id', 'desc' )
            ->limit( 4 )
            ->get()
            ->map( fn ( $blog ) => [
                'id' => $blog->id,
                'heading' => $blog->heading,
                'slug' => $blog->slug,
                'content' => $blog->content,
                'image1' => $blog->image1,
                'image2' => $blog->image2,
                'image3' => $blog->image3,
                'inserted_at' => $blog->inserted_at,
            ] )
            ->values()
            ->all();

        $detailsData = [
            'seo' => [
                'title' => $detailsPage->meta_title ?? $product->name,
                'description' => $detailsPage->meta_description ?? $product->short_description,
            ],
            'breadcrumb' => [
                'store' => 'Product Store',
                'parent_category' => $product->parent_cat,
                'category' => $category ? [
                    'id' => $category->id,
                    'name' => $category->name,
                    'url' => $category->url,
                ] : null,
                'product_name' => $product->name,
            ],
            'hero' => [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'status' => $product->status,
                'stock_status' => $product->stock_status,
                'badge' => $product->featured,
                'lifecycle' => 'May 31, 2020 - Dec 30, 2030',
                'summary' => $product->short_description,
                'price' => $product->price,
                'quote_url' => url( '/products-enquiry' ),
            ],
            'gallery' => $gallery,
            'overview' => [
                'description' => $product->overview_description,
                'features' => $overviewFeatures,
                'notes' => $overviewNotes,
            ],
            'specifications' => $specTabs,
            'specification_description' => $product->specification_description,
            'blog_ids' => $blogIds,
            'blogs' => $blogs,
        ];

        // dd( $detailsData );

        return view( 'products.product_details', compact( 'detailsData' ) );
    }






}
