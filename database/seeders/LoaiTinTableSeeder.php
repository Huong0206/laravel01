<?php

namespace Database\Seeders;
use App\Models\LoaiTin;
use Illuminate\Database\Seeder;

class LoaiTinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LoaiTin::factory()->count(10)->create();

    }
}
