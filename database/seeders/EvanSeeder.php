<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvanSeeder extends Seeder
{
    /**
       * Run the database seeds.
       */
    public function run(): void
    {
        DB::table('roster')->insert([
          'id' => '1559279',
          'fname' => 'Evan',
          'lname' => 'Kim',
          'initials' => 'EK',
          'email' => 'evanhkim09@gmail.com',
          'rating_id' => 2,
          'visitor' => 0,
          'status' => 1
        ]);
    }
}
