<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $suppliers = Supplier::orderBy("name","asc")->get();
        return view("create-product",compact("suppliers"));
    }
    public function store(CreateProductRequest $request)
    {   
        $validatedData = $request->validated();
        Product::create($validatedData);
        return redirect('/');
    }
}
