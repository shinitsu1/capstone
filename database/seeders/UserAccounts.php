<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAccounts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeding admin
        $admin = User::create([
            'name' => 'Karl Lewis Doctolero',
            'email' => 'karllewistdoctolero@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        $police = User::create ([
            'name' => 'Kurt Axel Nanalis',
            'email' => 'kurtaxelnanalis@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'police',
        ]);
    }
}
