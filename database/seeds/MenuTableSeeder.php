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
        App\MenuModel::create([
            'name'=>'burger',
            'desc'=>'burger rasa sapi'
        ]);
        App\MenuModel::create([
            'name'=>'burger',
            'desc'=>'burger rasa sapi'
        ]);

        App\MenuModel::create([
            'name'=>'burger',
            'desc'=>'burger rasa sapi'
        ]);   App\MenuModel::create([
            'name'=>'burger',
            'desc'=>'burger rasa sapi'
        ]);
        App\MenuModel::create([
            'name'=>'burger',
            'desc'=>'burger rasa sapi'
        ]);
    }
}
