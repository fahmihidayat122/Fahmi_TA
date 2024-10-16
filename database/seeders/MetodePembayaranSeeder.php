<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\MetodePembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB:table('metodepembayaran')->insert([
        //    
        //   $table->string('nama_metode'); 
        //    
        //]);
        metodepembayaran::factory(15)->create();
    }
}
