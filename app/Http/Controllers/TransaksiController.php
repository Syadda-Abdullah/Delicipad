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
}
