<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pers;
use App\Models\service;
use App\Models\education;
use App\Models\experience;
use App\Models\contact;
use App\Models\skills;
use App\Models\portfolio;









class PersController extends Controller
{
    //ajout
    public function addPers(Request $req){
        $pers = new pers;
        $pers->nom=$req->nom;
        $pers->prenom=$req->prenom;
        $pers->adresse=$req->adresse;
        $pers->tel=$req->tel;
        $pers->email=$req->email;
        $pers->login=$req->login;
        $pers->fb=$req->fb;
        $pers->ln=$req->ln;
        $pers->git=$req->git;
        $pers->age=$req->age;
        $pers->description=$req->description;

        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Image/',$filename);
            $pers->image=$filename;
        }


        
        $pers->save();
        return redirect('/liste-admin')->with('message','vos informations ont été bien ajoutées');


        

    }
    //affichage
    public function getPers(){
        $dataPers=pers::all();
        return view('liste-admin',['donnees'=>$dataPers]);
    }
   //getInfo
   public function getInfo(){
    $dataPers=pers::all();
    $dataService=service::all();
    $dataExp=experience::all();
    $dataEduc=education::all();
    $dataSkill=skills::all();
    $dataPort=portfolio::all();
    return view('index', ['donnees'=>$dataPers ,'donnees_serv'=>$dataService,'donnees_exp'=>$dataExp,'donnees_educ'=>$dataEduc,'donnees_skill'=>$dataSkill,'donnees_port'=>$dataPort]);
}

    //modif
    public function getPersId($id){
        $dataPersShow=pers::find($id);
        return view('/modif-admin',['donnee'=>$dataPersShow]);


    }
    public function updatePers(Request $req){

        $Admin = pers::find($req->id);
        $Admin->nom=$req->nom;
        $Admin->prenom=$req->prenom;
        $Admin->login=$req->login;
        $Admin->email=$req->email;
        $Admin->adresse=$req->adresse;
        $Admin->tel=$req->tel;
        $Admin->fb=$req->fb;
        $Admin->ln=$req->ln;
        $Admin->git=$req->git;
        $Admin->age=$req->age;
        $Admin->description=$req->description;

      
        if($req->hasfile('image')){
            $destination='Image/'.$service->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Image/',$filename);
            $pers->image=$filename;
        }
    


        $Admin->update();
        



        return redirect('/liste-admin')->with('message','vos données onr bien été modifié');


    }
    //supprim
    public function deletePers($id){
        $dataPersDelete=pers::find($id);
        $dataPersDelete->delete();
        return redirect('/liste-admin')->with('message','votre admin a bien été supprimé');


    }


        
       
}
