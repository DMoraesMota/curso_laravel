<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome'=> 'Camiseta Pollo', 'preco'=> 100, 'estoque' => 100, 'categoria_id' => 1 ]);
        DB::table('produtos')->insert(['nome'=> 'Calça Jeans', 'preco'=> 70, 'estoque' => 15, 'categoria_id' => 1 ]);
        DB::table('produtos')->insert(['nome'=> 'Mouse', 'preco'=> 30, 'estoque' => 50, 'categoria_id' => 5 ]);
        DB::table('produtos')->insert(['nome'=> 'Extrato de Tomate', 'preco'=> 3, 'estoque' => 500, 'categoria_id' => 4 ]);
        DB::table('produtos')->insert(['nome'=> 'Guarda Roupas', 'preco'=> 3500, 'estoque' => 2, 'categoria_id' => 6 ]);
    }
}
