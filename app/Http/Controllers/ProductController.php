<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('pages.admin.product.index', compact('product'));
    }

    public function create(){
        return view('pages.admin.product.create');
    }

    public function store(UserRequest $request)
    {

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->status = isset($request->status) ? $request->status : 1;

        $product->save();


        return redirect()->route('product')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $item = Product::findorFail($id);
        $item->delete();

        return redirect()->route('product');

    }
}
