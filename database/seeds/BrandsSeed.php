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
            ['name' => 'Quiksilver'],
            ['name' => 'Element'],
            ['name' => 'Mormaii'],
            ['name' => 'Rip Curl'],
            ['name' => 'Billabong'],
            ['name' => 'Fatal Surf'],
            ['name' => 'Hurley'],
            ['name' => 'Hang Loose'],
            ['name' => 'Volcom'],
            ['name' => 'Oakley'],
            ['name' => 'Ecko Unltd.'],
        ]);
    }
}
