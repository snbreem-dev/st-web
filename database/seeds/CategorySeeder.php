<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for ($i=21; $i<40; $i++){
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'name' => 'category '.$i,
                'code'=> $i
            ]);
        }*/
        factory(\App\Category::class,10)->create();
    }
}
