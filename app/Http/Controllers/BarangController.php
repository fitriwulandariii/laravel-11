<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Barang;
use App\Models\Jenis;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('home.barang.index', compact('barang'));
    }
    public function create()
    {

        $jenis = Jenis::all();
        return view('home.barang.tambah', compact('jenis'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar'=> 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang'=> 'required|min:5',
            'id_jenis'=> 'required|numeric',
            'harga_beli'=> 'required|numeric',
            'harga_jual'=> 'required|numeric',
            'stok'=> 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());

        $barang = Barang::create([
            'gambar'=> $image->hashName(),
            'nama_barang'=>$request->nama_barang,
            'id_jenis'=> $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ]);
        return redirect('/barang')->with('success','Barang berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::all();
        $barang = Barang::find($id);
        return view('home.barang.edit', compact('jenis','barang'));
    }

    public function edit(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(request $request,string $id)
    {
        $request->validate([
            'gambar'=> 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang'=> 'required|min:5',
            'id_jenis'=> 'required|numeric',
            'harga_beli'=> 'required|numeric',
            'harga_jual'=> 'required|numeric',
            'stok'=> 'required|numeric',
        ]);


        $barang = Barang::find($id);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $image->storeAs('public/products', $image->hashName());

            if ($barang->gambar){
                storage::delete('public/products'.$barang->gambar);
            }


            $barang->update([
                'gambar'=> $image->hashName(),
                'nama_barang'=>$request->nama_barang,
                'id_jenis'=> $request->id_jenis,
                'harga_beli'=> $request->harga_beli,
                'harga_jual'=> $request->harga_jual,
                'stok'=> $request->stok,
            ]);
            return redirect('/barang')->with(['success' => 'Data Berhasil Diubah!']);
        }else{

        $barang->update([
            'nama_barang'=>$request->nama_barang,
            'id_jenis'=> $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ]);
        return redirect('/barang')->with(['success' => 'Data Berhasil Diubah!']);
    }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        if ($barang){
        Storage::delete('public/products'. $barang->gambar);
        $barang->delete();
        return redirect('/barang')->with(['success', 'Data berhasil dihapus']);
    }
    return redirect('/barang')->with(['error', 'data tidak ditemukan']);
}
}

