<?php

use \App\User;
use \App\Post;
use \App\Country;
use \App\Photo;
use \App\Tag;

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

Route::get('/insert', function () {

    DB::insert('insert into posts (title, content) values (?, ?)', ['PHP with Laravel', 'Laravellaravellaravellaravel']);

});

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
});
 */

// ELOQUENT

/* Route::get('/read', function () {

$posts = Post::all();

foreach($posts as $post){
return $post->title;
}

}); */

/* Route::get('/find', function () {

$posts = Post::find(2);

return $posts->content;

}); */

/* Route::get('/findwhere', function(){
$posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

return $posts;
}); */

/* Route::get('/findmore', function () {
$posts = Post::findOrFail(1);

$posts = Post::where('users_count', '<', 50)->firstOrFail();

return $posts;
}); */

/* Route::get('/basicinsert', function () {

$post = new Post;

$post->title = 'new eloquent title insert';
$post->content = 'contentcontentcontentcontentcontent';

$post->save();

}); */
/* Route::get('/basicinsert', function () {

$post = Post::find(2);

$post->title = 'new eloquent title insert 2';
$post->content = 'contentcontent2';

$post->save();

}); */

/* Route::get('/create', function () {
Post::create(['title'=>'the create method', 'content'=>'xddddddd']);
});

 */

/* Route::get('/update', function () {
Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'updated stuff', 'content'=>'yapppppppp']);
}); */

/* Route::get('/delete', function () {
$post = Post::find(8);

$post->delete();
}); */

/* Route::get('/softdelete', function () {

Post::find(5)->delete();

}); */

/* Route::get('/readsoftdelete', function () {

$post = Post::onlyTrashed()->get();
return $post;

}); */

/* Route::get('/restore', function () {
Post::withTrashed()->restore();
}); */

/* Route::get('/forcedelete', function () {
Post::onlyTrashed()->forceDelete();
}); */

// ELIQUENT RELATIONSHIPS

/* //1 to 1
Route::get('/user/{id}/post', function ($id) {
return User::find($id)->post;
}); */

/* //inverse
Route::get('/post/{id}/user', function ($id) {
return Post::find($id)->user->name;
}); */

/* //1 to many
Route::get('/posts', function () {
$user = User::find(1);

foreach ($user->posts as $post) {
echo $post->title;
}
}); */

/* //many to many
Route::get('/user/{id}/role', function ($id) {
$user = User::find($id)->roles()->orderBy('id', 'desc')->get();
return $user;

//   foreach ($user->roles as $role) {
//     return $role->name;
// }

}); */

/* //accessing the pivot table
Route::get('user/pivot', function () {
$user = User::find(1);
foreach ($user->roles as $role) {
echo $role->pivot->created_at;
}
});
 */

/* // has many through relation
Route::get('/user/country', function () {
    $country = Country::find(1);
    foreach ($country->posts as $post) {
        return $post->title;
    }
}); */

// POLYMORPHIC RELATIONS

/* Route::get('user/photos', function () {
    $user = User::find(1);

    foreach($user->photos as $photo){
        return $photo;
    }
});
 */

/* Route::get('photo/{id}/post', function ($id) {
    $photo = Photo::findOrFail($id);

    return $photo->imageable;
}); */

/* Route::get('/post/tag', function () {
    $post = Post::find(1);

    foreach($post->tags as $tag){
        echo $tag->name;
    }
}); */

/* Route::get('/tag/post', function () {
    $tag = Tag::find(2);

    foreach($tag->posts as $post){
        echo $post->title;
    }
}); */

// CRUD APPLICATION //

Route::resource('posts', 'PostsController');