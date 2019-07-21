<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Cliente raiz (Todos os clientes raiz)";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Formulário para cadastrar novo cliente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = "Armazenar: " . "<br/> <br/>";
        $s .= "Nome: " . $request->input('nome') . "<br/>";
        $s .= "Idade: " . $request->input('idade') . "<br/>";

        // Aqui eu estou utilizando o metodo response enviando o código HTTP correspondente 
        // à criação, que neste caso é 201;
        return response($s, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $v = ["Diego","Karol","Marcos","Denise"];

        if ($id >=0 && $id < count($v)){
            return $v[$id];
        } else{
            return "Id Não encontrado";
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Formulário para editar cliente com ID = " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s = "Atualizar Cliente com id $id: " . "<br/><br/>";
        $s .= "Nome: " . $request->input('nome') . "<br/>";
        $s .= "Idade: " . $request->input('idade') . "<br/>";
        return response($s, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response("Apagado cliente com ID $id ", 200);
    }

    public function requisitar(Request $request){
        echo "nome : " . $request->input('nome');
    }
}
