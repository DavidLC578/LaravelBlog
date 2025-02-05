<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => "Titulo 1",
            'description' => "Descripcion 1",
            'content' => "Contenido 1",
            'category' => 'Categoria 1',
            'user_id' => '1'
        ]);
        //
    }
}
