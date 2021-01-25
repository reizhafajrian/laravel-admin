<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama", 40);
            $table->string("gambar", 250)->default("");
            $table->string("desc",250)->default("");
            $table->string("harga",250)->default("");
            $table->string("tipe", 250)->default("");
            $table->string("ketersedian", 250)->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
