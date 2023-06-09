<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Entry;
use App\Models\Education;
use App\Models\Skill;
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

        User::truncate();
        Type::truncate();
        Project::truncate();
        Entry::truncate();
        Education::truncate();
        Skill::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Entry::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        Skill::factory()->count(4)->create();            
    }
}

//When you want to clear the data in the tables
// run: php artisan migrate:fresh 
// when you want fresh seed data in the tables
// run: php artisan migrate:fresh --seed