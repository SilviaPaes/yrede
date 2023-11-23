<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {

    $posts = Post::all();

    return view('Inicial', compact('posts'));
});

Route::get('/teste', function () {
    return "Testado!!!";
});
  

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();
   
    
    return view('listaUsuarios', compact('usuarios'));
    
})->name('lista-usuarios');

Route::view('/cadastraUsuarios','cadastrausuarios');

Route:: post('/salva-usuario', function(Request $request){

$usuario=new User();
$usuario->usuario = $request->input('usuario');
$usuario->name = $request->input('nome');
$usuario->bio = $request->input('bio');
$usuario->email = $request->input('email');
$usuario->password = $request->input('senha');
$usuario->save();

return "salvo com sucesso!";

})->name('salva-usuario');

Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request) {
// fazer login

$credentials = $request->validate([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);

if (Auth::attempt(['email'=>$credentials['email'],'password' =>$credentials['password']])) {
    $request->session()->regenerate();

return redirect()->intended('/');

   // return "Logado com sucesso!!";
}


 return "Erro ao logar!!! Usuário ou senha inválidos";
});
 Route::middleware(['auth'])->group(function() {

    Route::view('/cria-Post','criaPost');

    Route:: post('/salva-post', function(Request $request){
        $post = new Post();

       $post->user_id= Auth::id();
       $post->mensagem = $request->mensagem;

       $post->save();

       return redirect('/');

 });
           
});  