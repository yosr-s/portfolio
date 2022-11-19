<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\experience;


class ExpController extends Controller
{
    //ajout
    public function addexperience(Request $req){
        $experience = new experience;
        $experience->titre=$req->titre;
        $experience->description=$req->description;
        $experience->periode=$req->periode;

        
        
        $experience->save();
        return redirect('/liste-exp')->with('message','votre experience a été bien ajouté');


        

    }
    //afficher
    public function getExp(){
        $dataExp=experience::all();
        return view('liste-exp',['donnees'=>$dataExp]);
    }
    //modifier
    public function getExpId($id){
        $dataExpShow=experience::find($id);
        return view('/modif-exp',['donnee'=>$dataExpShow]);


    }
    public function updateExp(Request $req){

        $exp = experience::find($req->id);
     
        $exp->titre=$req->titre;
       
        $exp->description=$req->description;
        $exp->periode=$req->periode;


        $exp->save();
        



        return redirect('/liste-exp')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deleteExp($id){
        $dataExpDelete=experience::find($id);
        $dataExpDelete->delete();
        return redirect('/liste-exp')->with('message','votre Exp a bien été supprimé');


    }
}
