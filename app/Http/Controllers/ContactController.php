<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    //ajout
    public function addContact(Request $req){
        $contact = new contact;
        $contact->nom=$req->nom;
        $contact->email=$req->email;
        $contact->sujet=$req->sujet;
        $contact->message=$req->message;
        
        
        $contact->save();
        return redirect('/liste-contact')->with('message','votre contact a été bien ajouté');


        

    }
    //ajout contact client
    public function addContactClient(Request $req){
        $contact = new contact;
        $contact->nom=$req->nom;
        $contact->email=$req->email;
        $contact->sujet=$req->sujet;
        $contact->message=$req->message;
        
        
        $contact->save();
        return redirect('/index')->with('message','votre contact a été bien ajouté');


        

    }
    //affichage
    public function getContact(){
        $dataContact=contact::all();
        return view('liste-contact',['donnees'=>$dataContact]);
    }
    //modif
    public function getContactId($id){
        $dataContactShow=contact::find($id);
        return view('/modif-contact',['donnee'=>$dataContactShow]);


    }
    public function updateContact(Request $req){

        $contact = contact::find($req->id);
        $contact->nom=$req->nom;

     
        $contact->email=$req->email;
       
        $contact->sujet=$req->sujet;
        $contact->message=$req->message;


        $contact->save();
        



        return redirect('/liste-contact')->with('message','vos données ont bien été modifié');


    }
    //supprim
    public function deleteContact($id){
        $dataContactDelete=contact::find($id);
        $dataContactDelete->delete();
        return redirect('/liste-contact')->with('message','votre Contact a bien été supprimé');


    }
}
