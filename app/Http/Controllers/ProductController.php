<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.home', ['products' => $products]);
    }

    public function admin()
    {
        $products = Product::all();

        return view('products.dashboard', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:45',
            'description' => 'required|min:10|max:255',
            'category' => 'required',
        ]);
        $validated['image'] = '/img/product_images/computer.jpeg';
        $validated['slug'] = Str::slug($request->name);
        $created = Product::create($validated);

        if ($created) {
            return redirect('/products')->with('msg', 'Produto cadastrado com sucesso');
        }

        return redirect('/products')->with('msg', 'Ocorreu um erro ao cadastrar o produto');
    }

    public function delete($id)
    {
        $deleted = Product::find($id)->delete();
        if ($deleted) {
            return redirect('/products/home');
        }

        return redirect('/products/home');
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', ['categories' => $categories]);
    }
}
