<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            DB::table('item_tag')->insert([
                'item_id' => rand(1, 100),
                'tag_id' => rand(1, 10),
            ]);
        }
    }
}
