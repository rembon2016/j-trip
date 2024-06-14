<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create(
            [
                'id' => 1,
                'title_about' => 'Travel Agent Khusus Jepang',
                'banner_about' => 'assets/landing-page/images/mt-fuji-background.jpg',
                'title' => 'Mimpi kami ingin menjembatani Jepang dan Indonesia',
                'description' => 'Kami percaya kekentalan budaya dan keindahan alam Jepang bisa menjadi inspirasi bagi kita semua.',
                'photo' => 'assets/landing-page/images/Japanect-Tour-top.jpg',
                'mission_title' => 'Rasakan Tour Jepang yang hanya milik Kamu',
                'mission_description' => 'Staff kami yang dapat menggunakan tiga bahasa (Jepang, Inggris, Indonesia) akan mendampingi anda, dari konsultasi pembuatan rencana perjalanan hingga memandu anda selama perjalanan jika dibutuhkan.',
            ]
        );
    }
}
