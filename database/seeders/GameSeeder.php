<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB:table('game')->insert([
        //    'id' => Str::random(10),
        //    'server' => Str::random(4),
        //    'email' => Str::random(20),
        //]);
        game::factory(15)->create();
    }
}
