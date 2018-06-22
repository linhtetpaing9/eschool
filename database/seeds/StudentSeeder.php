<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
        	'name' => 'Lin Htet Paing',
        	'email' => 'linhtetpaing9@gmail.com',
        	'contact_number' => '09250359280',
        	'grade_id' => '10',
        	'section_id' => '22',
        	'student_code' => 'Lin Htet Paing' . uniqid(),
        	'address' => 'No(76), 5th street, Lanmadaw Tsp, Yangon'
        ]);
    }
}
