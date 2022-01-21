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
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User;
use App\Http\Controllers\visiController;


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
	
Route::group(['middleware' => 'auth:admin'],function() {
	Route::get('/auth',[AdminController::class,'auth'])->name('admin.auth');
	Route::post('/update',[AdminController::class,'update'])->name('admin.update');
});

	Route::get('/',[DashboardController::class,'index'])->name('admin.home');
	Route::get('/accueil',[DashboardController::class,'index'])->name('admin.home');
	Route::post('/filtrer',[DashboardController::class,'filtrer'])->name('filtrer');
	Route::get('/filtrer',[DashboardController::class,'index']);
	
	// etudiant manage routes
	Route::prefix('etudiant')->group(function() {

	Route::get('/',[EtudiantsController::class,'index'])->name('etudiants');
	Route::get('/profile/{id}',[EtudiantsController::class,'show'])->name('etudiant.profile');
	Route::get('/edit/{id}',[EtudiantsController::class,'edit'])->name('etudiant.edit');
	Route::post('/update/{id}',[EtudiantsController::class,'update'])->name('etudiant.update');
	Route::get('/create',[EtudiantsController::class,'create'])->name('etudiant.add');
	Route::post('/store',[EtudiantsController::class,'store'])->name('etudiant.store');
	Route::get('/delete/{id}',[EtudiantsController::class,'destroy'])->name('etudiant.destroy');
	
	Route::get('/payer/{id}',[EtudiantsController::class,'payer'])->name('pay.update');
	
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
	Route::group(['prefix' => 'users'],function() {
		Route::get('/',[UserController::class,'index'])->name('users');
		Route::post('/store/{id}',[UserController::class,'store'])->name('auth.store');
		Route::post('/update/{id}',[UserController::class,'update'])->name('auth.update');
		Route::get('/delete/{id}',[UserController::class,'delete'])->name('auth.delete');
		});
	Route::prefix('subscribers')->group(function() {
		Route::get('/',[SubscribeController::class,'index'])->name('subscribers');
		Route::get('/delete/{id}',[SubscribeController::class,'destroy'])->name('sub.delete');
		Route::get('/excel',[SubscribeController::class,'export'])->name('subcribe.excel');

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
Route::post('/contact', 'ContactController@submitContactForm')->name('contact.submit');
Route::post('/subs',[HomeController::class,'store'])->name('subscribe.store');
Route::post('/check',[visiController::class,'check'])->name('check');
Route::get('/userlogout',[visiController::class,'logout'])->name('user.logout');

Route::middleware('auth:web')->group( function() {
	Route::get('/inscription', [ProfileController::class,'create'])->name('inscrip');
	Route::get('/profile', [ProfileController::class,'edit'])->name('user.edit');
	Route::post('/store', [ProfileController::class,'store'])->name('user.store');
	Route::post('/update', [ProfileController::class,'update'])->name('user.update');
	
});

Auth::routes();

});