<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexPosts;
use App\Http\Livewire\ShowPost;
use App\Http\Livewire\Home;
use App\Http\Livewire\Etapa;
use App\Http\Livewire\VirtualReality;

Route::get('/', Home::class)->name('home');

Route::get('/rutas/rutas', Etapa::class)->name('tours.index');

Route::get('/blog/posts', IndexPosts::class)->name('posts.index');

Route::get('/rvirtual', VirtualReality::class)->name('rvirtual');

/*
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
*/

Route::get('/blog/posts/{post}', ShowPost::class)->name('posts.show');


Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::post('posts/comment/save-comment', [PostController::class, 'save_comment'])->name('comment.store');

Route::get('/posts/{comment}/edit', [PostController::class, 'edit_comment'])->name('posts.edit_comment');

Route::put('/posts/{comment}', [PostController::class, 'updateComment'])->name('comment.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
