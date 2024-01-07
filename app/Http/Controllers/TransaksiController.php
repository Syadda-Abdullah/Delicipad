<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;
class TransaksiController extends Controller
{
    public function index():View{
        $data = transaksi::all();
        return view('cart',compact('data'));
    }
    public function pesan(Request $request){
        $id_user = 1;
        transaksi::create([
            'id_user'=>$id_user,
            'id_menu'=>$request->id_menu,
        ]);
    }

    public function simpan_alamat(Request $request)
    {
        $transaksi = DB::table('transaksis')->where('id_user','1')->update(['alamat_tujuan'=>$request->alamat_tujuan,'catatan'=>$request->catatan,'no_telp'=>$request->no_telp]);

        // $request->validate([
        //     'alamat_tujuan' => 'required',
        //     'catatan' => 'nullable',
        //     'no_telp' => 'nullable|numeric',
        //     // Sesuaikan validasi dengan kebutuhan Anda
        // ]);

        // $transaksi->update($request->all());

        // return redirect()->route('transaksi.edit', ['id' => $transaksi->id])
        //     ->with('success', 'Transaksi berhasil diupdate');
    }
}
