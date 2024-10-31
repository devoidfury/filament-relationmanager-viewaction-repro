<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Note;
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
        Customer::factory(3)->create()->each(function($customer) {
            Note::factory(20)->recycle($customer)->create();
        });
    }
}
