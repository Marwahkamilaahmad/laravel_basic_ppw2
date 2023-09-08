<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use \App\Models\Transaction;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Transaction::create([
        //     'id' => '01298',
        //     'title' => 'film',
        //     'amount' => '390',
        //     'time' => '23:00',
        //     'type' => 'romance',

        // ]);
    }
}
