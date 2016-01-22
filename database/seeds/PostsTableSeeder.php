<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            [
                'title'      => '困った',
                'message'       => 'When there is no desire, all things are at peace.',
                'code'       => '',
                'member_id' => '1',
                'created_at' => '2015-01-31 23:59:59',
                'updated_at' => '2015-01-31 23:59:59',
            ],
            [
                'title'      => 'えーー',
                'message'       => 'When there is no desire, all things are at peace.',
                'code'       => '',
                'member_id' => '2',
                'created_at' => '2015-01-31 23:59:59',
                'updated_at' => '2015-01-31 23:59:59',
            ],
            [
                'title'      => 'むりぽ',
                'message'       => 'When there is no desire, all things are at peace.',
                'code'       => '',
                'member_id' => '1',
                'created_at' => '2015-01-31 23:59:59',
                'updated_at' => '2015-01-31 23:59:59',
            ],
        ]);
    }
}
