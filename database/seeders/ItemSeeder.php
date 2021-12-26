<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name'=>'Futon',
            'price'=>400000,
            'type'=>'Bed',
            'color'=>'Blue Navy',
            'image'=>file_get_contents('storage/images/Karpet.png')
        ]);
    }
}