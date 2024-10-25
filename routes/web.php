<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');

});Route::get('/about', function () {
    return view('about');

});Route::get('/login', function () {
    return view('login/index');

});Route::get('/register', function () {
    return view('register/index');
    
});Route::get('/news', function () {
    return view('news');

})










?>
