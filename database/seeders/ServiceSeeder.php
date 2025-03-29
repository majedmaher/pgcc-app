<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => [
                'ar' => 'خدماتنا',
                'en' => 'Our services'
            ],
            'description' => [
                'ar' => 'نقدم مجموعة واسعة من الخدمات المتكاملة لتلبية جميع احتياجات مشاريعك.',
                'en' => 'We offer a wide range of integrated services to meet all your project needs.'
            ],
        ]);

        for ($i = 0; $i < 8; $i++) {
            ServiceItem::create([
                'image' => 'imgs/basic/card-icon.png',
                'title' => [
                    'ar' => 'أعمال الحديد',
                    'en' => 'Iron works'
                ],
                'description' => [
                    'ar' => 'هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.',
                    'en' => 'Here you can include a brief description of the title in four lines.'
                ],
            ]);
        }
    }
}
