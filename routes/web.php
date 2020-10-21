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

Route::get('/test', function(){

    $names = ['ahmed','ali','omar','khaled'];

    //dd(count($names));

    $subjects_marks = [
        'arabic' => 90,
        'math'=> 80,
        'computer'=>70
    ];

    $students_marks = array(
        array(10,20,30),
        array(40,50,60),
        array(70,80,90)
    );

    $name = 'ahmed';
    $age = 25;
    return view('test',compact('name','age','names','subjects_marks','students_marks'));
//   return view('test',['name'=>'ahmed','age'=>25]);
});


/*

Route::view('welcome','test2',['name'=>'ahmed','age'=>25]);

Route::get('/home', function () {
    return view('welcome');
});

Route::get('test', function () {
    $name = 'ahmed';
    dd($name);
});

Route::get('users/{id}', function ($user_id) {
    dd($user_id);
});

Route::get('users/{id}/comments', function ($id) {
    dd('comments of user ' . $id);
});

Route::get('users/{id}/comments/{comments}', function ($id, $comment) {
    dd('comment no ' . $comment . ' of user ' . $id);
});

Route::redirect('blog', 'new_blog', 301);
Route::redirect('google', 'https://www.google.ps', 301);

Route::get('new_blog', function () {
    dd('hi from new_blog');
})->name('my_new_blog');

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {

    });
    Route::get('products', function () {

    });
    Route::get('categories', function () {

    });

    Route::prefix('users')->group(function () {
        Route::get('profile', function () {

        });

        Route::get('reset_password', function () {

        });
    });
});

Route::middleware(['checkip','auth'])->group(function () {
    Route::get('dashboard', function () {

    });
});

Route::middleware('throttle:5,1')->group(function(){
    Route::get('admin', function () {

    });
});*/
