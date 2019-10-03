<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-09-29 19:42:08',
            'updated_at' => '2019-09-29 19:42:08',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-09-29 19:42:08',
                'updated_at' => '2019-09-29 19:42:08',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-09-29 19:42:08',
                'updated_at' => '2019-09-29 19:42:08',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
