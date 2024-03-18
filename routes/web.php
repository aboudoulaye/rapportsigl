<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\UserController;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[AppController::class,'accueil'])->name('accueil.page');
Route::get('/loginPage',[AppController::class, 'authenticate'])->name('login.page');

Route::post('/loginPage',[UserController::class, 'loginHandler'])->name('login.handler');

Route::group(['middleware' => 'auth'], function () {

// route de deconnexion 
Route::post('/logout',[UserController::class, 'destroy'])->name('logout');

//routes pour dashboard admin et service
Route::get('/adminDashboard',[UserController::class, 'admindashboard'])->name('admin.dashboard');
Route::get('/serviceDashboard',[UserController::class, 'servicedashboard'])->name('service.dashboard');
// fin routes admin et service

Route::get('/userCreatepage',[UserController::class, 'createUserPage'])->name('createuser.page');
Route::post('/userCreatepage',[UserController::class, 'createUser'])->name('createuser.Handler');
Route::get('/userCreatepage/list',[UserController::class,'userList'])->name('userlist.page');
Route::get('/userCreatepage/editList',[UserController::class, 'userEditList'])->name('editList.page');
Route::get('/userCreatepage/editList/{user}',[UserController::class, 'userEdit'])->name('edit.page');
Route::post('/userCreatepage/editList/{user}',[UserController::class, 'userEditHandler'])->name('edit.handler');
Route::DELETE('/userCreatepage/editList/delete/{user}',[UserController::class, 'deleteUser' ])->name('delete.page');

//routes des formulaires service

Route::get('/medecineFormPage',[FormulaireController::class, 'medecineForm'])->name('medecineform.page');
Route::get('/chirurgieFormPage',[FormulaireController::class, 'chirurgieForm'])->name('chirurgieform.page');
Route::post('/chirurgieFormPage',[FormulaireController::class, 'creatreReport'])->name('reportform.page');
Route::get('/pediatrieFormPage',[FormulaireController::class, 'pediatrieForm'])->name('pediatrieform.page');
Route::get('/urgenceFormPage',[FormulaireController::class, 'urgenceForm'])->name('urgenceform.page');
Route::get('/materniteFormPage',[FormulaireController::class, 'materniteForm'])->name('materniteform.page');
Route::get('/laboFormPage',[FormulaireController::class, 'laboForm'])->name('laboform.page');
Route::get('/radioFormPage',[FormulaireController::class, 'radioForm'])->name('radioform.page');
Route::get('/sevciFormPage',[FormulaireController::class, 'sevciForm'])->name('sevciform.page');
Route::get('/odontoFormPage',[FormulaireController::class, 'odontoForm'])->name('odontoform.page');
Route::get('/kineFormPage',[FormulaireController::class, 'kineForm'])->name('kineform.page');

// fin des routes formulaires service
});  


    