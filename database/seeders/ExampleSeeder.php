<?php

namespace Database\Seeders;

use App\Models\Examples;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Examples::factory()
            ->count(20)
            ->create();
    }
}
