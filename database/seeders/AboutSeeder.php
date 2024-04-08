<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'image' => '',
            'title' => 'Bengkel Las Suka Jaya Tangerang',
            'desc' => 'Bengkel Las Suka Jaya merupakan jasa layanan pengelasan yang sudah melayani pelanggan kami selama 25 tahun lebih. Kami melayani pembangunan gudang, pembuatan Railing Tangga, Pagar, Kanopi, Pintu Besi, Railing Balkon, Booth Container dan lain lain. Kami juga melayani pembuatan custom sesuai dengan kebutuhan yang anda inginkan.
                    <br><br>Berpengalaman selama puluhan tahun yang membuat kami menjadi profesional dibidang pengelasan. Kami berupaya selalu meningkatkan kualitas pelayanan kami dengan memberikan hasil pengerjaan yang berkualitas.'
        ]);
    }
}
