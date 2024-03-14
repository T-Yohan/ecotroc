<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Product;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_visible', true)->get();
        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        $categoryProducts = Product::where('category_id', $id)->get();

        return view('category.show', compact('category', 'categoryProducts'));
    }
}
