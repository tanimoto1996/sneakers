<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notice;

class NoticesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Notice::factory()->count(8)->create();
    }
}
