<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\EducController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\authController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
//ajout client
Route::view('/','index');
Route::post('addContactClient',[ContactController::class,'addContact']);





Route::group(['middleware' => 'guest'], function () {

    Route::get('/login6', function () {
        return view('login6');
    });
    

});
Route::group(['middleware' => ['admin']], function () {

    Route::get('/ajout-admin', function () {
        return view('ajout-admin');
    });
    Route::get('/ajout-contact', function () {
        return view('ajout-contact');
    });

   


    




Route::get('/ajout-educ', function () {
    return view('ajout-educ');
});
Route::get('/ajout-auth', function () {
    return view('ajout-auth');
});
Route::get('/liste-auth', function () {
    return view('liste-auth');
});
Route::get('/modif-auth', function () {
    return view('modif-auth');
});
Route::get('/ajout-portfolio', function () {
    return view('ajout-portfolio');
});
Route::get('/modif-portfolio', function () {
    return view('modif-portfolio');
});
Route::get('/liste-portfolio', function () {
    return view('liste-portfolio');
});
Route::get('/ajout-exp', function () {
    return view('ajout-exp');
});
Route::get('/ajout-service', function () {
    return view('ajout-service');
});
Route::get('/ajout-skill', function () {
    return view('ajout-skill');
});
Route::get('/liste-admin', function () {
    return view('liste-admin');
});
Route::get('/liste-contact', function () {
    return view('liste-contact');
});
Route::get('/liste-educ', function () {
    return view('liste-educ');
});
Route::get('/liste-exp', function () {
    return view('liste-exp');
});
Route::get('/liste-service', function () {
    return view('liste-service');
});
Route::get('/liste-skill', function () {
    return view('liste-skill');
});
Route::get('/modif-admin', function () {
    return view('modif-admin');
});
Route::get('/modif-contact', function () {
    return view('modif-contact');
});
Route::get('/modif-educ', function () {
    return view('modif-educ');
});
Route::get('/modif-exp', function () {
    return view('modif-exp');
});
Route::get('/modif-service', function () {
    return view('modif-service');
});
Route::get('/modif-skill', function () {
    return view('modif-skill');
});
//ajout
Route::view('/ajout-admin','ajout-admin');
Route::post('addPers',[PersController::class,'addPers']);
Route::view('/ajout-contact','ajout-contact');
Route::post('addContact',[ContactController::class,'addContact']);
Route::view('/ajout-Service','ajout-Service');
Route::post('addService',[ServiceController::class,'addService']);
Route::view('/ajout-skill','ajout-skill');
Route::post('addSkill',[SkillController::class,'addSkill']);
Route::view('/ajout-exp','ajout-exp');
Route::post('addexperience',[ExpController::class,'addexperience']);
Route::view('/ajout-educ','ajout-educ');
Route::post('addeduc',[EducController::class,'addeduc']);
Route::view('/ajout-portfolio','ajout-portfolio');
Route::post('addportfolio',[portfolioController::class,'addportfolio']);
Route::view('/ajout-auth','ajout-auth');
Route::post('addAuth',[authController::class,'addAuth']);

//affichage
Route::get('/liste-admin',[PersController::class,'getPers']);
Route::get('/liste-auth',[authController::class,'getAuth']);
Route::get('/liste-service',[ServiceController::class,'getService']);
Route::get('/liste-contact',[ContactController::class,'getContact']);
Route::get('/liste-skill',[SkillController::class,'getSkill']);
Route::get('/liste-educ',[EducController::class,'getEduc']);
Route::get('/liste-exp',[ExpController::class,'getExp']);
Route::get('/liste-portfolio',[portfolioController::class,'getPort']);
//modif
Route::get('/modifierPers/{id}',[PersController::class,'getPersId']);
Route::post('/editPers',[PersController::class,'updatePers']);
Route::get('/modifierAuth/{id}',[authController::class,'getAuthId']);
Route::post('/editAuth',[AuthController::class,'updateAuth']);
Route::get('/modifierContact/{id}',[ContactController::class,'getContactId']);
Route::post('/editContact',[ContactController::class,'updateContact']);
Route::get('/modifierEduc/{id}',[EducController::class,'getEducId']);
Route::post('/editEduc',[EducController::class,'updateEduc']);
Route::get('/modifierExp/{id}',[ExpController::class,'getExpId']);
Route::post('/editExp',[ExpController::class,'updateExp']);
Route::get('/modifierPort/{id}',[portfolioController::class,'getPortId']);
Route::post('/editPort',[portfolioController::class,'updatePort']);
Route::get('/modifierService/{id}',[ServiceController::class,'getServiceId']);
Route::post('/editService',[ServiceController::class,'updateService']);
Route::get('/modifierSkill/{id}',[SkillController::class,'getSkillId']);
Route::post('/editSkill',[SkillController::class,'updateSkill']);
//supprim
Route::get('/deletePers/{id}',[PersController::class,'deletePers']);
Route::get('/deleteAuth/{id}',[authController::class,'deleteAuth']);
Route::get('/deleteContact/{id}',[ContactController::class,'deleteContact']);
Route::get('/deleteEduc/{id}',[EducController::class,'deleteEduc']);
Route::get('/deleteExp/{id}',[ExpController::class,'deleteExp']);
Route::get('/deletePort/{id}',[portfolioController::class,'deletePort']);
Route::get('/deleteService/{id}',[ServiceController::class,'deleteService']);
Route::get('/deleteSkill/{id}',[SkillController::class,'deleteSkill']);
//front
//pers



});

Route::get('/',[PersController::class,'getInfo']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


