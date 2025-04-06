<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 8; $i++) {
            Project::create([
                'image' => 'imgs/basic/background-image.jpg',
                'title' => [
                    'ar' => 'مشروع انشاء مجمع سكني',
                    'en' => 'Iron worksIron works'
                ],
                'description' => [
                    'ar' => 'مشروع انشاء مجمع سكني',
                    'en' => 'Iron worksIron works'
                ],
            ]);
        }
    }
}
