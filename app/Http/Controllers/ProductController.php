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
        return view("product.create-product",compact("suppliers"));
    }
    public function store(CreateProductRequest $request)
    {   
        $validatedData = $request->validated();
        Product::create($validatedData);
        return redirect('/');
    }
    public function search(Request $request){
        $query = $request->input('search');
        $products = Product::where('name', 'LIKE', "%{$query}%")->with("supplier")->paginate(30);
        return view('product.search-product', compact('products'));
    }
    public function edit($id){
        $suppliers = Supplier::orderBy('name','asc')->get();
        $product = Product::findOrFail($id);
        return view('product.edit-product',compact(['product','suppliers']));
    }
    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/');
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/');
    }
}
