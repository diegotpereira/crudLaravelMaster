<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipamentos = Equipamento::all();
        return view('equipamentos.index', compact('equipamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipamentos.create', ['action'=>route('equipamento.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $url = $request->get('redirect_to', route('equipamento.index'));
        if (! $request->has('cancel')) {
            # code...
            $dados = $request->all();
            Equipamento::create($dados);
            $request->session()->flash('message', 'O equipamento foi cadastrado com sucesso!.');
        }else {
            # code...
            $request->session()->flash('message', 'A operação foi cancelada pelo usuário!.');
        }
        return redirect()->to($url);
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
    public function destroy(Equipamento $equipamento, Request $request)
    {
        //
        if (! $request->has('cancel')) {
            # code...
            $equipamento->delete();
            $request->session()->flash('message', 'Equipamento excluído com sucesso!.');
        }else {
            # code...
            $request->session()->flash('message', 'Operação cancelada pelo usuário!.');
        }
        return redirect()->route('equipamento.index');
    }
}
