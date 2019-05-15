<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        
        Permission::create(['name' => 'user_manage']);
        Permission::create(['name' => 'validation_manage']);
        Permission::create(['name' => 'student_manage']);
    }
}
