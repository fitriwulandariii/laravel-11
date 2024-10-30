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
                            <h3>Halaman Tambah Data Barang keluar</h3>
                            <a class="btn btn-warning" href="/barang_keluar">Kembali</a>
                            <div class="card-body">
                               <form action="/barang_keluar/simpan" method="Post">
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
                                    <label for="" class="form-label">Nama customer </label>
                                    <input
                                     type="text"
                                     class="form-control"
                                     name="nama_customer"
                                     id="nama_customer"
                                     value="{{old ('nama_customer')}}"
                                      aria-describedby="helpid"
                                     />
                                </div>
                                @error('nama_customer')
                                <div class="alert alert-danger mt-2">
                                {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah</label>
                                    <input
                                     type="number"
                                     class="form-control"
                                     name="jumlah"
                                     id="jumlah"
                                     value="{{old ('jumlah')}}"

                                     />
                                </div>
                                @error('jumlah')
                                <div class="alert alert-danger mt-2">
                                {{$message}}
                                </div>
                                @enderror



                                <button class="btn btn-primary" type="submit">Kirim</button>
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
