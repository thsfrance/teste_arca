<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate();
        
        $categorias = [
            ['descricao' => 'Auto'],
            ['descricao' => 'Beauty and Fitness'],
            ['descricao' => 'Entertainment'],
            ['descricao' => 'Food and Dining'],
            ['descricao' => 'Health'],
            ['descricao' => 'Sports'],
            ['descricao' => 'Travel']
        ];
        
        foreach($categorias as $categoria){
            Categoria::create($categoria);
        }
    }
}
