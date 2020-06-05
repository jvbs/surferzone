<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Camisetas'],
            ['name' => 'Bermudas'],
            ['name' => 'Pranchas'],
            ['name' => 'Chinelos'],
            ['name' => 'Camisas'],
            ['name' => 'Roupas de Mergulho'],
            ['name' => 'Leash'],
            ['name' => 'Quilhas'],
            ['name' => 'Capas de Prancha'],
            ['name' => 'Óculos de sol'],
            ['name' => 'Chápeus'],
            ['name' => 'Decks'],
            ['name' => 'Carteiras']
        ]);
    }
}
