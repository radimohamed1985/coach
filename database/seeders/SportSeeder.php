<?php

namespace Database\Seeders;

use App\Models\sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports =['boxing','kick boxing','swimming','GYM'];
        for($i=0;$i<count($sports);$i++){
       
        
       sport::create([
        'sportname'=>$sports[$i]
       ]);
    }
    }
}
