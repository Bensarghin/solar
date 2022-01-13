<?php

use Illuminate\Support\Facades\Route;
// admin controllers
use App\Http\Controllers\backoffice\AdminController;
use App\Http\Controllers\backoffice\DashboardController;
use App\Http\Controllers\backoffice\EtudiantsController;
use App\Http\Controllers\backoffice\VilleController;
use Illuminate\Support\Facades\Auth;

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

	// Auth routes
Route::get('/login',[AdminController::class,'index'])->name('admin.login');
Route::post('/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

	Route::get('/',[DashboardController::class,'index']);
	Route::get('/accueil',[DashboardController::class,'index'])->name('admin.home');
	
	// etudiant manage routes
	Route::prefix('etudiant')->group(function() {
	Route::get('/',[EtudiantsController::class,'index'])->name('etudiants');
	Route::get('/profile/{id}',[EtudiantsController::class,'show'])->name('etudiant.profile');
	Route::get('/edit/{id}',[EtudiantsController::class,'edit'])->name('etudiant.edit');
	Route::post('/update/{id}',[EtudiantsController::class,'update'])->name('etudiant.update');
	Route::get('/create',[EtudiantsController::class,'create'])->name('etudiant.add');
	Route::post('/store',[EtudiantsController::class,'store'])->name('etudiant.store');
	Route::get('/delete/{id}',[EtudiantsController::class,'destroy'])->name('etudiant.destroy');
	
	// contact update
	Route::prefix('contact')->group(function() {
		Route::post('/update/{id}',[EtudiantsController::class,'contact'])->name('contact.update');
	});
	// scolaire update
	Route::prefix('scolaire')->group(function() {
		Route::post('/update/{id}',[EtudiantsController::class,'scolaire'])->name('scolaire.update');
		});

	});
	Route::get('/villes',[VilleController::class,'index']);
});

//Etudiant routes
Route::get('/', function () { return view('welcome');});	
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

});