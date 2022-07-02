<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $city= [
            'Berkane',
            'Ahfir', 
            'Saidia',
            'Oujda',
            'Naima',
            'Beni Drar',
            'Jerada',
            'Ain Beni Mathar',
            'Taourirt',
            'Figuig',
            'Bouarfa',
            'nador',
            'Ras El Ma',
            'Zaio',
            'Selouane',
            'Driouch'
        ];
        foreach ($city as $ville) {
            DB::table('company_villes')->insert([
                'ville_name' => $ville
            ]);
        }
    }
}
