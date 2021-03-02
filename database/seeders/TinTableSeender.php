<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TinTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tins::factory(10)->create();
    }
}
