<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubcateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert(
            [
                [
                    'en_name'       =>'Wheel Bearings',          
                    'bn_name'       =>'Wheel Bearings',           
                    'image_name'    =>'', 
                    'categorie_id'  =>'1', 
                    'created_at'    =>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'en_name'       =>'Wheel Rim Screws',       
                    'bn_name'       =>'Wheel Rim Screws',        
                    'image_name'    =>'', 
                    'categorie_id'  =>'1', 
                    'created_at'    =>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'en_name'       =>'Wheel Simulators',   
                    'bn_name'       =>'Wheel Simulators',    
                    'image_name'    =>'', 
                    'categorie_id'  =>'1', 
                    'created_at'    =>Carbon::now()->format('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
