<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               \App\Models\TheLoai::factory(10)->create();

    }
}
