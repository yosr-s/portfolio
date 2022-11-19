<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{
    //ajout
    public function addService(Request $req){
        $service = new service;
        $service->titre=$req->titre;
        $service->description=$req->description;

       /* $req->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName=time() . '-' . $req->titre . '.' . $req->image->extension();
        $req->image->move(public_path('Image'),$newImageName);

        $service=service::create([
            'titre' => $req->input('titre'),
            'description' => $req->input('description'),
            'image'=>$newImageName
        ]);*/

      

        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Image/',$filename);
            $service->image=$filename;
        }
        
        $service->save();
        return redirect('/liste-service')->with('message','votre service a été bien ajouté');


        

    }
    //affichage
    public function getService(){
        $dataService=service::all();
        return view('liste-service',['donnees'=>$dataService]);
    }
    //front
    public function getServ(){
        $dataService=service::all();
    
        return view('/index',['donnees_serv'=>$dataService]);
    }
    //modif
    public function getServiceId($id){
        $dataServiceShow=service::find($id);
        return view('/modif-Service',['donnee'=>$dataServiceShow]);


    }
    public function updateService(Request $req){

        $service = service::find($req->id);
     
       $service->titre=$req->titre;
       
       $service->description=$req->description;
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


        $service->update();

       

        



        return redirect('/liste-service')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deleteService($id){
        $dataServiceDelete=service::find($id);
        $dataServiceDelete->delete();
        return redirect('/liste-service')->with('message','votre Service a bien été supprimé');


    }
}
