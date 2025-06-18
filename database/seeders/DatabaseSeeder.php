<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // database/seeders/DatabaseSeeder.php
    public function run()
    {
        // Create roles first
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Create professors
        Professor::firstOrCreate([
            'email' => 'jane.doe@lu.lv'
        ], [
            'name' => 'Prof. Jane Doe'
        ]);

        Professor::firstOrCreate([
            'email' => 'john.doe@lu.lv'
        ], [
            'name' => 'Prof. John Doe'
        ]);

        // Create admin user (only if doesn't exist)
        User::firstOrCreate([
            'email' => 'admin@example.com'
        ], [
            'name' => 'Admin',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id
        ]);

        // Create regular user
        User::firstOrCreate([
            'email' => 'user@example.com'
        ], [
            'name' => 'User',
            'password' => Hash::make('password'),
            'role_id' => $userRole->id
        ]);
    }
}
