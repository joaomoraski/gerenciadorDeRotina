<?php

namespace Database\Seeders;

use App\Models\Texto;
use Illuminate\Database\Seeder;

class TextoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Texto::factory()->count(50)->create();
    }
}
