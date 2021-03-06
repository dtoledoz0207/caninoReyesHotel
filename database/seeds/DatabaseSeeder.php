<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(LocalitiesTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(StreetsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ZipCodesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
    }
}
