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

use App\Produto;
use App\Categoria;

Route::get('/categorias', function () {
    $cat = Categoria::all();
    if(count($cat) == 0){
        echo"<h4>Voce nao possui nenhuma categoria cadastrada</h4>";
    }else{
        foreach($cat as $c){
            echo"<p>" . $c->id . " - " . $c->nome . "</p>";
        }
    }
});

Route::get('/produtos', function () {
    $prod = Produto::all();
    if(count($prod) == 0){
        echo"<h4>Voce nao possui nenhum produto cadastrado</h4>";
    }else{
        echo"<table>";
        echo"<thead>
        <tr>
        <td>Nome</td>
        <td>Preco</td>
        <td>Estoque</td>
        <td>Categoria</td>
        </tr>
        </thead>";
        foreach($prod as $p){
            echo"<tr>";
            echo"<td>" . $p->nome . "</td>";
            echo"<td>" . $p->preco . "</td>";
            echo"<td>" . $p->estoque . "</td>";
            echo"<td>" . $p->categoria->nome . "</td>";
            echo"</tr>";
        }
    }
});
