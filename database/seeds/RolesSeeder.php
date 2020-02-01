<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'customer']);
        $newAdmin = new User();
        $newAdmin->email="ranabenmahmoud@gmail.com";
        $newAdmin->password=bcrypt("12345678");
        $newAdmin->name="rana";
        $newAdmin->save();
        $newAdmin->assignRole("admin");
        
    }
}
