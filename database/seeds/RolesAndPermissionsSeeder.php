<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
	    app()['cache']->forget('spatie.permission.cache');
	    
	    Role::create(['name' => 'Artist']);

	    Role::create(['name' => 'Customer']);
	
	   
    }
}
