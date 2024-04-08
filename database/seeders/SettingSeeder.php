<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title' => 'Bengkel Las Suka Jaya Tangerang',
            'address' => 'Jl. Danau, Cipete (Belakang Perumahan Banjar Wijaya)',
            'city' => 'Pinang, Tangerang',
            'phone' => '08321712890',
            'email' => 'fauzanbashar8@gmail.com',
            'instagram' => 'sukajaya.lasindo',
        ]);
    }
}
