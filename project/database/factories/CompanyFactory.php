<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2, //default author by user seeder class
            'company_category_id'  =>1,
            'company_ville_id'=>1,
            'Company_name' => 'Web App developer',
            'Commercial_register' => '534278', 
            'Workforce_number' => '10',
            'phone_number' => '0843892045' ,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

        ];
    }
}
