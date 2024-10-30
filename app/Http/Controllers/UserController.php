<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
    $user = User::all();
    return view('home.user.index', compact('user'));

}
public function create(){
    return view('home.user.tambah');

}
public function store(Request $request){
    $user = User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> bcrypt($request->password),
    ]);
    return redirect('/user')->with('success','data berhasil disimpan');
}
public function show($id){
    $user = User::find($id);
    return view('home.user.edit', compact('user'));

}
public function update(Request $request, string $id){
    $user = User::find($id);
    $user->update([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> bcrypt($request->password),
    ]);
    return redirect('/user')->with('success','data berhasil dirubah');
}
public function destroy(string $id){
    $user = User::find($id);
    $user->delete();
    return redirect('/user')->with('success','data berhasil dihapus');
}
}
