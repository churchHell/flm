<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            DB::table('item_property')->insert([
                'item_id' => rand(1, 100),
                'property_id' => rand(1, 10),
                'value' => rand(1, 100),
            ]);
        }
    }
}
