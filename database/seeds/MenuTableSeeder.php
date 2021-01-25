<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TambahMenu::create([
            'nama'=>'burger',
            "gambar"=>"https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528",
            'desc'=>'burger rasa sapi',
            'harga'=>"2000",
            "tipe"=>"Makanan",
            "ketersedian"=>"10"
        ]);
    }
}
