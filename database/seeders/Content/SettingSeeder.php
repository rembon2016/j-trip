<?php

namespace Database\Seeders\Content;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'address' => 'Citylofts Sudirman Lt. 11, #111, Jl. K.H. Mas Mansyur No.121, RT.10/RW.11, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 11520',
            'phone' => '622129959845',
            'whatsapp_number' => '6285929920505',
            'email' => 'info@japanect.com',
            'instagram_url' => 'https://instagram.com',
            'linkedin_url' => 'https://linkedin.com',
            'facebook_url' => 'https://facebook.com',
            'tiktok_url' => 'https://tiktok.com',
            'twitter_url' => 'https://twitter.com',
        ]);
    }
}
