<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MeetingSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(RunnersSeeder::class);
        $this->call(FormDataSeeder::class);
        $this->call(FormLastRunsSeeder::class);
    }
}
