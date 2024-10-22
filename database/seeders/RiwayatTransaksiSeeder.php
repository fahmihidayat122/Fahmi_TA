<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\RiwayatTransaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class RiwayatTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB:table('riwayattransaksi')->insert([
        //  'id_transaksi' => Str::random(20),
        //  'status' =>::random(20),
        //]);
        riwayattransaksi::factory(15)->create();
    }
}

