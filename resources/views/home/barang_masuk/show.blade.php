@extends('layouts.master')
@section('title', 'barangmasuk')
@section('content')

   <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card">
                <div class="card-header">
                    <h1>Halaman Data Barang Masuk</h1>
                    </div>
                    </div>
                    <div class="row">

                    <div class="col-md-4" style="border-right: 2px solid #dee2e6">
                            <div class="card-body box-profile" style="display: flex; align-items: center; justify-content: center; " >
                                <img src="{{ asset('/storage/products/'.$barangmasuk->barang->gambar) }}"
                                    class="rounded" style="width: 100%; max-width: 300px; height: auto;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                    <div class="card-body box-profile">
                    <h2>{{$barangmasuk->barang->nama_barang}}</h2>
                    <p style="margin-bottom: 5px"> {{$barangmasuk->created_at}}</p>
                    <hr style="border: none; border-top: 2px solid #dee2e6; margin: 10px 0;">
                    <p>  Jumlah : {{$barangmasuk->jumlah}}</p>
                    <p>  Harga Beli : Rp. {{ number_format ($barangmasuk->barang->harga_beli) }}</p>
                    <p>  Supplier : {{$barangmasuk->supplier->nama_supplier}}</p>
                    <br>
                    <h3>Total : Rp. {{ number_format ($barangmasuk->jumlah * $barangmasuk->barang->harga_beli) }}</h3>
                    <br>
                    </p>
                     <a href="/barang_masuk" class="btn btn-info">Kembali</a>
                    </div>

                 </div>

            </div>

        </div>
    </div>
</section>
</div>

@endsection
