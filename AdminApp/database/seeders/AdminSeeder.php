<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email'    => 'admin@gmail.com',
            'password' => 'admin',
            'role'     => 'admin',
        ]);
    }
}
