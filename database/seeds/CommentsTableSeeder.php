<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        DB::table('comments')->insert([
            [
                'comment'  => 'それは簡単です。ググってください。',
                'member_id' => '1',
                'created_at' => '2015-01-31 23:59:59',
                'updated_at' => '2015-01-31 23:59:59',
            ],
            [
                'comment'  => 'ggrks',
                'member_id' => '1',
                'created_at' => '2015-01-31 23:59:59',
                'updated_at' => '2015-01-31 23:59:59',
            ],
            [
		            'comment'  => 'echo がないので出力されていません',
		            'member_id' => '1',
		            'created_at' => '2015-01-31 23:59:59',
		            'updated_at' => '2015-01-31 23:59:59',            ],
        ]);
    }
}
