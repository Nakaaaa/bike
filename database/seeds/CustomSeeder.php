<?php

use Illuminate\Database\Seeder;
use App\Custom;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        Custom::insert([

            [
                'title' => 'kfljweiolujfiwafjejfowliajfiowe',
                'customs' => 'たこやきさん太郎ｌｋｆｊうぇあおいｆｊをｊふぉｗ；いえあｊふぉあうぇじょふぃうぇじゃおｐふぁうぇい',
                'user_id' => 1,
                'bike_id' => 2,
                'created_at' => '2019/11/30'
            ],
            [
                'title' => 'ホンダやぞ',
                'customs' => 'ホンダのバイクはうんちっち',
                'user_id' => 2,
                'bike_id' => 1,
                'created_at' => '2019/11/30'
            ],
            [
                'title' => 'fgret346t5reh567865ysegesrgfs',
                'customs' => 'たこやきんさいおｆｊうぇおあｊふぉじゃうぇおｐｆじょいｐうぇあｊふぉいｐうぇｊ',
                'user_id' => 1,
                'bike_id' => 2,
                'created_at' => '2019/12/01'
            ],
        ]);


    }
}
