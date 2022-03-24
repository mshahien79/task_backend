<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\course;

class course_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate course table
                // Use Faker to populate random data for 15 Course
                course::factory()->count(15)->create();
 
    }
}
