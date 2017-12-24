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

/*Route::get('/', function () {
    return view('inicio');
});*/

/*Route::get('clientes', function () {
    return view('clientes');
});*/

Route::get('/', function () {
    //return view('welcome');
    return view('home');

})->name('home');

// nosotros, nombre url
Route::get('nosotros', function () {
    return view('about');
    //darle nombre a la ruta
})->name('about');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('servicio', function () {
    return view('service');
})->name('service');


//Route::post('causas', array('uses' =>'CausesController@addCause'))

Route::post('messages', function(){

	//enviar un correo al dueño de la pagina

	$data = request()->all();

	Mail::send("emails.message", $data, function($message) use ($data){
		$message->from($data['email'], $data['name'])
		->to('eidepozo@gmail.com', 'Elliot')
		->subject($data['subject']);
	});
	//var_dump(request()->all());

	//responder al usuario
	return back()->with('flash', $data['name'] . ', Tu mensaje ha sido recibido');
})->name('messages');


Route::get('administracion', 'HomeController@adini')->name('adini');
Route::get('verclientes', 'HomeController@adclient')->name('adclient');
//Route::get('crearclientes', 'HomeController@createclient')->name('createclient');
Route::get('causas', 'HomeController@cause')->name('cause');
Route::post('verclientes', 'HomeController@adclient')->name('adclient');

//Aplicar un middleware a un conjunto de rutas
Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function(){
	Route::get('/usuarios', 'TestController@index')->name('adusers');
});


/*Route::get('clientes', function () {
    return view('clientes');
})->name('clientes');*/

Auth::routes();
//la ruta home es resuelta por HomeController@index
Route::get('/home', 'HomeController@index')->name('home');


//Rutas clientes
Route::get('verclientes','ClientsController@index')->name('adclient');
Route::get('crearclientes','ClientsController@create')->name('createclient');
Route::post('verinfoclientes','ClientsController@infoclients');
Route::post('crearclientes', 'ClientsController@store')->name('createclient');

//Rutas causas
Route::get('causa','CausesController@index')->name('cause');
Route::get('crearcausas','CausesController@create')->name('createcause');
Route::post('crearcausas', 'CausesController@store')->name('createcause');
