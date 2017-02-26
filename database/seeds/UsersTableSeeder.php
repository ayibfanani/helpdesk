<?php

use Illuminate\Database\Seeder;
use App\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $site = \App\Sites\Site::where('slug', 'ayibfanani')->firstOrFail();

        $ayibfanani = $site->users()->saveMany([
            new User([
                'email' => 'ayibfanani@gmail.com',
                'username' => 'ayibfanani',
                'password' => bcrypt('secret'),
                'first_name' => 'Ayib',
                'last_name' => 'Fanani',
                'status' => 1
            ]),
            new User([
                'email' => 'test@gmail.com',
                'username' => 'test',
                'password' => bcrypt('secret'),
                'first_name' => 'Test',
                'last_name' => 'Bos',
                'status' => 0
            ])
        ]);
    }
}
