<?php

use Illuminate\Database\Seeder;

use App\Produtos;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Produtos::class, 45 /* linhas */)->create();
    }
}
