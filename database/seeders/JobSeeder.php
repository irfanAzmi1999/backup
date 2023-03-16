<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberofJobs = (int)$this->command->ask('How many jobs do you want?',30);
        $user = User::all();

        $posts = job::factory($numberofJobs)->make()->each(function ($post) use ($user){
            $post->user_id = $user->random()->id;
            $post->save();
        });
    }
}
