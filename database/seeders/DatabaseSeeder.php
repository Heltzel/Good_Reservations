<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User;
use App\Models\Table;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true
        ]);
        User::factory()->create([
            'name' => 'Marc',
            'email' => 'test@mail.com',
            'is_admin' => false
        ]);

        Category::factory()->count(5)->create();
        Menu::factory()->count(5)->create();
        Reservation::factory()->count(5)->create();
        Table::factory()->count(7)->create();
    }
}
