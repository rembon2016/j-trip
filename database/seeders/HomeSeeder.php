<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;
class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create(
            [
                'id' => 1,
                'slider_banner'=> 'assets/landing-page/images/mt.-Fuji-top.jpg',
                'text_top_banner' => 'KAMI ADALAH',
                'title_banner' => 'Travel Agent khusus tur Jepang',
                'title_section_one' => 'Fall in love with Japan',
                'desc_section_one' => 'Bukan hanya sekedar travel agent, kami bercita-cita untuk menjadi jembatan yang menghubungkan Kamu dengan Jepang',
                'image_section_one' => 'assets/landing-page/images/Asakusa-top.jpg',
                'icon_one' => 'assets/landing-page/images/Passport.svg',
                'title_one' => 'Japanese Speakers',
                'desc_one' => 'Kami merekrut orang-orang yang memiliki pengalaman tinggal dan bisa berbahasa Jepang agar bisa memberikan anda support yang maksimal dalam merancang trip impian anda',
                'icon_two' => 'assets/landing-page/images/Deals.svg',
                'title_two' => 'Specialized',
                'desc_two' => 'Kami berkomitmen mencurahkan seluruh waktu dan tenaga kami untuk mengembangkan produk pariwisata Jepang dan bisa memberikan penawaran terbaik untuk anda',
                'icon_three' => 'assets/landing-page/images/Location-marker.svg',
                'title_three' => 'Personalized',
                'desc_three' => 'Kami mengerti bahwa masing-masing anda adalah unik. Kami akan menawarkan trip yang sesuai dengan kebutuhan dan preferensi anda.',
                'image_section_three' => 'assets/landing-page/images/Mr.-Frans-Tour-2.jpg',
                'title_section_three' => 'Trip ke Jepang untuk anda dan hanya milik anda',
                'desc_section_three' => 'Layanan penyusunan tur kami akan membuat anda merasakan “Tur Jepang yang hanya milik anda.”',
                'title_step_one' => 'Ceritakan Liburan Anda',
                'desc_step_one' => 'beritahu rencana perjalanan impian Jepang Anda kepada kami, mau menginap di Japanese Ryokan, atau minum teh bersama Geisha, semua kemauan Anda',
                'title_step_two' => 'Staff kami akan bantu Anda merancakan',
                'desc_step_two' => 'Staff kami yang berpengalaman di bidangnya akan membantu Anda merancang rencana perjalanan Anda yang sesuai dengan keingingan',
                'title_step_three' => 'Solution',
                'desc_step_three' => 'Kami akan tawarkan paket tailor-made spesifik yang cocok dengan keperluan Anda',
                'title_step_four' => 'Nikmati Tur Jepangmu',
                'desc_step_four' => 'Selamat menikmasi Jepangmu',
                'promise' => 'Kami berkomitmen untuk menjepangkan Anda',
                'promise_banner' => 'assets/landing-page/images/arashiyama-kyoto.jpg',
                'created_at' => now(),
            ]
        );
    }
}
