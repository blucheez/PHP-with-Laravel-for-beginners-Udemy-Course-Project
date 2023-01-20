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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "About page";
});

Route::get('/contact', function () {
    return "Contact page";
});

Route::get('/post/{id}/{name}', function ($id, $name) {

    return "this is post number ". $id . " " . $name;

});

Route::get('admin/posts/example', array('as'=>'admin.home',  function () {
    $url = route('admin.home');

    return "this url is" . $url;
})); */

/* Route::get('/post/{id}/{name}', 'PostsController@index'); */

/* Route::resource('posts', 'PostsController'); */

/* Route::get('/contact', 'PostsController@contact');

Route::get('/post/{id}', 'PostsController@showPost'); */

// DATABASE RAW SQL QUERIES

/* Route::get('/insert', function () {
    
    DB::insert('insert into posts (title, content) values (?, ?)', ['PHP with Laravel', 'Laravellaravellaravellaravel']);

}); */

/* Route::get('/read', function () {

    $results = DB::select('select * from posts where id = ?', [1]);

    foreach ($results as $result) {
        return $result->title;
    };
}); */

/* Route::get('/update', function () {
    
    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

    return $updated;

}); */

/* Route::get('/delete', function () {
    $deleted = DB::delete('delete from posts where id = ?', [1]);
    return $deleted;
}); */