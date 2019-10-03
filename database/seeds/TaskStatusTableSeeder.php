<?php

use App\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{
    public function run()
    {
        $taskStatuses = [[
            'id'         => '1',
            'name'       => 'Open',
            'created_at' => '2019-09-29 19:41:13',
            'updated_at' => '2019-09-29 19:41:13',
        ],
            [
                'id'         => '2',
                'name'       => 'In progress',
                'created_at' => '2019-09-29 19:41:13',
                'updated_at' => '2019-09-29 19:41:13',
            ],
            [
                'id'         => '3',
                'name'       => 'Closed',
                'created_at' => '2019-09-29 19:41:13',
                'updated_at' => '2019-09-29 19:41:13',
            ]];

        TaskStatus::insert($taskStatuses);
    }
}
