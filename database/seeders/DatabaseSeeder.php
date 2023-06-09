<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;
use Database\Seeders\BootcampSeeder;
use Database\Seeders\MembershipSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Visitor::factory(10)->create();
        $this->call([
            BootcampSeeder::class,
            MembershipSeeder::class,
            UserSeeder::class,
        ]);
    }
}
