<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;

class PermissionRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::find(1);
        $role2 = Role::find(2);
        $role3 = Role::find(3);
        $role4 = Role::find(4);

        $role1->attachPermission(array(1,2,3,4,5));
        $role2->attachPermission(array(1,2,3,4,5));
        $role3->attachPermission(array(1,2,3,5));
        $role4->attachPermission(array(1,2,3));
    }
}
