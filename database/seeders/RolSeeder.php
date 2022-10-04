<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::Create(['name' => 'Admin']);
        $role2 = Role::Create(['name' => 'Auxiliar']);
        $role3 = Role::Create(['name' => 'Mensajero']);

        Permission::create(['name' => 'envio.nuevo.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'envio.nuevo.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'envio.nuevo.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'envio.nuevo.delete'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'usuarios.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'usuarios.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'usuarios.delete'])->syncRoles([$role1,$role2,$role3]);
    }
}
