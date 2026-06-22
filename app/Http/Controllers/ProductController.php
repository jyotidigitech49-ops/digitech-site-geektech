<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller {
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
            'products'
        ) );
    }
}
