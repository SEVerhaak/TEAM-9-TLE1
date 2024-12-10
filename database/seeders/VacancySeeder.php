<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vacancy;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed 10 dummy vacancies with proper dates
        for ($i = 1; $i <= 10; $i++) {
            Vacancy::create([
                'business_id' => 1, // Assuming you have at least 5 businesses
                'name' => "Vacancy $i",
                'description' => "This is a description for Vacancy $i.",
                'salary' => rand(2000, 5000),
                'time_hours' => rand(20, 40),
                'image' => "https://www.nbbuskillslab.nl/skillslab-training/opleiding-open-hiring/openhiring_5F420x280.jpg",
                'created_at' => now()->subDays(rand(1, 10)), // Random date within the last 10 days
                'updated_at' => now(),
            ]);
        }
    }
}
