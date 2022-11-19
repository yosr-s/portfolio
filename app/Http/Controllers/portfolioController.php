<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;


class portfolioController extends Controller
{
    //ajout
    public function addportfolio(Request $req){
        $portfolio = new portfolio;
        $portfolio->titre=$req->titre;
        $portfolio->lien=$req->lien;
        $portfolio->categorie=$req->categorie;

        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Image/',$filename);
            $portfolio->image=$filename;
        }
        
        
        
        $portfolio->save();
        return redirect('/liste-portfolio')->with('message','votre portfolio a été bien ajouté');


        

    }
    //affichage
    public function getPort(){
        $dataPort=portfolio::all();
        return view('liste-portfolio',['donnees'=>$dataPort]);
    }
    //modif
    public function getPortId($id){
        $dataPortShow=portfolio::find($id);
        return view('/modif-portfolio',['donnee'=>$dataPortShow]);


    }
    public function updatePort(Request $req){

        $portfolio = portfolio::find($req->id);
     
        $portfolio->titre=$req->titre;
        $portfolio->categorie=$req->categorie;

       
        $portfolio->lien=$req->lien;
        if($req->hasfile('image')){
            $destination='Image/'.$service->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Image/',$filename);
            $service->image=$filename;
        }

        $portfolio->update();
        



        return redirect('/liste-portfolio')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deletePort($id){
        $dataPortDelete=portfolio::find($id);
        $dataPortDelete->delete();
        return redirect('/liste-portfolio')->with('message','votre portfolio a bien été supprimé');


    }
}
