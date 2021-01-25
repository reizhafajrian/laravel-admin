<?php

namespace App\Http\Controllers;

use App\TambahMenu;
use Illuminate\Http\Request;

class TambahMenuController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $titleBar="Tambah Menu";
        return view("tambahmenu", compact('titleBar'));
    }
    public function store(Request $request)
    {
        dd($request);
        $titleBar="Tambah Menu";
        $menu = new TambahMenu();
        $menu->nama = $request->nama;
        $menu->gambar = $request->gambar;
        $menu->desc = $request->desc;
        $menu->harga = $request->harga;
        $menu->tipe = $request->tipe;
        $menu->ketersedian = $request->ketersedian;
        $menu->save();
        
        return view("tambahmenu",compact("titleBar"));
    }
}
