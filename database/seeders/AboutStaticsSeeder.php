<?php

namespace Database\Seeders;

use App\Models\AboutStatics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutStaticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++) {
            AboutStatics::create([
                'image' => 'imgs/basic/analysis-icon.png',
                'description' => [
                    'ar' => 'مشروع مكتمل',
                    'en' => 'Completed project'
                ],
                'number' => 44,
                'after_number' => '+',
                'before_number' => '%',
            ]);
        }
    }
}
