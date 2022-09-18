<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['en_name'=>'Brake Parts',          'bn_name'=>'Brake Parts',           'cat_img_name'=>'', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                ['en_name'=>'Wheels & Tires',       'bn_name'=>'Wheels & Tires',        'cat_img_name'=>'', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                ['en_name'=>'Furnitured & Decor',   'bn_name'=>'Furnitured & Decor',    'cat_img_name'=>'', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                ['en_name'=>'Turbo System',         'bn_name'=>'Turbo System',          'cat_img_name'=>'', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                ['en_name'=>'Lighting',             'bn_name'=>'Lighting',              'cat_img_name'=>'', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
            ]
        );
    }
}
