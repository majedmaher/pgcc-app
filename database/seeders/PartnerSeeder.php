<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\PartnerItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'title' => [
                'ar' => 'شركاء النجاح',
                'en' => 'Success partners'
            ],
            'description' => [
                'ar' => 'نقدم مجموعة واسعة من الخدمات المتكاملة لتلبية جميع احتياجات مشاريعك.',
                'en' => 'We offer a wide range of integrated services to meet all your project needs.'
            ]
        ]);

        for ($i = 0; $i < 8; $i++) {
            PartnerItem::create([
                'image' => 'imgs/basic/partner-logo.png'
            ]);
        }
    }
}
