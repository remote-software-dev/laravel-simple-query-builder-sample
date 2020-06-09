<?php

use Illuminate\Database\Seeder;

class OriginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origins')->insert([
            [
                'name' => 'France',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'Germany',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'Japan',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'USA',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]

        ]);
    }
}
