<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Organisation;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default organisation
        $organisation = Organisation::create([
            'trading_name' => 'Organisation',
            'name' => 'Default Organisation',
            'address_line_1' => '123 Default Street',
            'address_line_2' => '',
            'email' => 'contact@test.com',
            'phone' => '01772000000',
            'postcode' => 'PR11QE',
            'company_registration_number' => 12345,
        ]);

        // Create default admin user
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'), // Ensure to hash the password
        ]);

        // Attach the admin user to the organisation
        $adminUser->organisations()->attach($organisation->id);
    }
}
