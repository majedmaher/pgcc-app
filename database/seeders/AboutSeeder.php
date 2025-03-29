<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => [
                'ar' => 'من نحن',
                'en' => 'About us'
            ],
            'description' => [
                'ar' => 'نحن شركة سعودية رائدة في مجال المقاولات والإنشاءات، نمتلك خبرة واسعة في تقديم حلول بناء مبتكرة تلبي احتياجات عملائنا بكفاءة واحترافية، مع التركيز على الجودة والالتزام بالمواعيد.',
                'en' => 'We are a Saudi telecommunications company in the field of construction and building, and we have extensive experience in providing construction solutions that meet the needs of customers in a professional and demanding manner, with a focus on quality and adherence to deadlines.'
            ],
            'sub_title' => [
                'ar' => 'ما الذي يميز بيئة عملنا؟',
                'en' => 'What makes our work environment special?'
            ],
            'sub_description' => [
                'ar' => 'نحن نؤمن بأن بيئة العمل تلعب دوراً كبيراً في تحقيق التميز والجودة. نقدم لعملائنا فريق عمل متميز ومجهز بأحدث التقنيات والمعدات لضمان تنفيذ المشاريع بكفاءة عالية. بفضل خبرتنا في التعامل مع المشاريع الكبرى وقدرتنا على تقديم حلول مبتكرة، نضمن تحقيق أفضل النتائج وفقاً لأعلى معايير الجودة.',
                'en' => 'We believe that the work environment plays a significant role in achieving excellence and quality. We offer our clients a distinguished team equipped with the latest technologies and equipment to ensure efficient project execution. Thanks to our experience handling major projects and our ability to provide innovative solutions, we guarantee the best results according to the highest quality standards.'
            ],

            'first_card_image' => 'imgs/basic/card-icon.png',
            'first_card_title' => [
                'ar' => 'تنفيذ المشاريع بجودة عالية',
                'en' => 'Implementing projects with high quality'
            ],
            'first_card_description' => [
                'ar' => 'نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.',
                'en' => "We implement construction projects according to the highest quality standards to ensure our customers' satisfaction and exceed their expectations."
            ],

            'second_card_image' => 'imgs/basic/card-icon.png',
            'second_card_title' => [
                'ar' => 'تنفيذ المشاريع بجودة عالية',
                'en' => 'Implementing projects with high quality'
            ],
            'second_card_description' => [
                'ar' => 'نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.',
                'en' => "We implement construction projects according to the highest quality standards to ensure our customers' satisfaction and exceed their expectations."
            ],

            'third_card_image' => 'imgs/basic/card-icon.png',
            'third_card_title' => [
                'ar' => 'تنفيذ المشاريع بجودة عالية',
                'en' => 'Implementing projects with high quality'
            ],
            'third_card_description' => [
                'ar' => 'نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.',
                'en' => "We implement construction projects according to the highest quality standards to ensure our customers' satisfaction and exceed their expectations."
            ]
        ]);
    }
}
