<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['brand_name' => 'Quiksilver'],
            ['brand_name' => 'Element'],
            ['brand_name' => 'Mormaii'],
            ['brand_name' => 'Rip Curl'],
            ['brand_name' => 'Billabong'],
            ['brand_name' => 'Fatal Surf'],
            ['brand_name' => 'Hurley'],
            ['brand_name' => 'Hang Loose'],
            ['brand_name' => 'Volcom'],
            ['brand_name' => 'Oakley'],
            ['brand_name' => 'Ecko Unltd.'],
        ]);
    }
}
