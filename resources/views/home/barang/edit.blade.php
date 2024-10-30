@extends('layouts.master');
@section('title','barang');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Barang</h3>
                            <a class="btn btn-warning" href="/barang">Kembali</a>
                            <div class="card-body">
                               <form action="/barang/{{ $barang->id}}/update" method="Post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                    type="file"
                                    class="form-control"
                                    name="gambar"
                                    id=""
                                    value="{{$barang->gambar}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <input
                                    type="nama_barang"
                                    class="form-control"
                                    name="nama_barang"
                                    id=""
                                    value="{{$barang->nama_barang}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                    @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Jenis</label>
                                    <select name="id_jenis" id="" class="form-control">
                                        <option value="">Pilih jenis </option>
                                        @foreach ($jenis as $jenis)
                                        <option value="{{ $jenis->id}}">{{ $jenis->nama_jenis}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror
                                   </div>
                                   <div class="mb-3">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="harga_beli"
                                    id=""
                                   value="{{$barang->harga_beli}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />

                                    @error('harga_beli')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror

                                 </div>
                                 <div class="mb-3">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="harga_jual"
                                    id=""
                                value="{{$barang->harga_jual}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                    @error('harga_jual')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror
                                 </div>
                                 <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="stok"
                                    id=""
                                    value="{{$barang->stok}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                    @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                    </div>
                                    @enderror
                                 </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
