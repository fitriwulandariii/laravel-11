@extends('layouts.master');
@section('title','Jenis');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Jenis</h3>
                            <a class="btn btn-primary" href="/jenis/tambah">Tambah</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama jenis</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenis as $jenis )
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{ $jenis->nama_jenis}}</td>
                                                <td><a class="btn btn-warning" href="/jenis/{{ $jenis->id}}/show">Edit</a>
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
