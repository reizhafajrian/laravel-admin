<?php

namespace App\Http\Controllers;

use App\MenuModel;
use App\TambahMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data=new TambahMenu();
        $collection=$data->where("tipe","Makanan")->get();
        $minuman=$data->where("tipe","Makanan")->get();
    
        $titleBar="Menu";

        return view("menu",compact('titleBar',"collection","minuman"));
    }
}
