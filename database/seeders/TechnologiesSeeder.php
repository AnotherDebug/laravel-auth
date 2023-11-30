<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['CSS', 'HTML', 'Javascript', 'PHP', 'Laravel', 'Bootstrap', 'Wordpress', 'Jquery', 'React', 'Vue', 'Angular'];

        foreach ($data as $technology) {

            $new_technology = new Technology();
            $new_technology->name = $technology;

        }
    }
}
