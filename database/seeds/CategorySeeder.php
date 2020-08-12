<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array('CÂY CẢNH 1','CÂY CẢNH 2','CÂY CẢNH 3');
        for($i = 0 ;$i<count($category);$i++){
        DB::table('categories')->insert([
            'name' =>$category[$i],
        ]);
        }
    }
}
