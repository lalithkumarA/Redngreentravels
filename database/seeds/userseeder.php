<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'vijay',
            'email' => 'vijay@greefitech.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Demo',
            'email' => 'admin@demo.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
