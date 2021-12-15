<?php

use Illuminate\Database\Seeder;

class FormLastRunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbm_form_last_runrs')->truncate();

        $data = [
            [
                'runner_id' => 1,
                'date' => date('Y-m-d'),
                'cost' => 1200
            ],
            [
                'runner_id' => 2,
                'date' => date('Y-m-d'),
                'cost' => 100
            ]
        ];

        foreach ($data as $d) {
            \App\FormLasrRunrs::create($d);
        }
    }
}
