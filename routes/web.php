<?php

use Illuminate\Support\Facades\Route;
// admin controllers
use App\Http\Controllers\backoffice\AdminController;
use App\Http\Controllers\backoffice\DashboardController;
use App\Http\Controllers\backoffice\EtudiantsController;
use App\Http\Controllers\backoffice\VilleController;
use App\Http\Controllers\backoffice\UserController;
// guests controllers
use App\Http\Controllers\ProfileController;
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
	
// Admin routes group
Route::prefix('admin')->group(function(){
	// Auth routes
Route::get('/login',[AdminController::class,'index'])->name('admin.login');
Route::post('/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function(){
	Route::get('/auth',[AdminController::class,'auth'])->name('admin.auth');
	Route::post('/update',[AdminController::class,'update'])->name('admin.update');


	Route::get('/',[DashboardController::class,'index'])->name('admin.home');
	Route::get('/accueil',[DashboardController::class,'index'])->name('admin.home');
	Route::post('/filtrer',[DashboardController::class,'filtrer'])->name('filtrer');
	
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
	// users
	Route::prefix('users')->group(function() {
		Route::get('/',[UserController::class,'index'])->name('users');
		Route::post('/store/{id}',[UserController::class,'store'])->name('auth.store');
		Route::post('/update/{id}',[UserController::class,'update'])->name('auth.update');
		Route::get('/delete/{id}',[UserController::class,'delete'])->name('auth.delete');
		});
	Route::get('/villes',[VilleController::class,'index']);
	Route::get('/regions',[VilleController::class,'regions']);

});
});

//Etudiant routes

Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
	], function(){ 

Route::get('/', function () { return view('Acc');})->name('home');
Route::get('/home', function () { return view('Acc');})->name('home');
Route::get('/contact', function () { return view('contact');})->name('contact')	;
Route::get('/inscription', [ProfileController::class,'create'])->name('inscrip');
Route::get('/profile', [ProfileController::class,'edit'])->name('user.edit');
Route::post('/store', [ProfileController::class,'store'])->name('user.store');
Route::post('/update', [ProfileController::class,'update'])->name('user.update');
Route::post('contact', 'ContactController@submitContactForm')->name('contact.submit');
Auth::routes();

});