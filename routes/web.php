<?php

use Illuminate\Http\Request;
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

// Route::get('/', function (Request $request) {
//     dd(
//         //"Laravel 9"
//         $request->path(),  // path name
//         $request->is('/'), // 1 0r 0

//         $request->fullUrl(),
//         $request->host(),
//         $request->httpHost(),
//         $request->schemeAndHttpHost(),

//         $request->routeIs('home'),  // 1 or 0
//         $request->header('X-Header-Name'),
//         $request->header('X-Header-Name', 'default'),
//         $request->bearerToken(),  // Used in API building

//         $request->ip(),
//         $request->prefers(['text/html', 'application/json']),
//     );

// })->name('home');

// Route::get('/', function (Request $request) {

//     $data = [
//         'page_name' => 'Home Page',
//         'name' => 'Larael 9 Course'
//     ];
//     return response($data)
//     ->header('Content-Type', 'application/json')
//     ->cookie('My_IDCard', 'Mahmud Ibrahim', 3600);

// })->name('home');


Route::get('/', function (Request $request) {


    return redirect('/contact-page');

})->name('home');


// Route::get('/', function () {
// return view('home',[
    //     'page_name'=> 'Home Page',
    //     'title'=>"Home"
    // ]);
// })->name('home');

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

// Route::get('/service-page', function () {
//     $page_name="Service Page";
//         $product=[
//             'name'=>"shamim",
//             'mobile'=>'01784766676',
//             'village'=>'mouhali'
//         ];
//         $title="service";
//     return view('service',compact('product','title'));
// })->name('service');

Route::get('/service-page', function (Request $request) {
    $page_name="Service Page";
        $product=[
            'name'=>"shamim",
            'mobile'=>'01784766676',
            'village'=>'mouhali'
        ];
        $title="service";
    return response()->json([
        "products"=> $product,
    ],200);
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
