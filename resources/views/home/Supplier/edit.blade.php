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
                            <h3>Halaman Edit Data Supplier</h3>
                            <a class="btn btn-warning" href="/supplier">Kembali</a>
                            <div class="card-body">
                               <form action="/supplier/{{$supplier->id}}/update" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="nama_supplier"
                                    id=""
                                    value="{{$supplier->nama_supplier}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">alamat</label>
                                    <input
                                    type="alamat"
                                    class="form-control"
                                    name="alamat"
                                    value="{{$supplier->alamat}}"
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
                                    value="{{$supplier->no_telp}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />

                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
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
