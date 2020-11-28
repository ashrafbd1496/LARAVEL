<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


//student route

Route::get('student', 'StudentController@index');



//dev route - 
Route::get('dev',function(){
	echo "Developoer";
});





//Name route
Route::get('samim',function(){
	echo "My name is shamim";
})->name('shamim-ahmed');

Route::get('sakir',function(){
	echo "My name is sakir";
})->name('sakir-ahmed');


//prefix route

Route::prefix('user')->group(function () {

Route::get('about-us',function(){
	echo "It's about us page";
});

Route::get('contact-us',function(){

	echo "It's Contact us page";

});

Route::get('dev/{name?}/{age?}',function($name='Ashraf', $age='30'){
	echo "My name is $name and age is $age";
});


});//end of the prefix route