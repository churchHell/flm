<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemPropetySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            DB::table('category_item')->insert([
                'category_id' => rand(1, 10),
                'item_id' => rand(1, 100)
            ]);
        }
    }
}
