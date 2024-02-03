<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        $user = User::create([
            "name" => "Chemi",
            "email" => "chemimartinez10@gmail.com",
            "password" => bcrypt("password"),
            "birth_date" => "1996-10-16",
            "identification" => "V25911130",
            "phone" => "4120819758",
            
        ]);
        $user->assignRole("admin");
    }
}
