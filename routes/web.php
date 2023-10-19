<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user; 
use App\Http\Controllers\formController;
use App\Http\Controllers\userController;

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

// Controller
// Route::get('users', [user::class, 'index']);
// Route::get('users', [user::class, 'show']);

Route::get('/', function() {
    return view('welcome');
});

// To serve header.blade.php file
// Route::get('/header', function() {
//     return view('Body.header');
// });

// Route::get('/main', function() {
//     return view('Body.main');
// });

// Route::get('/footer', function() {
//     return view('Body.footer');
// });

// To serve multiple files
// Route::get('/index', function() {
//     return view('Body.header').view('Body.main').view('Body.footer');
// });

// Route::get('users/{id?}', [user::class, 'show']);

// Redirect method
// Route::redirect('/footer', '/products');

// Passing data to view

// Route::get('/products', function () {
//     return view('products', ["name" => "Dell laptop", "price" => "60K"],
//                             ["name" => "Asus laptop", "price" => "60K"],
//                             ["name" => "Lenevo laptop", "price" => "60K"],
//                             ["name" => "HP laptop", "price" => "60K"]
//     );
// });

// Route::get('/products', function () {
//     $products = [
//         ["name" => "Dell laptop", "price" => "60K"],
//         ["name" => "Asus laptop", "price" => "70K"],
//         ["name" => "Lenovo laptop", "price" => "55K"],
//         ["name" => "HP laptop", "price" => "45K"],
//     ];

//     return view('products', compact('products'));
// });

//Q.1 -> create a mvc application that passes the data to view and display them in a tabular form and also in a unordered list
// Route::get('/fruits', function () {
//     $fruits = [
//         ["name" => "Apple", "price" => "Rs60/Kg"],
//         ["name" => "Orange", "price" => "Rs70/Kg"],
//         ["name" => "Banana", "price" => "Rs55/Dozen"],
//         ["name" => "Coconut", "price" => "Rs50/Unit"],
//     ];

//     return view('fruits', compact('fruits'));
// });

// Query paramaters
// Route::get('/aboutus', function () {
//     $name=request('n');
//     $code=request('c');
//     return view('aboutus',['name'=>$name,'code'=>$code]);
// });

// Named route
// Route::get('/aboutus', function () {
//     $name=request('n');
//     $code=request('c');
//     return view('aboutus',['name'=>$name,'code'=>$code]);
//     })->name('aboutusroute');
    
//     Route::get('/intro',function(){
//     return redirect()->route('aboutusroute');
// });

// Route Parameters
// Route::get('/products/{name}/{brand?}', function($name,$brand='DUMMY') {
//     $products=[
//         ["name"=>"Laptop","brand"=>"asus","price"=>50000],
//         ["name"=>"Mobile","brand"=>"Mi","price"=>20000],
//         ["name"=>"Tablet","brand"=>"Apple","price"=>40000]
//     ];

//     return view('products',['products'=>$products,
//     'n'=>$name,'b'=>$brand]);
    
// });
// Route::get('/products/{name}/{brand?}', function($name, $brand = 'DUMMY') {
//     $products = [
//         ["name" => "Laptop", "brand" => "asus", "price" => 50000],
//         ["name" => "Mobile", "brand" => "Mi", "price" => 20000],
//         ["name" => "Tablet", "brand" => "Apple", "price" => 40000]
//     ];

//     return view('products', [
//         'products' => $products,
//         'requestedName' => $name,
//         'requestedBrand' => $brand
//     ]);
// });

// Using controller to show form.balde.php
// Route::get('forms', [formController::class, 'showForm']);
// Route::post('/process-form', [formController::class, 'processForm'])->name('process-form');

// Middleware
// Route::get('/users', function() {
//     return view('users.user');
// });
// Route::get('/checkage', function() {
//     return view('users.checkAge');
// });
// Route::get('/noaccess', function() {
//     return view('users.noAccess');
// });

// Session
Route::post("users",[userController::class,'getData']);
Route::view('profile','profile');
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('login');
});
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view ('users');
});


// Fallback method
// Using the Route::fallback method, you may define a route that will be executed when no other route matches the incoming request.
// Route::fallback(function () {
//     return view('error');
// });




