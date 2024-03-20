<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::latest()->take(4)->get();
        $product_active = Product::where('status', 1)->get();
        return view('pages.home', compact('product','product_active'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
