<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\transaksi;

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

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $request->validate([
            'alamat_tujuan' => 'required',
            'catatan' => 'nullable',
            'no_telp' => 'nullable|numeric',
            // Sesuaikan validasi dengan kebutuhan Anda
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.edit', ['id' => $transaksi->id])
            ->with('success', 'Transaksi berhasil diupdate');
    }
}
