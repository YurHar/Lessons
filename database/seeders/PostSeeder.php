<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'model' => 'Car Model',
                'abou' => 'About car',
                'updated_at' => date('Y-m-d H:m:s'),
                'date' => date('Y-m-d H:m:s')
            ],
            [
                'user_id' => 2,
                'model' => 'Mercedes',
                'abou' => 'E63s AMG"',
                'updated_at' => date('Y-m-d H:m:s'),
                'date' => date('Y-m-d H:m:s')
            ]
        ]);
    }
}
