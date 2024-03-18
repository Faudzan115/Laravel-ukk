<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\penjualan;
use App\Models\pelanggan;
use App\Models\detail_penjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;


class produkController extends Controller
{
    function produk()
    {

        $produk = DB::table('produk')->where('status', 'tampil')->get();
        return view('/produk', ['produk' => $produk]);
    }
    //
    public function tambah_produk()
    {
        $produk = DB::table('produk')->where('status', 'tampil')->get();
        return view('/tambah_produk');
    }

    function proses_tambah_produk(Request $request)
    {
        $request->validate([
            'NamaProduk' => 'required|max:255'
        ]);

        $NamaProduk = $request->NamaProduk;
        $Stok = $request->Stok;
        $Harga = $request->Harga;

        DB::table('produk')->insert([

            'NamaProduk' => $NamaProduk,
            'Stok' => $Stok,
            'Harga' => $Harga,
            'status' => 'tampil'
        ]);


        return redirect('/produk')->with("info2","produk telah di tambahkan");
    }

    function trash(Request $request){
        $produk = DB::table('produk')->where('status','dihapus')->get();

        return view('/trash-produk',['produk'=>$produk]);
     }

     function restore(request $request ,$id){
        DB::table('produk')->where('produkID','=',$id)->update([
            'status' => "tampil",

        ]);
        return redirect('/produk');
    }

    function hapus($id){
        $produk = DB::table('produk')->where('produkID','=',$id)->update([
            'status' => "dihapus",
        ]);

        return redirect()->back();
    }

    function hapus_permanen($id){
        echo $id;
        $deleted = DB::table('produk')->where('produkID', $id)->delete();
        if ($deleted) {
            return redirect('/produk')->with("info3","produk telah di hapus permanen");
    }
}


    function tampil_update_produk($id)
    {
        $produk = DB::table('produk')->where('produkID', $id)->first();
        return view('update_produk', ['produk' => $produk]);
    }


    function proses_update_produk(Request $request, $id)
    {
        $request->validate([
            'NamaProduk' => 'required|max:255'
        ]);

        $NamaProduk = $request->NamaProduk;
        $Harga = $request->Harga;
        $Stok = $request->Stok;

        DB::table('produk')
            ->where('produkID', $id)
            ->update([
                'NamaProduk' => $NamaProduk,
                'Harga' => $Harga,
                'Stok' => $Stok
            ]);

        return redirect('/produk')->with("info","produk telah di update");
    }
}
