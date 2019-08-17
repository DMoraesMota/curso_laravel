<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    //private $clientes = null;

    private $clientes = [
        ['id'=>1, 'nome'=> 'Diego'],
        ['id'=>2, 'nome'=> 'Karol'],
        ['id'=>3, 'nome'=> 'Marcos'],
        ['id'=>4, 'nome'=> 'Denise'],
        ['id'=>5, 'nome'=> 'Zilma']
    ];

    public function __construct()
    {
        $cliente = session('clientes');
        if (!isset($clientes)){
            session(['clientes' => $this->clientes]);
        }
    }

    /**
     * Neste caso esta rota vai servir para trazer todos os clientes, sem filtro
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        $title    = "Index Cliente";

        //return view('clientes.index', compact(['clientes']));
        /*
        return view('clientes.index')
            ->with('clientes',$clientes)
            ->with('title', $title);
        */
        
        return view('clientes.index', 
            ['clientes'=> $clientes, 'title'=> $title]);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = end($clientes)['id']+1;
        $dados = ["id"=>$id, "nome"=> $request->nome];
        $clientes[] = $dados;

        session(['clientes' => $clientes]);
        
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.info', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.edit', compact('cliente'));
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
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $clientes[$index]['nome'] = $request->nome;
        session(['clientes' => $clientes]);        
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]); 
        return redirect()->route('clientes.index');
    }

    private function getIndex($id, $clientes){
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);  
        return $index;
    }
}
