<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skills;


class SkillController extends Controller
{
    //ajout
    public function addSkill(Request $req){
        $Skill = new Skills;
        $Skill->titre=$req->titre;
        $Skill->pourcentage=$req->pourcentage;
        
        
        $Skill->save();
        return redirect('/liste-skill')->with('message','votre Skill a été bien ajouté');


        

    }
    //affchage
    public function getSkill(){
        $dataSkill=skills::all();
        return view('liste-skill',['donnees'=>$dataSkill]);
    }
    //modif
    public function getSkillId($id){
        $dataSkillShow=skills::find($id);
        return view('/modif-skill',['donnee'=>$dataSkillShow]);


    }
    public function updateSkill(Request $req){

        $skill = skills::find($req->id);
     
        $skill->titre=$req->titre;
       
        $skill->pourcentage=$req->pourcentage;

        $skill->save();
        



        return redirect('/liste-skill')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deleteSkill($id){
        $dataSkillDelete=skills::find($id);
        $dataSkillDelete->delete();
        return redirect('/liste-skill')->with('message','votre Skill a bien été supprimé');


    }
}
