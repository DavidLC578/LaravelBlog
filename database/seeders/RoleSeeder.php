<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $userRole = Role::create([
            'name' => 'user'
        ]);

        // Permissions
        $dashboardView = Permission::create([
            'name' => 'admin.dashboard'
        ])->syncRoles([$adminRole]);

        $deletePost = Permission::create([
            'name' => 'admin.post.destroy'
        ])->syncRoles([$adminRole]);
    }
}
