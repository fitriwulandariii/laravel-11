@extends('layouts.master');
@section('title','user');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                            <div class="card-body">
                               <form action="/user/{{ $user->id}}/update" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama User</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id=""
                                    value="{{$user->name}}"
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">email</label>
                                    <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    value="{{$user->email}}"
                                    id=""
                                    aria-describedby="helpid"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id=""
                                    value="{{$user->password}}"
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
