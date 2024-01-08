<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;
class TransaksiController extends Controller
{
    public function index():View{
        // $data = transaksi::all()->first();
        // dd($data["id_menu"]);
        $data = DB::table('transaksis')
        ->join('menus', 'transaksis.id_menu', '=', 'menus.id_menu')
        ->select('menus.id_menu', 'menus.nama_menu', 'transaksis.id_transaksi', 'menus.harga', 'menus.foto')
        ->where("transaksis.status", "n")
        ->get();
        // dd($data);
        
        return view('cart',compact('data'));
    }
    public function pesan(Request $request){
        $id_user = 1;
        transaksi::create([
            'id_user'=>$id_user,
            'id_menu'=>$request->id_menu,
        ]);
        return redirect()->route("menu");
    }

    public function simpan_alamat(Request $request)
    {
        $transaksi = DB::table('transaksis')->where('id_user','1')->update(['alamat_tujuan'=>$request->alamat_tujuan,'catatan'=>$request->catatan,'no_telp'=>$request->no_telp]);
        return redirect()->route('cart');
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
    public function simpanpembayaran(Request $request){
        $transaksi = DB::table('transaksis')->where('id_user','1')->update(['kode_promo'=>$request->kode_promo,'pembayaran'=>$request->pembayaran,'status'=>$request->status,'jumlah_pesanan'=>$request->custom_number]);
        return redirect()->route('cart');
    }
    public function hapus(Request $request){
        // $transaksi = DB::table('transaksis')->where('id_user','1')->delete();
        $idTransaksi = $request->id_transaksi;
        $result = DB::table('transaksis')
        ->where('id_user', '1')
        ->where('id_transaksi', $idTransaksi)
        ->delete();
        return redirect()->route('cart');
    }
    public function crud(){
        $data = transaksi::all();
        return view('pages.crud_transaksi',compact('data'));
    }
    public function update_data(Request $request){
        $transaksi = DB::table('transaksis')->where(['id_transaksi'=>$request->id_transaksi])->update(['id_user'=>$request->id_user,'id_menu'=>$request->id_menu,'alamat_tujuan'=>$request->alamat_tujuan,'kode_promo'=>$request->kode_promo,'no_telp'=>$request->no_telp,'catatan'=>$request->catatan,'status'=>$request->status]);
        return redirect()->route('crud_transaksi');
    }
}
