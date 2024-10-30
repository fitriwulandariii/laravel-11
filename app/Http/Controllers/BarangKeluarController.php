<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function laporan()
    {
        $barangkeluar= BarangKeluar::all();
        return view('home.barang_keluar.laporan', compact('barangkeluar'));
    }
    public function struk()
    {
        $barangkeluar= BarangKeluar::all();
        return view('home.barang_keluar.struk', compact('barangkeluar'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar = BarangKeluar::all();
        return view('home.barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('home.barang_keluar.tambah', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $id =$request->id_barang;
        $barang = Barang::find($id);

        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error','stok barang tidak mencukupi');
        }

        $barang->decrement('stok',$request->jumlah);
        BarangKeluar::create([
            'id_barang'=>$request->id_barang,
            'nama_customer'=>$request->nama_customer,
            'jumlah'=>$request->jumlah,
        ]);
        return redirect('/barang_keluar')->with('success', 'Barang Keluar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $barang_keluar = barangkeluar::find($id);
       return view('home.barang_keluar.show' , compact('barang_keluar'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang_keluar = BarangKeluar::find($id);
        $barang_keluar->update ([
            'id_barang' =>$request->id_barang,
            'nama_customer' => $request->nama_customer,
            'jumlah' =>$request->jumlah,
        ]);
        return redirect('/barang_keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang_keluar = BarangKeluar::find($id);
        $barang_keluar->delete();
        return redirect('/barang_keluar');
    }
}
