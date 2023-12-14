<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder

{
    public function run()
    {
        Admin::factory()
            ->count(2) // Adjust the count as needed
            ->create();
    }
}
