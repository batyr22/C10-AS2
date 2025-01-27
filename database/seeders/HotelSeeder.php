<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Yyldyz Hotel', 'Oguzkent Hotel', 'Gami Hotel',] as $hotels) {
            Hotel::create(['name' => $hotels]);
        }
    }
}
