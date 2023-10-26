<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
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

Route::view('/login','login');

Route::post('/logar', function (Request $request) {
// fazer login

$credentials = $request->validate([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);

if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    return "Logado com sucesso!!";
}


 return "Erro ao logar!!! Usuário ou senha inválidos";
});