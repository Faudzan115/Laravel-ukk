<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
   function index(){

    $judul = "";
    $penjualan = DB::table('penjualan')->get();


    return view('home', ['judul' => $judul, 'penjualan' => $penjualan]);
   }
   function penjualan(){
    return view('/penjualan');
}

  function proses_tambah_penjualan(Request $request){
    // vaidasi
    $request->validate([
      'detail_penjualan' => 'required|min:2'
    ]);


      // $isi_pengaduan = $_POST['isi_laporan'];
      $penjualan = $request->detail_penjualan;

      DB::table('penjualan')->insert([
        'penjualanID' => date('Y-m-d'),
        'TanggalPenjualan' => '123',
        'TotalHarga' => '3.000',
        'pelangganID' => '1234',
    ]);

    return redirect('/home');
  }
}
