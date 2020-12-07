<?php
use App\Http\Controllers\PostsController;
use App\Models\Post;
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

Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
Route::get('/post',[PostsController::class,'show'])->name('posts.show');
Route::get('/about',[PostsController::class,'about'])->name('posts.about');
Route::get('/contact',[PostsController::class,'contact'])->name('posts.contact');

//$post=new Post();
//$post->title ='test title';
//$post->content ='test content';
//$post->save();

//Post::create([
//    'title'=>'test title',
//    'content'=>'test content',
//    'content-test'=>'cc-test content',
//]);

//$posts=Post::all();
//dd($posts);

$post=Post::find(1);
dd($post);
