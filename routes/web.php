<?php


//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
  $name ="Mahmoud AlRubai ";
    return view('about' , compact('name'));
});


Route::post('send', function(Request $request){
    $name = $request ->myname;
    return view('about', compact('name'));
});