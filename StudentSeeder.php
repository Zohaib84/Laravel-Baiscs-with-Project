<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Fake Data
        for($i = 1; $i <= 25; $i++){
            Student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
            ]);
    
        }
        
        // $json = File::get(database_path('json/students.json'));
        // $students = collect(json_decode($json, true));
        
        // $students->each(function($student) {
        //     Student::create([
        //         'name' => $student['name'],
        //         'email' => $student['email']
        //     ]);
        // });
    }
}
