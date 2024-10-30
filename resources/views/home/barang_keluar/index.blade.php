@extends('layouts.master');
@section('title','barang_keluar');
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
                            <h3>Halaman Data Barang keluar</h3>
                            <a class="btn btn-primary" href="/barang_keluar/tambah">Tambah</a>
                            <a class="btn btn-primary" href="/barang_keluar/laporan">Laporan</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">Nama Customer</th>
                                                <th scope="col">Jumlah</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang_keluar as $barang_keluar )
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>

                                                <td>{{ $barang_keluar->barang->nama_barang}}</td>
                                                <td>{{ $barang_keluar->nama_customer}}</td>
                                                <td>{{ $barang_keluar->jumlah}}</td>

                                                <td><a class="btn btn-secondary" href="/barang_keluar/{{                $barang_keluar->id}}/show">Detail</a>
                                                    <a class="btn btn-secondary" href="/barang_keluar/{{ $barang_keluar->id}}/struk">Cetak</a>

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
