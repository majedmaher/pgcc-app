<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'logo' => 'imgs/basic/logo.png',
            'profile' => 'imgs/basic/PGCC_Arabic.pdf',
            'main_title' => [
                'ar' => 'نبني المستقبل بأيدينا، ونجعل رؤيتك واقعاً',
                'en' => 'We build the future with our hands, and make your vision a reality'
            ],
            'description_main' => [
                'ar' => 'تقديم حلول إنشائية مبتكرة لضمان نجاح مشاريعك بكل احترافية',
                'en' => 'Providing innovative construction solutions to ensure the success of your projects with professionalism.'
            ],
            'title' => [
                'ar' => 'PGCC شركة',
                'en' => 'PGCC Company'
            ],
            'description_footer' => [
                'ar' => 'جميع الحقوق محفوظة لشركة أصول التعاون الخليجي للمقاولات',
                'en' => 'All rights reserved to Osool Al Taawun Al Khaleeji Contracting Company'
            ],
            'whatsapp' => 'https://wa.me/message/',
            'twitter' => 'http://twitter.com/',
            'linkedin' => 'http://linkedin.com/',
            'instagram' => 'http://instagram.com/',
            'facebook' => 'http://facebook.com/',
            'telegram' => 'http://telegram.com/',
            'description' => [
                'ar' => 'شركة محاماة سعودية تقدم خدمات قانونية في مجموعة واسعة من المجالات، مثل: المسائل التجارية، والسوق المالية، والتقاضي، كما نقدم خدماتنا للعملاء محلياً ودولياً.',
                'en' => 'A Saudi law firm that provides legal services in a wide range of fields, such as: commercial matters, the financial market, and litigation. We also provide our services to clients locally and internationally.'
            ],
            'keywords' => [
                'ar' => 'شركة سعودية',
                'en' => 'Saudi company'
            ],
        ]);
    }
}
