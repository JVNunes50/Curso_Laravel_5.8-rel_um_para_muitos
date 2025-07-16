<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome'=>'Camiseta Polo', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Bermuda', 'preco'=>120, 'estoque'=>1, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Casaco', 'preco'=>159, 'estoque'=>3, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Notbook', 'preco'=>2639, 'estoque'=>5, 'categoria_id'=>2]);
        DB::table('produtos')->insert(['nome'=>'Mouse', 'preco'=>150, 'estoque'=>10, 'categoria_id'=>6]);
        DB::table('produtos')->insert(['nome'=>'Perfume', 'preco'=>129, 'estoque'=>3, 'categoria_id'=>3]);
        DB::table('produtos')->insert(['nome'=>'Guarda-Roupas', 'preco'=>600, 'estoque'=>6, 'categoria_id'=>4]);
    }
}
