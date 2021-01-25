<?php

namespace App\Http\Controllers;

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
    public function regist(){
        
    }
}
