<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert(['nome'=> 'Diego Mota', 'cargo'=>'Analista Sênior']);
        DB::table('desenvolvedores')->insert(['nome'=> 'Karol Silva', 'cargo'=>'Analista Júnior']);
        DB::table('desenvolvedores')->insert(['nome'=> 'Leonardo', 'cargo'=>'Estagiário']);
    }
}
