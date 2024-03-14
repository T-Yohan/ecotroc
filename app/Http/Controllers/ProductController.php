<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::where('is_visible', true)->get();

        return view('product.index', compact('products'));
    }

    public function byCategory($id = 0)  //lister tous les produits visibles par id de categorie
    {
        $products = Product::where('is_visible', true)
            ->where("category_id", '=', $id)
            ->get();
        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product.show', compact('product'));
    }

    public function rechercherProduits(Request $request)
    {
        $searchTerm = $request->input('search');

        $products = Product::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->get();

        return view('product.index', compact('products'));
    }

    public function generateRandomProduct()
    {
        $product = Product::factory()->create();
        // Faites quelque chose avec le produit généré...
    }
}
