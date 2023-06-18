<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.index');
    }

    public function catalog() {
        $categories = Category::get();

        return view('pages.catalog', compact('categories'));
    }

    public function products(Request $request) {
        $category = Category::query()->with('products')->find($request->alias);
        $products = $category->products()->paginate(9);

        return view('pages.products', compact(['category', 'products']));
    }

    public function product(Request $request) {
        $product = Product::query()->with('category')->findOrFail($request->product);

        $category = $product->category;
        return view('pages.product', compact(['product', 'category']));
    }

    public function about() {
        return view('pages.about');
    }

    public function contacts() {
        return view('pages.contacts');
    }
}
