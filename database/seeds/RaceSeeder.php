<?php

use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbm_races')->truncate();

        $data = [
            [
                'external_id' => 'R1',
                'name' => 'Race 1',
                'status' => '0',
                'meeting_id' => 1
            ]
        ];

        foreach ($data as $d) {
            \App\Races::create($d);
        }
    }
}
