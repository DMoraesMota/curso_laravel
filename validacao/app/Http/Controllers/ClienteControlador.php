<?php

namespace App\Http\Controllers;

use App\Cliente;
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
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:2|unique:clientes',            
            'idade' => 'required',
            'endereco' => 'required',
            'email' => 'required|email'
        ];
        $mensagens = [
            'nome.required' => 'Nome campo é obrigatório',
            'nome.min' => 'Nome minimo 2 caracteres',
            'email.required' => 'Digite um e-mail',
            'email.email' => 'Digite um endereço de e-mail valido',
            'required' => 'Campo :attribute é obrigatório' /*Essa validação é dinamica a variável :attribute pega o name do campo */,
            'idade.required' => 'Campo idade é obrigatorio'
        ];

        $request->validate($regras,$mensagens);

        /*$request->validate([
                'nome' => 'required|min:2|unique:clientes',            
                'idade' => 'required',
                'endereco' => 'required',
                'email' => 'required|email'
                ]
            );
        */

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();

        redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
