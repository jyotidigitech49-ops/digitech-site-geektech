<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('status', 'A')
            ->inRandomOrder()
            ->limit(5)
            ->get();

        $tabCategories = [
            'printers' => 'Printers',
            'desktops' => 'Desktops',
            'thin_clients' => 'Thin Clients',
            'scanners' => 'Scanners',
        ];

        $tabProducts = [];

        foreach ($tabCategories as $key => $categoryName) {
            $category = Category::where('status', 'A')
                ->where('name', $categoryName)
                ->first();

            $tabProducts[$key] = $category
                ? Product::where('status', 'A')
                    ->where('cat_id', $category->id)
                    ->limit(5)
                    ->get()
                : collect();
        }

        return view('home.index', compact('featuredProducts', 'tabProducts'));
    }
}
