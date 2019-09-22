<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome'=> 'Sistema Fiscal', 'estimativa_horas'=>200]);
        DB::table('projetos')->insert(['nome'=> 'Reembolso Notas', 'estimativa_horas'=>120]);
        DB::table('projetos')->insert(['nome'=> 'Novo People', 'estimativa_horas'=>600]);
        DB::table('projetos')->insert(['nome'=> 'Nova Intranet', 'estimativa_horas'=>3200]);
    }
    
}
