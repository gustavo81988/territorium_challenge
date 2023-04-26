<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name'     => 'John Doe',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        $user->save();
    }
}
