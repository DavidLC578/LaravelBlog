<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);
        User::factory()->create([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => '$2y$12$g62wZjmmOKWCoFuBoLkArOXn3cIBXUxAtTLDjIGwtuZjrnXdGgJUe'
        ])->assignRole('god');

        User::factory()->create([
            'name' => 'Juan',
            'email' => 'Juan@gmail.com',
            'password' => '$2y$12$g62wZjmmOKWCoFuBoLkArOXn3cIBXUxAtTLDjIGwtuZjrnXdGgJUe'
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => '$2y$12$g62wZjmmOKWCoFuBoLkArOXn3cIBXUxAtTLDjIGwtuZjrnXdGgJUe'
        ])->assignRole('user');
        $this->call(postSeeder::class);
        // Post::factory(20)->create();
    }
}
