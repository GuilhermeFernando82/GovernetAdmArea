<?php

namespace App\Http\Controllers;
use App\Clientes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteArea extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cli = DB::table('clientes')->get();
            //where('tipo', 'Cliente')
            return view("index", compact('cli'));
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
    public function store(Request $request)
    {
        //
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
    public function edit($id, Clientes $cli)
    {
        $cli1 = Clientes::find($id);
        $cli2 = Clientes::all();
        $cli = DB::table('clientes')->where('id', Auth::guard('clientes')->user()->id)->get();
        //$cadastros1 = DB::table('contratos')->where()->get();
        return view("profile_cliente",  compact("cli2", "cli"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Clientes $cli)
    {
        $cli = Clientes::find($id);
        if($request->file('primaryImage') && !$request->password){
            $cli->name = $request->name;
            $cli->razao = $request->razao;
            $cli->cnpj = $request->cnpj;
            $cli->cep = $request->cep;
            $cli->uf = $request->uf;
            $cli->cidade = $request->cidade;
            $cli->complemento = $request->complemento;
            $cli->email = $request->email;
            $image = $request->file('primaryImage');
            $cli->picture = $image->store('/public');
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }elseif(!$request->file('primaryImage') && $request->password){
            $cli->name = $request->name;
            $cli->razao = $request->razao;
            $cli->cnpj = $request->cnpj;
            $cli->cep = $request->cep;
            $cli->uf = $request->uf;
            $cli->cidade = $request->cidade;
            $cli->complemento = $request->complemento;
            $cli->email = $request->email;
            $cli->password = bcrypt($request->password);
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }elseif(!$request->file('primaryImage') && !$request->password){
            $cli->name = $request->name;
            $cli->razao = $request->razao;
            $cli->cnpj = $request->cnpj;
            $cli->cep = $request->cep;
            $cli->uf = $request->uf;
            $cli->cidade = $request->cidade;
            $cli->complemento = $request->complemento;
            $cli->email = $request->email;
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }
        else{
            $cli->name = $request->name;
            $cli->razao = $request->razao;
            $cli->cnpj = $request->cnpj;
            $cli->cep = $request->cep;
            $cli->uf = $request->uf;
            $cli->cidade = $request->cidade;
            $cli->complemento = $request->complemento;
            $cli->email = $request->email;
            $cli->password = bcrypt($request->password);
            $image = $request->file('primaryImage');
            $cli->picture = $image->store('/public');
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
            
        };
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
