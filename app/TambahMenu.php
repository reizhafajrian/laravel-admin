<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahMenu extends Model
{
    protected $connection="mysql";
    protected $table="tambah_menus";
    protected $fillable=[
        "nama","gambar","desc","harga","tipe","ketersedian"
    ];
}
