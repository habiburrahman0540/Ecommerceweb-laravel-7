<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Admin',
           'phone'=>'01745656666',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('rootadmin'),
        ]);
    }
}
