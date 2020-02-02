<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Logouts(){
        //echo "auth:" . Auth::user();
        Auth::logout();
        return redirect()->route('login');
    }
    public function index()
    {
        //
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
    public function edit($id, User $cli)
    {
        $cli = User::find($id);
        $cli2 = User::all();
        $cadastros = DB::table('users')->where('id', auth()->user()->id)->get();
        //$cadastros1 = DB::table('contratos')->where()->get();
        return view("profile",  compact("cli", "cadastros"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $cli )
    {
        $cli = User::find($id);
        
        if($request->file('primaryImage') && !$request->password){
            $image = $request->file('primaryImage');
            $cli->picture = $image->store('/public');
            $cli->name = $request->name;
            $cli->email = $request->email;
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }elseif(!$request->file('primaryImage') && $request->password){
            $cli->name = $request->name;
            $cli->email = $request->email;
            $cli->password = bcrypt($request->password);
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }elseif(!$request->file('primaryImage') && !$request->password){
            $cli->name = $request->name;
            $cli->email = $request->email;
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');

        }else{
            $image = $request->file('primaryImage');
            $cli->picture = $image->store('/public');
            $cli->name = $request->name;
            $cli->email = $request->email;
            $cli->password = bcrypt($request->password);
            $cli->update();
            return redirect()->back()->with('alert3', 'Dados alterados com sucesso!!!');
        }
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
