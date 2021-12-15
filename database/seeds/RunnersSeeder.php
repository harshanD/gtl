<?php

use Illuminate\Database\Seeder;

class RunnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbm_runners')->truncate();


        $data = [
            [
                'external_id' => 'EI1',
                'name' => 'test name 1',
                'avatar' => '',
                'dob' => date('Y-m-d'),
                'sex' => 0,
                'color' => 'White',
                'weight' => '2.5',
                'sire' => 'test sire 1',
                'dam' => 'test dam',
                'race_id' => 1,
            ],
            [
                'external_id' => 'EI2',
                'name' => 'test name 2',
                'avatar' => '',
                'dob' => date('Y-m-d'),
                'sex' => 1,
                'color' => 'Black',
                'weight' => '4.5',
                'sire' => 'test sire 2',
                'dam' => 'test dam',
                'race_id' => 1,
            ]
        ];

        foreach ($data as $d) {
            \App\Runners::create($d);
        }
    }
}
