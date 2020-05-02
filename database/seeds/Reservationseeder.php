<?php

use Illuminate\Database\Seeder;

use App\Models\Reservation;

class Reservationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reservations in DATABASE

        $reservations  = [

            [
                'user_id'  => '1',
                'room_id'  => '1',
                'num_of_guests'  => 2,
                'arrival' => '2020-05-15',
                'departure' => '2020-05-20'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '2',
                'num_of_guests'  => 2,
                'arrival' => '2020-05-15',
                'departure' => '2020-05-20'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '3',
                'num_of_guests'  => 4,
                'arrival' => '2020-05-15',
                'departure' => '2020-05-21'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '4',
                'num_of_guests'  => 2,
                'arrival' => '2020-04-15',
                'departure' => '2020-05-29'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '2',
                'num_of_guests'  => 2,
                'arrival' => '2020-05-15',
                'departure' => '2020-07-20'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '3',
                'num_of_guests'  => 2,
                'arrival' => '2020-05-15',
                'departure' => '2020-05-20'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '1',
                'num_of_guests'  => 2,
                'arrival' => '2020-05-15',
                'departure' => '2020-06-20'

            ],


            [
                'user_id'  => '1',
                'room_id'  => '3',
                'num_of_guests'  => 2,
                'arrival' => '2020-06-15',
                'departure' => '2020-07-20'

            ] 

            ];

            foreach ($reservations as $reservation)  {
                Reservation::create(array(

                    'user_id' => $reservation['user_id'],
                    'room_id' => $reservation['room_id'],
                    'num_of_guests' => $reservation['num_of_guests'],
                    'arrival' => $reservation['arrival'],
                    'departure' => $reservation ['departure'],

                ));
            }
    }
}
