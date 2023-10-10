<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-kategori']);
        Permission::create(['name' => 'ubah-kategori']);
        Permission::create(['name' => 'hapus-kategori']);
        
        Permission::create(['name' => 'tambah-post']);
        Permission::create(['name' => 'ubah-post']);
        Permission::create(['name' => 'hapus-post']);

        Permission::create(['name' => 'tambah-foto']);
        Permission::create(['name' => 'ubah-foto']);
        Permission::create(['name' => 'hapus-foto']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'kontributor']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-kategori');
        $roleAdmin->givePermissionTo('ubah-kategori');
        $roleAdmin->givePermissionTo('hapus-kategori');

        $roleAdmin->givePermissionTo('tambah-post');
        $roleAdmin->givePermissionTo('ubah-post');
        $roleAdmin->givePermissionTo('hapus-post');

        $roleAdmin->givePermissionTo('tambah-foto');
        $roleAdmin->givePermissionTo('ubah-foto');
        $roleAdmin->givePermissionTo('hapus-foto');



        $roleKontributor = Role::findByName('kontributor');
        $roleKontributor->givePermissionTo('tambah-post');
        $roleKontributor->givePermissionTo('ubah-post');
        $roleKontributor->givePermissionTo('hapus-post');

        $roleKontributor->givePermissionTo('tambah-foto');
        $roleKontributor->givePermissionTo('ubah-foto');
        $roleKontributor->givePermissionTo('hapus-foto');
    }
}
