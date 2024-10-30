@extends('layouts.master');
@section('title','supplier');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Supplier</h3>
                            <a class="btn btn-warning" href="/supplier">Kembali</a>
                            <div class="card-body">
                               <form action="/supplier/simpan" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="nama_supplier"
                                    id=""
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">alamat</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="alamat"
                                    id=""
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No telp</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    name="no_telp"
                                    id=""
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />

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
