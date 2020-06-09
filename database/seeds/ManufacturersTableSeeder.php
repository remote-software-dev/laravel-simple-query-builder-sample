<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'origin_id'=>1,
                'manufacturer' => 'Renault',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>1,
                'manufacturer' => 'Peugeot',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>1,
                'manufacturer' => 'Citroen',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>2,
                'manufacturer' => 'BMW',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>2,
                'manufacturer' => 'Mercedes',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>2,
                'manufacturer' => 'Audi',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>2,
                'manufacturer' => 'VW',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Toyota',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Honda',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Mazda',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Nissan',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Daihatsu',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>3,
                'manufacturer' => 'Suzuki',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>4,
                'manufacturer' => 'Ford',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>4,
                'manufacturer' => 'Jeep',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'origin_id'=>4,
                'manufacturer' => 'Chevy',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]

        ]);
    }
}
