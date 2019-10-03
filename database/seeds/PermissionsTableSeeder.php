<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '17',
                'title'      => 'task_management_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '18',
                'title'      => 'task_status_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '19',
                'title'      => 'task_status_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '20',
                'title'      => 'task_status_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '21',
                'title'      => 'task_status_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '22',
                'title'      => 'task_status_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '23',
                'title'      => 'task_tag_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '24',
                'title'      => 'task_tag_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '25',
                'title'      => 'task_tag_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '26',
                'title'      => 'task_tag_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '27',
                'title'      => 'task_tag_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '28',
                'title'      => 'task_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '29',
                'title'      => 'task_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '30',
                'title'      => 'task_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '31',
                'title'      => 'task_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '32',
                'title'      => 'task_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '33',
                'title'      => 'tasks_calendar_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '34',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '35',
                'title'      => 'crm_status_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '36',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '37',
                'title'      => 'crm_status_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '38',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '39',
                'title'      => 'crm_status_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '40',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '41',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '42',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '43',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '44',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '45',
                'title'      => 'crm_note_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '46',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '47',
                'title'      => 'crm_note_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '48',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '49',
                'title'      => 'crm_note_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '50',
                'title'      => 'crm_document_create',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '51',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '52',
                'title'      => 'crm_document_show',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '53',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
            [
                'id'         => '54',
                'title'      => 'crm_document_access',
                'created_at' => '2019-09-29 19:42:10',
                'updated_at' => '2019-09-29 19:42:10',
            ],
        ];

        Permission::insert($permissions);
    }
}
