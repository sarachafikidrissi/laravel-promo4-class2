<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            [
            'name' => 'sara',
            'class' => 'cooding 3',
            'age' => 28,
            'attendence' => true,
            'passed' => true
        ], 
        [
            'name' => 'hind',
            'class' => 'cooding 2',
            'age' => 20,
            'attendence' => true,
            'passed' => false
        ]
        ]
    );
    }
}
