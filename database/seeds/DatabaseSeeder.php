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
        $this->call(Hotelseeder::class);

        $this->call(Roomseeder::class);

        $this->call(Reservationseeder::class);
    }
}
