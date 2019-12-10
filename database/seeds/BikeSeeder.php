<?php

use Illuminate\Database\Seeder;
use App\Bike;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        Bike::insert([
            [
                'manufacturer_id' => 2,
                'bike_name' => 'Vストローム250'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'Vストローム650'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'Vストローム650XT'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'Vストローム1000'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSR250'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSR400'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSR750'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R1000'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R1000'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R1000R'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R125'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R1100'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R250R'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-R400'
            ],
            [
                'manufacturer_id' => 2,
                'bike_name' => 'GSX-S150'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'CBR250RR'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'CB400SF'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'NM4-01'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'NM4-02'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'VFR1200F'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'VFR1200X'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'VFR750R'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'VTR250'
            ],
            [
                'manufacturer_id' => 1,
                'bike_name' => 'VTR1000SP'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Ninja 1000'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Ninja 250'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Ninja 250R'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Ninja 250SL'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Ninja 300'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Versys'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Versys 1000'
            ],
            [
                'manufacturer_id' => 3,
                'bike_name' => 'Versys 1000 SE'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'BOLT'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'BOLT Cスペック'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'FZ-1 FAZER'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'SR400'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'SR500'
            ],
            [
                'manufacturer_id' => 4,
                'bike_name' => 'VMAX'
            ],
            
        ]);
    }
}
