<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle Usuario',
            'slug' => 'users.show',
            'description' => 'Ver detalle de cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Editar usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato un usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle Rol',
            'slug' => 'roles.show',
            'description' => 'Ver detalle de cada Rol del sistema',
        ]);
        Permission::create([
            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' => 'Editar cualquier dato un Rol del sistema',
        ]);
        Permission::create([
            'name' => 'Editar roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato un Rol del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier Rol del sistema',
        ]);

        //Products
        Permission::create([
            'name' => 'Navegar Productos',
            'slug' => 'products.index',
            'description' => 'Lista y navega todos los Productos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle Producto',
            'slug' => 'products.show',
            'description' => 'Ver detalle de cada Producto del sistema',
        ]);
        Permission::create([
            'name' => 'Crear Productos',
            'slug' => 'products.create',
            'description' => 'Editar cualquier dato un Producto del sistema',
        ]);
        Permission::create([
            'name' => 'Editar Productos',
            'slug' => 'products.edit',
            'description' => 'Editar cualquier dato un Producto del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Producto',
            'slug' => 'products.destroy',
            'description' => 'Eliminar cualquier Producto del sistema',
        ]);
    }
}
