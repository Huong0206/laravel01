<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\LoaiTin;
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
        TinsTableSeeder::class
       ]);
        
        //$this->call=(LoaiTinTableSeeder::class);
    }
}
