<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-menu',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-menu',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-menu',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
        ];
        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
