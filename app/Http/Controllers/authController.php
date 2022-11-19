<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class authController extends Controller
{
    //ajout
    public function addAuth(Request $req){

        $auth =new User;
      
        $auth->email=$req->email;
        $auth->password=$req->password;
        $auth->name=$req->name;

        
      
        $auth->save();
        return redirect('/liste-auth')->with('message','votre auth a été bien ajouté');


        
    }
    //affichage
    public function getAuth(){
        $dataAuth=User::all();
        return view('liste-auth',['donnees'=>$dataAuth]);
    }
    //modif
    public function getAuthId($id){
        $dataAuthShow=User::find($id);
        return view('/modif-auth',['donnee'=>$dataAuthShow]);


    }
    public function updateAuth(Request $req){

        $Auth = User::find($req->id);
     
        $Auth->email=$req->email;
        $Auth->name=$req->name;

       
        $Auth->password=$req->password;

        $Auth->save();
        



        return redirect('/liste-auth')->with('message','vos données ont bien été modifié');


    }
    //suprrim
    public function deleteAuth($id){
        $dataPersDelete=User::find($id);
        $dataPersDelete->delete();
        return redirect('/liste-auth')->with('message','vos données ont bien été supprimé');


    }
}
