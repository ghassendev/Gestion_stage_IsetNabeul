<?php

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
    return view('acceuil');
});

Route::get('/rapport/note',['as'=>'add_note' ,function () {
    return view('noteadd');
}]);
Route::get('rapport/voir',['as'=>'voir' ,function () {
    return view('voir_rapport');
}]);

Route::get('/rapport/date',['as'=>'add_date', function () {
    return view('dateadd');
}]);


Route::get('/rapport/voir', 'RapportsController@voir');
Route::get('/rapport/consulter', 'RapportsController@consulter');
Route::get('/rapport/consulter_dep', 'RapportsController@consulter_dep');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ex', function () {
    return view('baseform');
});
Route::get('log', function () {
    return view('login');
});
Route::get('inscription', function () {
    return view('register');
});
Route::resource('/rapport', 'RapportsController');
Route::match(['get', 'post'],'etudiant_login', ['as'=>'etudiant' ,function () {
    return view('etd_form');
}]);
Route::get('chef_login', function () {
    return view('chef_form');
});
Route::get('dep_login', function () {
    return view('dep_form');
});

Route::post('/rappport', 'RapportsController@index');
