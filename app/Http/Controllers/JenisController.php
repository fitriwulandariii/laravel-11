<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = jenis::all();
        return view('home.jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.jenis.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       jenis::create($request->all());
       return redirect('/jenis')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $jenis = jenis::find($id);
       return view('home.jenis.edit' , compact('jenis'));
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
        $jenis = jenis::find($id);
        $jenis->update ([
            'nama_jenis' =>$request->nama_jenis,
        ]);
        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
   
}