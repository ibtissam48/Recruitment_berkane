<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Smart city',
            'Software',
            'qa',
            'dba',
            'Systems',
            'Network',
            'web',
            'info design',
            'Security',
            'technical support',
            'Energy',
            'Agriculture',
            'General labor',
            'Gouvernment',
            'Manufacturing',
            'Writing',
            'Editing',
            'Human ressources', 
            'Education/teaching',
            'Innovation and culture',
            'Skilled trades/artisan',
            'Ecology and Environment ',
            'Health and Well-Being',
        ];
        foreach ($categories as $category) {
            DB::table('company_categories')->insert([
                'category_name' => $category
            ]);
        }
     
    }
}
