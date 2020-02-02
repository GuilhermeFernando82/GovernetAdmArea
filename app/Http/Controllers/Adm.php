<?php

namespace App\Http\Controllers;
use App\Clientes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Adm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cli = User::all();
       
          
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
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Clientes $cli)
    {
    
        $rules = [
            'name' => 'required|unique:users|max:255',
            'status' => 'required',
            'razao' => 'required',
            'cnpj' => 'required|max:18|min:18',
            'cep' => 'required|max:15|',
            'uf' => 'required',
            'cidade' => 'required',
            'complemento' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'primaryImage' => 'required',
        ];
    
        $customMessages = [
            'required' => 'Preencha o campo  :attribute',
            'unique' => 'Já existe um cadastro com esse :attribute'
        ];
    
        $this->validate($request, $rules, $customMessages);



        $image = $request->file('primaryImage');
        $cli->name = $request->name;
        $cli->status = $request->status;
        $cli->razao = $request->razao;
        $cli->cnpj = $request->cnpj;
        $cli->cep = $request->cep;
        $cli->uf = $request->uf;
        $cli->cidade = $request->cidade;
        $cli->complemento = $request->complemento;
        $cli->email = $request->email;
        $cli->password = bcrypt($request->password);
        $cli->picture = $image->store('/public');
        $cli->save();
        return redirect()->back()->with('alert3', 'Cliente adicionado com Sucesso');
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
        $cli = Clientes::find($id);
        $cli2 = Clientes::all();
        $cadastros = DB::table('clientes')->where('id', $id)->get();
        //$cadastros1 = DB::table('contratos')->where()->get();
        return view("edit_clientes",  compact("cli", "cadastros"));

            
        
    }
    public function editcliente($id, Clientes $cli)
    {
        $cli = Clientes::find($id);
        $cli2 = Clientes::all();
        $cadastros = DB::table('clientes')->where('id', Auth::guard('clientes')->user()->id)->get();
        //$cadastros1 = DB::table('contratos')->where()->get();
        return view("profile_cliente",  compact("cli", "cadastros"));

            
        
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
            $cli->status = $request->status;
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
            $cli->status = $request->status;
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
            $cli->status = $request->status;
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
            $cli->status = $request->status;
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
