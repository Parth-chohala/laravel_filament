<?php

namespace Database\Seeders;

use App\Models\ceo;
use App\Models\employee;
use App\Models\manager;
use App\Models\team;
use App\Models\trainee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
  // Create Managers
        manager::factory(5)->create();

        // Create Teams
        team::factory(5)->create();

        // Create Employees
        employee::factory(20)->create();

        // Create Trainees
        trainee::factory(10)->create();

        // Create CEOs
        ceo::factory(2)->create();

        // Create Salaries

    }
}
