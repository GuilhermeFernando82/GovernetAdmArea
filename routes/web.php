<?php
use App\User;
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

Route::get('', function () {
    return redirect('index');
})->middleware('verification');
Route::get('register')->middleware('verific');
Route::resource('index', 'Adm')->middleware('verification');
Route::resource('profile', 'Users');//->middleware('verification');
Route::resource('Clientes', 'Adm');
//Route::resource('index', 'Adm@store')->middleware('verific');
Route::get('loggout', 'Users@Logouts')->name('Logouts')->middleware('verification');
Route::get('cadastro', function(){
    return view('cadastro_clientes');
});
Route::get('add', function(){
    return view('adicionar')->middleware('verification');
});
Auth::routes();
Route::get('logincliente', function(){
    return view('Auth\logincliente');
})->name("logincliente");
Route::get('editcliente', 'Adm@editcliente')->name('editcliente');
Route::prefix('cliente')->group(function() {
    Route::get('/login','Auth\ClienteLoginController@showLoginForm')->name('cliente.login');
    Route::post('/login', 'Auth\ClienteLoginController@login')->name('cliente.login.submit');
    Route::get('logout/', 'Auth\ClienteLoginController@logout')->name('cliente.logout');
    Route::get('/', 'Adm@index')->name('cliente.dashboard');
   }) ;
Route::get('categoiaadd', function(){
    return view('categoriaadd');
})->name('categoiaadd');
Route::resource('clientearea', 'ClienteArea');
Route::resource('no', 'no1')->middleware('verification');
Route::get('/home', 'HomeController@index')->name('home');
