<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index(){
    $supplier = Supplier::all();
    return view('home.supplier.index', compact('supplier'));

}
public function create(){
    return view('home.supplier.tambah');

}
public function store(Request $request){
    $supplier = Supplier::create([
        'nama_supplier'=> $request->nama_supplier,
        'alamat'=> $request->alamat,
        'no_telp'=> $request->no_telp,
    ]);
    return redirect('/supplier')->with('success','data berhasil disimpan');
}
public function show($id){
    $supplier = Supplier::find($id);
    return view('home.supplier.show', compact('supplier'));

}
public function update(Request $request, string $id){
    $supplier = Supplier::find($id);
    $supplier->update([
        'nama_supplier'=> $request->nama_supplier,
        'alamat'=> $request->alamat,
        'no_telp'=> $request->no_telp,
    ]);
    return redirect('/supplier')->with('success','data berhasil dirubah');

}
}
