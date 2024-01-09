<?php

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

Route::get('/', function () {
    return view('home',[
        'page_name'=> 'Home Page',
        'title'=>"Home"
    ]);
})->name('home');

Route::get('/about-page', function () {
    $title="About";
    return view('about',[
        'page_name'=> 'About Page',
        'title'=>"About"

    ]);
})->name('about');

Route::get('/contact-page', function () {
    $page_name= "Contact Page";
    $title="contact";
    return view('contact',compact('page_name','title'));
})->name('contact');

Route::get('/service-page', function () {
    $page_name="Service Page";
        $product=[
            'name'=>"shamim",
            'mobile'=>'01784766676',
            'village'=>'mouhali'
        ];
        $title="service";
    return view('service',compact('product','title'));
})->name('service');


// Route::get('/service-page/{service_id?}', function (string $service_id=null) {
//     return view('service').$service_id;
// })->name('service');


// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return $id ." ".$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/user1/{id}', function (string $id) {
//     return $id ;
// })->where('id','.*');
