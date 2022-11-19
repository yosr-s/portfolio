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

class frontController extends Controller
{
    //
    public function getInfo(){
        $dataPers=pers::all();
        $dataService=service::all();
        $dataExp=experience::all();
        $dataEduc=education::all();
        $dataSkill=skills::all();
        $dataPort=portfolio::all();
        return view('index', ['donnees'=>$dataPers ,'donnees_serv'=>$dataService,'donnees_exp'=>$dataExp,'donnees_educ'=>$dataEduc,'donnees_skill'=>$dataSkill,'donnees_port'=>$dataPort]);
    }
    
}
