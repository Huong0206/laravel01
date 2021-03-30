<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    \App\Models\TheLoai::factory(10)->create();
    //    \App\Models\LoaiTin::factory(10)->create();
       $this->call([
        TheLoaiSeeder::class,
        LoaiTinTableSeeder::class,
        TinsTableSeeder::class,
        CategoryTableSeeder::class
       ]);
        
        //$this->call=(LoaiTinTableSeeder::class);
    }
}
