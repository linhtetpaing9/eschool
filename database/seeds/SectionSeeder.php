<?php

use Illuminate\Database\Seeder;
use App\Section;
class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i < 11; $i++) { 
    		Section::create([
        	'name' => 'A',
        	'grade_id' => $i,
        ]);
    	}
    	for ($i=1; $i < 11; $i++) { 
    		Section::create([
        	'name' => 'B',
        	'grade_id' => $i,
        ]);
    	}
    	for ($i=2; $i < 11; $i++) { 
    		Section::create([
        	'name' => 'C',
        	'grade_id' => $i,
        ]);
    	}
    	for ($i=3; $i < 11; $i++) { 
    		Section::create([
        	'name' => 'D',
        	'grade_id' => $i,
        ]);
    	}

    	for($i=4; $i < 11; $i++){
    		Section::create([
        	'name' => 'E',
        	'grade_id' => $i,
        ]);
    	}

    	for($i=6; $i < 11; $i++){
    		Section::create([
        	'name' => 'F',
        	'grade_id' => $i,
        ]);
    	}
        
    }
}
