<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB:table('transaksi')->insert([
        //  'id' => Str::random(20), 
        //  'game' => Str::random(20),
        //  'methodepembayaran' => Str::random(20),
        //  'jumlah' => Str::random(20),
        //  'status' =>::random(20)
        //]);
        transaksi::factory(15)->create();
    }
}
