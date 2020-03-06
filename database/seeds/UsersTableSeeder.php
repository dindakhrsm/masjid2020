<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::statement(' SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Bambang Setiabudi",
                'email' => "b.setiabudi@bapeten.go.id",
                'password' => bcrypt('secret')
            ],

            [
                'name' => "Dinda Kharisma",
                'email' => "d.kharisma@bapeten.go.id",
                'password' => bcrypt('secret')
            ],

            [
                'name' => "Amsirahk Adnid",
                'email' => "amsirahk@test.com",
                'password' => bcrypt('secret')
            ],
        ]);

    }
}
