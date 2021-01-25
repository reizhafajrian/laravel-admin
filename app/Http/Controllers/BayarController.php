<?php

namespace App\Http\Controllers;

use App\TambahMenu;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class BayarController extends Controller
{
    public function index(Request $request){
        $menu=new TambahMenu();
        $data=$menu->where("nama","$request->nama")->first();
        $hasil=$menu->where("nama","$request->nama")->get("ketersedian")->first();
        $value=((int)$hasil->ketersedian)-((int)$request->value);
     
        
        return response()->json($hasil, 200);
    }
}
