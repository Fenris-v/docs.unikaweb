<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use DB;
use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_user')->insert(
            ['user_id' => User::first()->id, 'group_id' => Group::first()->id]
        );
    }
}
