<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create(){
        return view("create-supplier");
    }
    public function store(CreateSupplierRequest $request){
        $validatedData = $request->validated();
        $supplier = Supplier::create($validatedData);
        return redirect("/");
    }
}
