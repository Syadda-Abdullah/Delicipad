<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index():View{
        $data = menu::all();
        return view('menu',compact('data'));
    }

    public function crud(){
        $data = menu::all();
        return view('pages.crud_adm',compact('data'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'jenis_makanan' => 'required|string',
            'deskripsi' => 'required|string',
            'info' => 'required|string',
            'harga' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Sesuaikan dengan jenis data yang benar
        ]);
        // dd($request->all());

        // $image = time() . '.' . $request->foto->extension();
        // $request->foto->storeAs('images', $image, 'public');
        $imageNameWithoutExtension = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_FILENAME);

    // Dapatkan ekstensi file gambar
        $imageExtension = $request->file('foto')->getClientOriginalExtension();

    // Gabungkan nama file dengan ekstensi
        $imageName = $imageNameWithoutExtension . '.' . $imageExtension;

    // Simpan gambar ke direktori public/img dengan nama file yang sama
        $request->file('foto')->storeAs('public/img', $imageName);

        $image = $request->file('foto')->store('public/img');
        $imageName = basename($image);

        DB::table('menus')->insert([
            'nama_menu' => $request->nama_menu,
            'jenis_makanan' => $request->jenis_makanan,
            'deskripsi' => $request->deskripsi,
            'info' => $request->info,
            'harga' => $request->harga,
            'foto' => $imageName, 
        ]);

        // menu::create([
        //     'foto' => '../public/img/' . $image,
        // ]);

        // menu::create($request->all());

        return redirect()->route('crud_adm')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'jenis_menu' => 'required|string',
            'deskripsi' => 'required|string',
            'info' => 'required|string',
            'harga' => 'required|integer',
            'foto' => 'required|string', // Sesuaikan dengan jenis data yang benar
        ]);

        $menu->update($request->all());

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui!');
    }

    public function hapus_menu(Request $request){
        // $transaksi = DB::table('transaksis')->where('id_user','1')->delete();
        $idmenu = $request->id_menu;
        $result = DB::table('menus')
        ->where('id_menu', $idmenu)
        ->delete();
        return redirect()->route('crud_adm');
    }
}
