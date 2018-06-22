<?php

use Illuminate\Database\Seeder;
use App\Grade;
class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i < 11; $i++) { 
    		Grade::create([
    			'name' => 'Grade ' . $i
        	]);
    	}
        
    }
}
