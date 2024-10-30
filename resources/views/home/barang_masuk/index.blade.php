@extends('layouts.master');
@section('title','barang_masuk');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('succes'))
                            <div class="alert alert-info">
                                {{ session('succes')}}

                            </div>
                            @endif
                            <h3>Halaman Data Barang Masuk</h3>
                            <a class="btn btn-primary" href="/barang_masuk/tambah">Tambah</a>
                            <a class="btn btn-primary" href="/barang_masuk/laporan">Laporan</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">ID Supplier</th>
                                                <th scope="col">Jumlah</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barangmasuk as $barang_masuk )
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>

                                                <td>{{ $barang_masuk->barang->nama_barang}}</td>
                                                <td>{{ $barang_masuk->supplier->nama_supplier}}</td>
                                                <td>{{ $barang_masuk->jumlah}}</td>

                                                <td><a class="btn btn-secondary" href="/barang_masuk/{{ $barang_masuk->id}}/show">Detail</a>
                                                </td>
                                            </tr>

                                            @endforeach
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
