<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\no;
use Illuminate\Support\Facades\DB;
class no1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = DB::table('cat')->get();
        return view('adicionar', compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, no $no)
    {
        $rules = [
            'titulo' => 'required|unique:cat|max:255',
            'link' => 'required',
            'tags' => 'required',
            'conteudo' => 'required',
        ];
    
        $customMessages = [
            'required' => 'Preencha o campo  :attribute',
            'unique' => 'Já existe um cadastro com esse :attribute'
        ];
    
        $this->validate($request, $rules, $customMessages);
 
        $no->titulo = $request->titulo;
        $no->link = $request->link;
        $no->tags = $request->tags;
        $no->conteudo = $request->conteudo;
        $no->categoria = $request->cat;
        $no->save();
        return redirect()->back()->with('alert3', 'adicionado com Sucesso');
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
        $cli = no::find($id);
        $cli2 = no::all();
        $cadastros = DB::table('cat')->where('id', $id)->get();
        //$cadastros1 = DB::table('contratos')->where()->get();
        return view("adicionar_edit",  compact("cli", "cadastros"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, no $no1)
    {
        $no1 = no::find($id);
        $no1->titulo = $request->titulo;
        $no1->link = $request->link;
        $no1->tags = $request->tags;
        $no1->conteudo = $request->conteudo;
        $no1->categoria = $request->cat;
        $no1->update();
        return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, no $no1)
    {
        $no1 = no::find($id);
        $delete = $no1->delete($id);
        return redirect()->back();
    }
}
