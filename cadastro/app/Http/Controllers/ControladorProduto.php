<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Produto;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = new Produto();
        $prod = $produtos::all();
        return view('produtos', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat        = new Categoria();
        $categorias = $cat::all();
        return view ('cadastroProduto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Produto;
        $prod->nome = $request->input('nomeProduto');
        $prod->estoque = $request->input('estoque');
        $prod->preco = $request->input('preco');
        $prod->categoria_id = $request->input('categoria');

        $prod->save();
        return redirect('/produtos');
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
        $produto_sele  = Produto::find($id);
        $categorias    = Categoria::all();
        
        if(isset($produto_sele)){
            return view ('editProduto', compact('produto_sele','categorias'));
        }
        else{
            redirect('/produtos');
        }
        
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
        $produto = Produto::find($id);

        if(isset($produto)){
            $produto->nome = $request->input('nomeProduto');
            $produto->estoque = $request->input('estoque');
            $produto->preco = $request->input('preco');
            $produto->categoria_id = $request->input('categoria');
            $produto->save();
        }

        return redirect('/produtos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);

        if(isset($produto)){
            $produto->delete();
        }      

        return redirect('/produtos');
    }
}
