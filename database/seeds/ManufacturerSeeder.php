<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;



class ManufacturerSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();

        Manufacturer::insert([
            [
                'manufacturer_name' => 'HONDA'
            ],
            [
                'manufacturer_name' => 'SUZUKI'
            ],
            [
                'manufacturer_name' => 'KAWASAKI'
            ],
            [
                'manufacturer_name' => 'YAMAHA'
            ],
        ]);

    }
}
