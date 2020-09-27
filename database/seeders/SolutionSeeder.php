<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solutions = [
            'U-Shop',
            'U-Shop Sport',
            'U-Shop Mega',
            'U-ShopStroy',
            'U-Shop light',
            '1C-Franch',
            '1C-Franch Start',
            'Okna',
            'Fermer',
            'Metall',
            'Zaim',
            'Belle',
            'Belle PRO',
            'Krovlya',
            'Transport',
            'Medcentr',
            'Urist',
            'Gos',
            'Carstvo',
            'Quiz'
        ];

        foreach ($solutions as $solution) {
            if ($solution === 'Quiz') {
                Solution::create(
                    [
                        'name' => $solution,
                        'visible' => false,
                        'description' => '<p>Здесь будет короткое описание решения</p>'
                    ]
                );
            } else {
                Solution::create(
                    [
                        'name' => $solution,
                        'description' => '<p>Здесь будет короткое описание решения</p>'
                    ]
                );
            }
        }
    }
}
