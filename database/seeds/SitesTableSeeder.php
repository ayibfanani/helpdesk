<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Sites\Site::firstOrCreate([
            'name' => 'Ayib Fanani',
            'slug' => 'ayibfanani',
            'status' => 1
        ]);
    }
}
