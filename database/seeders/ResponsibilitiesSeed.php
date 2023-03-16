<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\responsibility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponsibilitiesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jobs = job::all();
        if($jobs->count()===0)
        {
            $this->command->info('No Jobs Found');
            return;
        }

        $numberofMessages = (int)$this->command->ask('How many job responsibilities you want?',30);
        $responsibilities = responsibility::factory($numberofMessages)->make()->each(function ($resp) use ($jobs){
            $resp->job_id = $jobs->random()->id;
            $resp->save();
        });
    }
}
