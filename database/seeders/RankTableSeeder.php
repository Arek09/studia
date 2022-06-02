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
            ['rankName' => 'Szeregowy'],
            ['rankName' => 'Starszy szeregowy'],
            ['rankName' => 'Kapral'],
            ['rankName' => 'Starszy kapral'],
            ['rankName' => 'Plutonowy'],
            ['rankName' => 'Starszy plutonowy'],
            ['rankName' => 'Sierżant'],
            ['rankName' => 'Starszy sierżant'],
            ['rankName' => 'Sierżant sztabowy'],
            ['rankName' => 'Starszy sierżant sztabowy'],
            ['rankName' => 'Młodszy chorąży'],
            ['rankName' => 'Chorąży'],
            ['rankName' => 'Starszy chorąży'],
            ['rankName' => 'Starszy chorąży sztabowy'],
            ['rankName' => 'Młodszy Chorąży sztabowy'],
            ['rankName' => 'Chorąży sztabowy'],
            ['rankName' => 'Starszy Chorąży sztabowy'],
            ['rankName' => 'Podporucznik'],
            ['rankName' => 'Porucznik'],
            ['rankName' => 'Kapitan'],
            ['rankName' => 'Major'],
            ['rankName' => 'Podpułkownik'],
            ['rankName' => 'Pułkownik'],
            ['rankName' => 'Generał brygady'],
        ]);
    }
}
