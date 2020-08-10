<?php

use Illuminate\Support\Facades\Route;

Route::resource('produtos', 'ProductController'); //->middleware('auth');

/*
//rotas pra crud

Route::delete('produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');
//put é pra editar um registro
Route::put('produtos/{id}', 'ProdutoController@update')->name('produtos.update');
Route::get('produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::get('produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::get('produtos/{id}', 'ProdutoController@show')->name('produtos.show');
Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::post('produtos', 'ProdutoController@store')->name('produtos.store');

*/








Route::get('/login', function(){
    return 'Login';
})->name('login');


/*
Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){

                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                
                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                Route::get('/', 'TesteController@teste')->name('home');

            });            

        });

        
    });
   

});
*/

Route::group([
    'middleware' => [], 
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function(){
    Route::name('admin.')->group(function(){

        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
        
        Route::get('/produtos', 'TesteController@teste')->name('produtos');

        Route::get('/', 'TesteController@teste')->name('home');

    });  

});


Route::get("/redireciona3", function(){
    return redirect()->route('url.name');
});

Route::get('/url-exemplo', function(){
    return "Exemplo por nome";
})->name('url.name');


//exemplo de rota redirecionada
Route::redirect('/redireciona01', '/redireciona02');

// Route::get('/redireciona01', function () {
//     return redirect('/redireciona02');
// });

Route::get('/redireciona02', function () {
    return "Redirecionado meu amigo";
});

//rota com parametro opicional
Route::get('/categorias/{idProduto?}', function ($idProduto = '') {
    return "Produto (s): {$idProduto}";
});

//rota dinamica onde o FLAG muda
Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da Categoria: {$flag}";
});

Route::get('/empresa', function()
{
    return "Empresa";
});
Route::get('/contato', function()
{
    return view('contato');
});
Route::get('/', function () {
    return view('welcome');
});
