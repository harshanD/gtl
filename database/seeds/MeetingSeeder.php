<?php

use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbm_meetings')->truncate();

        $data = [
            [
                'external_id' => 'TM1',
                'name' => 'Sandown',
                'distance' => '2400',
                'description' => '2400m'
            ]
        ];

        foreach ($data as $d) {
            \App\Meetings::create($d);
        }
    }
}
