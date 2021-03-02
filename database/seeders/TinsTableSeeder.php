<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Tins::factory(10)->create();
    }
}
