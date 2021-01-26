<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $titleBar="Tambah User";
        return view("createuser",compact("titleBar"));
    }
    public function regist(Request $request){
        $titleBar="Tambah User";
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->password=bcrypt($request->password);
        $user->save();
        return view("createuser",compact("titleBar"));

    }
}
