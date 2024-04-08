<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::create([
            'image' => '',
            'title1' => 'Bengkel Las Suka Jaya',
            'title2' => 'Jasa Bengkel Las Profesional',
            'title3' => 'Gratis Survei dan Konsultasi',
        ]);
    }
}
