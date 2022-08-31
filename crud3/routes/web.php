<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwaresController;

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


//Route::view('/hardware', 'hardware');
// hardware = url , hardware = view

// Route::Get('/hardware', function(){
//     return "Lucas Yurie Silveira";
// });

//Route::view('/hardware', 'hardware', ['name'=>'GTA']);
// /hardware = url , 'hardware' = view , [enviando parametros p/ view 'hardware']


// Route::get('/hardware/{name?}', function($name = null){
//     return view('hardware', ['nomeHardware'=>$name]);
//     // /hardware = url || o que eu digitar na url/$name, vai para function($name)
//     //para mandar parametrô opcional, colocar '?' no final do parâmetro e iniciar o '$name' da função como 'null'
// })->where('name', '[A-Za-z]+');
// //recebendo parãmetros apenas como texto ($name), ou seja, recebe apenas texto na url


//   Route::get('/hardware/{id?}/{name?}', function($id = null, $name = null){
//       return view('hardware', ['idHardware'=>$id, 'nomeHardware'=>$name]);
//       // /hardware = url || o que eu digitar na url/$id,$name, vai para function($id,%name)
//       //para mandar parametrô opcional, colocar '?' no final do parâmetro e iniciar o '$id/$name' da função como 'null'
//   })->where('id', '[0-9]+', 'name', '[A-Za-z]+');
//   //recebendo parãmetros apenas como numero ($id) e texto ($name), ou seja, recebe apenas numero e texto no parâmetro na url



 //redirecionando quando clicar no botão
//  Route::get('/hardware', function(){
//     return view('hardware');
//  });

//Route::get('/hardware', [HardwareController::class, 'index']);
// [HardwareController::class, 'index']: public function que está referenciando
//ou seja, quando coloco /hardware na url, ele busca o método 'index'



Route::get('/', function () {
    return view('welcome');
});

//Route::prefix(): grupo de rotas
Route::prefix('hardwares')->group(function (){
    Route::get('/', [HardwaresController::class, 'index'])->name('hardwares-index'); //listagem de registros (index)
    Route::get('/create', [HardwaresController::class, 'create'])->name('hardwares-create'); //retornando uma view 'create'
    Route::post('/', [HardwaresController::class, 'store'])->name('hardwares-store'); //envindo dados 'post'
    Route::get('/{id}/edit', [HardwaresController::class, 'edit'])->where('id', '[0-9]+')->name('hardwares-edit'); //retornando uma view'edit'
    Route::put('/{id}', [HardwaresController::class, 'update'])->where('id', '[0-9]+')->name('hardwares-update'); //atualizando dados (update)
    Route::delete('/{id}', [HardwaresController::class, 'destroy'])->where('id', '[0-9]+')->name('hardwares-destroy'); //deletando registros (delete)
    // where(rejex): garantindo que o 'id' seja sempre um número || +: 0 a 9 ou mais caracteres (10,15,20)
});
