<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{

    public function run()
    {
//        Country::truncate();
//        City::truncate();
        $countries = ['Uzbekistan', 'Germany'];
        $cities = [
            ['name' => 'Bukhara', 'stations' => [
                'Kogon', 'Karakul',
            ],
            ],
            ['name' => 'Jizzax', 'stations' => [
                'Jizzax',
            ]],
            ['name' => 'Samarkand', 'stations' => [
                'Samarkand',
            ]],
            ['name' => 'Navoi', 'stations' => [
                'Navoi', 'Kiziltepa'
            ]]
        ];
        foreach($countries as $country) {
            Country::create([
                'name' => $country,
            ]);
        }
        foreach($cities as $city) {
            $c = City::create([
                'country_id' => 1,
                'name' => $city['name'],
            ]);
            foreach($city['stations'] as $station) {
                Station::create([
                    'city_id' => $c->id,
                    'station_name' => $station,
            ]);
            }
        }
    }
}
