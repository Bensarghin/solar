<?php

use Illuminate\Support\Facades\Route;
// admin controllers
use App\Http\Controllers\backoffice\AdminController;
use App\Http\Controllers\backoffice\DashboardController;
use App\Http\Controllers\backoffice\EtudiantsController;

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
Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
	], function(){ 
	
// Admin routes group
Route::prefix('admin')->group(function(){

	Route::get('/',[DashboardController::class,'index']);
	Route::get('/accueil',[DashboardController::class,'index'])->name('admin.home');
	// etudiant manage routes
	Route::prefix('etudiant')->group(function(){
	Route::get('/',[EtudiantsController::class,'index'])->name('etudiants');
	Route::get('/profile/{id}',[EtudiantsController::class,'show'])->name('etudiant.profile');
	Route::get('/edit/{id}',[EtudiantsController::class,'edit'])->name('etudiant.edit');
	Auth::routes();
	});
});

//Etudiant routes
Route::get('/', function () { return view('welcome');});	
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});