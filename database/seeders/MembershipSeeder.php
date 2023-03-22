<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberships = [
            [
                'name' => 'Reguler',
                'portfolio' => 5,
                'live_session' => 10,
                'mentoring' => 'No',
                'job_guarantee' => 'No',
                'price' => 5000000
            ],
            [
                'name' => 'VIP',
                'portfolio' => 10,
                'live_session' => 15,
                'mentoring' => 'Yes',
                'job_guarantee' => 'Yes',
                'price' => 8000000
            ]
        ];

        foreach ($memberships as $membership) {
            Membership::create($membership);
        }
    }
}
