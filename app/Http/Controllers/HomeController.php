<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
          $lowStockThreshold = 10;

          $nearExpiryThreshold = 30;
  
          $lowStockProducts = Product::where('quantity', '<=', $lowStockThreshold)->get();

          $nearExpiryProducts = Product::where('expiration_date', '<=', Carbon::now()->addDays($nearExpiryThreshold))->get();
  
          return view('home', compact('lowStockProducts', 'nearExpiryProducts'));
    }
}
