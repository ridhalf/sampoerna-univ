<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Admin Test',
            'email' => 'admin@test.com',
            'password'=> bcrypt('password'),
            'status'=>1,
            'role'=>'SUPER ADMIN'
        ];
        User::create($user);
    }
}
