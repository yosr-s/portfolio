<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\education;


class EducController extends Controller
{
    //ajout
    public function addeduc(Request $req){
        $education = new education;
        $education->titre=$req->titre;
        $education->description=$req->description;
        $education->periode=$req->periode;

        
        
        $education->save();
        return redirect('/liste-educ')->with('message','votre education a été bien ajouté');


        

    }
    //affichage
    public function getEduc(){
        $dataEduc=education::all();
        return view('liste-educ',['donnees'=>$dataEduc]);
    }
    //modif
    public function getEducId($id){
        $dataEducShow=education::find($id);
        return view('/modif-educ',['donnee'=>$dataEducShow]);


    }
    public function updateEduc(Request $req){

        $educ = education::find($req->id);
     
        $educ->titre=$req->titre;
       
        $educ->description=$req->description;
        $educ->periode=$req->periode;


        $educ->save();
        



        return redirect('/liste-educ')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deleteEduc($id){
        $dataEducDelete=education::find($id);
        $dataEducDelete->delete();
        return redirect('/liste-educ')->with('message','votre Educ a bien été supprimé');


    }
}
