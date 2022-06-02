<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rank')->insert([
            ['rankName' => 'Admin'],
            ['rankName' => 'Magazynier'],
            ['rankName' => 'Użytkownik'],
            ['rankName' => 'Serwisant'],
           
        ]);
    }
}
