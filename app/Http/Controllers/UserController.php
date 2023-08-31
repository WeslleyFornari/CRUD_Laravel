<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function main(Request $request){
       
        $lista = User::all();

        return view('procurar',compact('lista',));
        
    }

    public function procurar(Request $request){

        $lista = User::all();
    
    return $lista; 
        
    }

        // INSERIR
    public function inserir(Request $request)   {

        return view('inserir');

    }
    public function editar(Request $request,$id)   {
        $user = User::find($id);
        return view('editar',compact('user'));

    }
    public function update(Request $request,$id)   {
        $data=$request->except('_token');
        $user = User::where('id',$id)->update([
            'name'=> $data['txtname'],
            'email'=> $data['txtemail'],
        ]);
        return redirect()->route('main');

    }

    public function store(Request $request)   {

        $data=$request->except('_token');
        //dd($data);
        User:: create([

            'name'=> $data['txtname'],
            'email'=> $data['txtemail'],
        ]); 

        return redirect()->route('main');

    }
            
}
