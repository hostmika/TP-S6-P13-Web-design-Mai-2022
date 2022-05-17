<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function login(){
        if(Session::has('utilisateur')){
          return redirect(route('contenu'));  
        }
        else{
           return view('pages.login');   
        }
        
    }

    public function connexion(Request $request){

        $utilisateur = User::where(['email'=>$request->email])->first();
        if(!$utilisateur || !Hash::check($request->password,$utilisateur->password)){
            Session::flash('erreur','votre email ou mot de passe est incorrect');
            //dd(session()->get('erreur'));
            return redirect('/login');
        }
        else{
           $request->session()->put('utilisateur',$utilisateur);
           return redirect('/'); 
        }
    }

    public function deconnexion(){

        Session::forget('utilisateur');
        return redirect('/');
    }
}
