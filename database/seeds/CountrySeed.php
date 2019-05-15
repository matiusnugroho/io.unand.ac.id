<?php

use Illuminate\Database\Seeder;
use App\Country;
class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Country = Country::create(['name' => 'Madagascar']);
        $Country = Country::create(['name' => 'Brazil']);
        $Country = Country::create(['name' => 'Argentina']);
        $Country = Country::create(['name' => 'Austria']);
        $Country = Country::create(['name' => 'Australia']);
        $Country = Country::create(['name' => 'Indonesia']);
        $Country = Country::create(['name' => 'Malaysia']);
        $Country = Country::create(['name' => 'South korea']);
        $Country = Country::create(['name' => 'Japan']);
        $Country = Country::create(['name' => 'Vietnam']);
        $Country = Country::create(['name' => 'US']); //amerika
        $Country = Country::create(['name' => 'Thailand']);
        $Country = Country::create(['name' => 'Egypt']); //mesir
        $Country = Country::create(['name' => 'Cambodia']); //kamboja
        $Country = Country::create(['name' => 'Poland']);
        $Country->save();
    }
}
