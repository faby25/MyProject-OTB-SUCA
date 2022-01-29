<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ReclamoController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use App\Http\Controllers\TconsumoController;
use App\Http\Controllers\TmultaController;
use App\Http\Controllers\MedidorController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('form',function(){//dd($user);
  return view('posts.newform');
});

Route::name('print')->get('/imprimir', 'GeneradorController@imprimir');

// posts-Inicio
Route::get('/',[PostController::class,'home'])->name('home');
Route::get('posts/{post:slug}',[PostController::class,'showhome']);
Route::get('categories/{category:slug}',function(Category $category){
  return view('home.home',['posts'=>$category->posts]);
});
Route::get('users/{user:username}',function(User $user){//dd($user);
  return view('home.home',['posts'=>$user->posts]);
});
// // TODO:  boton categorias/user/buscar


require __DIR__.'/auth.php';

//Dashboard de SOCIO
Route::get('/dashboard', function () {
  if (Auth::user()->hasAnyRole('Admin', 'Cajero','Lecturador')) {
    return view('admins.dashboard');
  } else {
    return view('socios.dashboard');
  }

    return view('dashboard');
}) ->middleware(['auth'])->name('dashboard');

//vistas-SOCIO
// Route::resource('posts',PostController::class);
Route::get('posts',[PostController::class,'index']);
Route::get('posts.create',[PostController::class,'create']);
Route::post('posted',[PostController::class,'store']);
Route::get('posts.edit.{post:slug}',[PostController::class,'edit']);
Route::get('posts.show.{post:slug}',[PostController::class,'show']);
Route::PATCH('posts.update.{post:slug}',[PostController::class,'update']);
Route::DELETE('posts.delete.{post}',[PostController::class,'destroy']);

Route::resource('notices',NoticeController::class);

//vistas-ADMIN
Route::get('admin/posts/create',[PostController::class,'create']);//->middleware('admin');
Route::post('admin/posts',[PostController::class,'store']);//->middleware('admin');



// Route::get('socios/reclamos',[PostReclamo::class,'create']);


// Route::get('/Tconsumos.create',[TconsumoController::class,'create']);

Route::resource('tmulta',TmultaController::class);
Route::get('tmulta.create',[TmultaController::class,'create']);
Route::get('tmulta.edit.{tmulta:id}',[TmultaController::class,'edit']);
Route::PATCH('tmulta.update.{tmulta:id}',[TmultaController::class,'update']);
Route::DELETE('tmulta.delete.{tmulta}',[TmultaController::class,'destroy']);


Route::resource('tconsumo',TconsumoController::class);
Route::get('tconsumo.create',[TconsumoController::class,'create']);
Route::get('tconsumo.edit.{tconsumo:id}',[TconsumoController::class,'edit']);
Route::PATCH('tconsumo.update.{tconsumo:id}',[TconsumoController::class,'update']);
Route::DELETE('tconsumo.delete.{tconsumo}',[TconsumoController::class,'destroy']);

Route::resource('reunion',ReunionController::class);

Route::resource('user',UserController::class);
Route::get('user.create',[UserController::class,'create']);
Route::get('user.edit.{user:id}',[UserController::class,'edit']);
Route::PATCH('user.update.{user:id}',[UserController::class,'update']);
Route::DELETE('user.delete.{user}',[UserController::class,'destroy']);

Route::resource('medidor',MedidorController::class);
Route::get('medidoor.create',[MedidorController::class,'create']);
Route::get('medidor.edit.{medidor:id}',[MedidorController::class,'edit']);
Route::PATCH('medidor.update.{medidor:id}',[MedidorController::class,'update']);
Route::DELETE('medidor.delete.{medidor}',[MedidorController::class,'destroy']);
