<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

// LISTAR
    public function listar(Request $request){
       
        $lista = User::all();
        
        return view('home',compact('lista',));
        
    }

// CADASTRAR
    public function cadastrar(Request $request)   {

        return view('cadastro');
    }

//SALVAR
    public function salvar(Request $request)   {

        // Valide os dados do formulário, se necessário
        $x = $request->validate([
        'img_avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        'email'=>'required|:users']);

        // Salve a imagem no sistema de arquivos (storage/app/public)
         $imagemPath = $request->file('img_avatar')->store('/img/avatar');

        $data=$request->except('_token');
        //dd($data);
        $user = User:: create([
            'name'=> $data['txt_name'],
            'email'=> $data['email'],
            'avatar'=> $imagemPath,
        ]); 

        return redirect()->route('home');
    }

// LISTAR BY ID
    public function editar_id(Request $request,$id)   {
        $user = User::find($id);
        return view('editar',compact('user'));

    }
// UPDATE   
    public function update(Request $request,$id)   {

        // Valide os dados do formulário, se necessário
        $x = $request->validate([
            'img_avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'email'=>'required|:users']);

        // Apagar o imagem antiga armazenada
        $user = User::find($id);
        unlink($user->avatar);
       
        // Atualiza a nova imagem no sistema de arquivos (storage/app/public)
        $imagemUpPath = $request->file('img_avatar')->store('/img/avatar');
        
        $data=$request->except('_token'); //recebe as informações no objeto.
        User::where('id',$id)->update([
            'name'=> $data['txtname'],
            'email'=> $data['email'],
            'avatar'=> $imagemUpPath,
        ]);
        return redirect()->route('home');

    }

// DELETAR    
    public function deletar(Request $request,$id)   {

        $user = User::find($id);
        unlink($user->avatar);
        $user-> delete();
        
        // $data=$request->except('_token');
        // $user = User::where('id',$id)->delete();

        return redirect()->route('home');
    }
}

/* CREATE E UPDATE 2
        public function update2 (Request $request, $id){
        
        $user = User::find($id);    CREATE: $user = new User();

        $user->name =   $request->input('textname')
        $user->emal =  $request->input('email')
        $user->avatar = $request->input('img_avatar')
    }
*/
