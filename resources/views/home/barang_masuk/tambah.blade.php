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
                            <h3>Halaman Tambah Data Barang Masuk</h3>
                            <a class="btn btn-warning" href="/barang_masuk">Kembali</a>
                            <div class="card-body">
                               <form action="/barang_masuk/simpan" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Id Barang </label>
                                  <select class="form-control" name="id_barang" id="id_barang">
                                    @foreach ($barang as $barang )
                                    <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                   @endforeach
                                  </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Id Supplier </label>
                                  <select class="form-control" name="id_supplier" id="id_supplier">
                                    @foreach ($supplier as $supplier )
                                    <option value="{{$supplier->id}}">{{$supplier->nama_supplier}}</option>
                                   @endforeach
                                  </select>
                                </div>

                                <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    name="jumlah"
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
