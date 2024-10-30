<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use App\Models\User;
use App\Models\jenis;

class DashboardController extends Controller
{
    public function index()
    {
        $barangcount = Barang::count(); 
        $baranglist = Barang::all();
        $usercount = User::count();
        $barangmasukcount = BarangMasuk::count();
        $barangkeluarcount = BarangKeluar::count();
        $barangmasuk = BarangMasuk::all();
        $barangkeluar = Barangkeluar::all();
        
        
        
        

        return view('home.dashboard', compact('barangcount','baranglist','usercount','barangmasukcount','barangkeluarcount','barangmasuk','barangkeluar'));
    }
}
