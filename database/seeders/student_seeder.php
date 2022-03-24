<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class student_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate Student table - 25 student 
        // Manual way to populate seeded records
            // DB::Table('student')->insert([
            //     'name'=>'Bon Jovi',
            //     'email'=>'bon.jovi@gmail.com',
            //     'password'=>'',
            //     'created_at'=>date('y-m-d H:i:s'),
            //     'updated_at'=>date('y-m-d H:i:s'),
            // ]);
        // Use Faker to populate random data for 25 Students
        student::factory()->count(25)->create();
        
    }
}
