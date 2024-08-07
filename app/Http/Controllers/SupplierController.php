<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create(){
        return view("supplier.create-supplier");
    }
    public function store(CreateSupplierRequest $request){
        $validatedData = $request->validated();
        $supplier = Supplier::create($validatedData);
        return redirect("/");
    }
    public function show(){
        $suppliers = Supplier::orderBy("name","asc")->get();
        return view("supplier.show-suppliers", compact("suppliers"));
    }
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('supplier.edit-supplier', compact('supplier'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cnpj' => 'required|string|size:18',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Atualiza o fornecedor
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('supplier.index');
    }
    public function destroy($id){
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
