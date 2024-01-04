<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\menu;

class MenuController extends Controller
{
    public function index():View{
        $data = menu::all();
        return view('menu',compact('data'));
    }
}
