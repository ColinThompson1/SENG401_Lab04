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
        // Visitor
        DB::table('users')->insert([
            'email' => 'visitor@test.com',
            'password' => Hash::make('password'),
            'role' => 'visitor',
            'birthday' => '1995-01-01',
            'education' => 'none'
        ]);

        // Subscriber 1
        DB::table('users')->insert([
            'email' => 'subscriber1@test.com',
            'password' => Hash::make('password'),
            'role' => 'subscriber',
            'birthday' => '1995-01-01',
            'education' => 'none'
        ]);

        // Subscriber 2
        DB::table('users')->insert([
            'email' => 'subscriber2@test.com',
            'password' => Hash::make('password'),
            'role' => 'subscriber',
            'birthday' => '1995-01-01',
            'education' => 'none'
        ]);

        // Subscriber 3
        DB::table('users')->insert([
            'email' => 'subscriber3@test.com',
            'password' => Hash::make('password'),
            'role' => 'subscriber',
            'birthday' => '1995-01-01',
            'education' => 'none'
        ]);

        // Admin
        DB::table('users')->insert([
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'birthday' => '1995-01-01',
            'education' => 'none'
        ]);
    }
}
