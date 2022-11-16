<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// Route::get('/', function () {
//     return view('posts');
// });



/*

//Route::get('/posts', function () {
Route::get('/posts/{post}', function ($slug) {

    //echo $slug;

     //$post = file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html');
     //$post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");
     
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    // ddd($path);

    if(! file_exists($path)){
        // abort(404);
        //dd('file does not exist');
        ddd('file does not exist');
        //return redirect('/');
    }

    //$post = file_get_contents($path);

    $post = cache()->remember("posts.{$slug}", 3600, function() use ($path){
        var_dump('file_get_contents');
        return file_get_contents($path);
    });

    //$post = cache()->remember("posts.{$slug}", 3600, fn() => file_get_contents($path));
    

    return view('post', [
        //'post'=> '<h1> Post title</h1>' // catched as $post variable in view
        'post'=> $post
    ]);

 })->where('post','[A-z_\-]+');

//})->whereAlpha('post');



*/




Route::get('/', function () {
    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post}', function ($id) {
    return view('post',[
        'post' => Post::findOrFail($id)
    ]);
});
