<?php

use App\Projeto;
use App\Desenvolvedor;
use App\Alocacao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/desenolvedor_projeto', function () {
    
    $desenv = Desenvolvedor::with('projetos')->get();

    foreach($desenv as $d){
        echo "<p> Nome desenvolvedor: ". $d->nome . " </p>";
        echo "<p> Cargo: ". $d->cargo . " </p>";        

        if (count($d->projetos)> 0 ){
            echo "Projetos: <br/>";
            echo "<ul>";
                foreach ($d->projetos as $p){
                    echo "<li>" ;
                    echo "Nome: " . $p->nome . " | ";
                    echo "Horas Projeto: " . $p->estimativa_horas . " | ";;
                    echo "Horas Trabalhadas: " . $p->pivot->horas_semanais;
                    echo "</li>";
                }
            echo "</ul>";
        }

        echo "<hr/>";
    }

    //return $desenv->toJson();
    
});

Route::get('/projeto_desenvolvedor', function(){

    $proj = Projeto::with('desenvolvedores')->get();

    //  return $proj->toJson();

    if (isset($proj)){
        echo "<ul> ";

        foreach ($proj as $p) {
            echo "<li> ID Projeto: " . $p->id .  " | ";
            echo  " Nome: ". $p->nome . " | ";
            echo  "Horas Estimadas: " . $p->estimativa_horas . "<br/>";

            foreach ($p->desenvolvedores as $d) {                
                echo "Desenvolvedor: " . $d->nome . "<br/> ";
                echo "Horas Trabalhadas: " . $d->pivot->horas_semanais . "<br/>" ;
            }

            echo "</li><br/>";
        }
        echo "</ul>";
        echo "<hr/>";
    }else{
        echo "<h2>Não possui projetos vigentes</h2>";
    }
});

Route::get('/alocar', function(){
    $proj = Projeto::find(4);

    if (isset($proj)){
        $proj->desenvolvedores()->attach(
            [2 => ['horas_semanais' => 10] ]
            );
    }
});

Route::get('/desalocar', function(){
    $proj = Projeto::find(4);

    if (isset($proj)){
        $proj->desenvolvedores()->detach([1]);
    }
});