<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
    $product = Product::latest()->take(10)->get();
    
    $product_count_active = Product::where('status', 1)->count();
    $product_count_inactive = Product::where('status', 0)->count();

    $products = Product::all()->count();

    $user_count_active = User::where('status', 1)->count();
    $user_count_inactive = User::where('status', 0)->count();

    $users = User::all()->count();

    return view('pages.admin.dashboard', compact('products', 'product', 'users', 'product_count_active', 'product_count_inactive', 'user_count_active', 'user_count_inactive'));
    }
}
