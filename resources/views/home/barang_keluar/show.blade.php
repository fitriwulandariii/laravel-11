@extends('layouts.master')
@section('title', 'barangkeluar')
@section('content')

   <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card">
                <div class="card-header">
                    <h1>Halaman Data Barang keluar</h1>
                    </div>
                    </div>
                    <div class="row">

                    <div class="col-md-4" style="border-right: 2px solid #dee2e6">
                            <div class="card-body box-profile" style="display: flex; align-items: center; justify-content: center; " >
                                <img src="{{ asset('/storage/products/'.$barang_keluar->barang->gambar) }}"
                                    class="rounded" style="width: 100%; max-width: 300px; height: auto;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                    <div class="card-body box-profile">
                    <h2>{{$barang_keluar->barang->nama_barang}}</h2>
                    <p style="margin-bottom: 5px"> {{$barang_keluar->created_at}}</p>
                    <hr style="border: none; border-top: 2px solid #dee2e6; margin: 10px 0;">
                    <p>  Jumlah : {{$barang_keluar->jumlah}}</p>
                    <p>  Harga Beli : Rp. {{ number_format ($barang_keluar->barang->harga_beli) }}</p>
                    <p>  supplier : {{$barang_keluar->nama_customer}}</p>
                    <br>
                    <h3>Total : Rp. {{ number_format ($barang_keluar->jumlah * $barang_keluar->barang->harga_beli) }}</h3>
                    <br>
                    </p>
                     <a href="/barang_keluar" class="btn btn-info">Kembali</a>
                    </div>

                 </div>

            </div>

        </div>
    </div>
</section>
</div>

@endsection
