<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {

        $parentCategories = Product::where( 'status', 'A' )

        ->select( 'parent_cat' )

        ->distinct()

        ->pluck( 'parent_cat' );

        $productTabs = [];

        // Featured Tab

        $productTabs[ 'featured' ] = [

            'label' => 'Featured',

            'products' => Product::where( 'status', 'A' )

            ->inRandomOrder()

            ->limit( 10 )

            ->get(),

        ];

        // Dynamic Tabs

        foreach ( $parentCategories as $parentCat ) {

            $key = Str::slug( $parentCat, '_' );

            $productTabs[ $key ] = [

                'label' => $parentCat,

                'products' => Product::where( 'status', 'A' )

                ->where( 'parent_cat', $parentCat )

                ->limit( 10 )

                ->get(),

            ];

        }

        // suggested products
        $suggestedProducts = Product::where( 'status', 'A' )
        ->inRandomOrder()
        ->limit( 15 )
        ->get();

        //blogs-list-random---
        $blogPosts = Blog::where( 'status', 'A' )
            ->inRandomOrder()
            ->limit( 3 )
            ->get();

        return view( 'home.index', compact( 'productTabs', 'suggestedProducts', 'blogPosts' ) );

    }
}
