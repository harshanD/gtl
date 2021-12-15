<?php

use Illuminate\Database\Seeder;

class FormDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbm_form_data')->truncate();

        $data = [
            [
                'runner_id' => 1,
                'name' => 'test name 1',
                'stage' => '1'
            ],
            [
                'runner_id' => 2,
                'name' => 'test name 2',
                'stage' => '2'
            ]
        ];

        foreach ($data as $d) {
            \App\FormData::create($d);
        }
    }
}
