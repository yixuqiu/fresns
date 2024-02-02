<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppUsagesTableSeeder extends Seeder
{
    /**
     * Fresns seed file.
     */
    public function run(): void
    {
        DB::table('app_usages')->delete();

        DB::table('app_usages')->insert([
            [
                'id' => 1,
                'usage_type' => 4,
                'app_fskey' => 'All',
                'name' => 'All',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 1,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'usage_type' => 4,
                'app_fskey' => 'Text',
                'name' => 'Text',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 2,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'usage_type' => 4,
                'app_fskey' => 'Image',
                'name' => 'Image',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 3,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'usage_type' => 4,
                'app_fskey' => 'Video',
                'name' => 'Video',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 4,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'usage_type' => 4,
                'app_fskey' => 'Audio',
                'name' => 'Audio',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 5,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'usage_type' => 4,
                'app_fskey' => 'Document',
                'name' => 'Document',
                'icon_file_id' => null,
                'icon_file_url' => null,
                'scene' => '1,2',
                'editor_toolbar' => 0,
                'editor_number' => null,
                'is_group_admin' => 0,
                'group_id' => null,
                'roles' => null,
                'parameter' => null,
                'sort_order' => 6,
                'can_delete' => 0,
                'is_enabled' => 1,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ]);
    }
}