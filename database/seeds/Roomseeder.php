<?php

use Illuminate\Database\Seeder;

use App\Models\Room;

class Roomseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array of rooms category in DATABASE

        $rooms =[

        [

             'hotel_id' => 1,
             'type' => 'Deluxe',
             'description' => '2000 sqft, 3 king sized beds, full kitchen.',
             'price' => 25,000.00,
             'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

        ], 



        [

            'hotel_id' => 1,
            'type' => 'Luxury',
            'description' => '2000 sqft, 3 king sized beds, full kitchen.',
            'price' => 50,000.00,
            'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

        ],    

        [

        'hotel_id' => 2,
        'type' => 'Superior',
        'description' => '',
        'price' => 30,000.00,
        'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

        ],   
   
        [

        'hotel_id' => 2,
        'type' => 'Luxury',
        'description' => '2000 sqft, 3 king sized beds',
        'price' => 60,000.00,
        'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

       ],    


       [

        'hotel_id' => 3,
        'type' => 'Luxury',
        'description' => '2000 sqft, 1 king sized bed',
        'price' => 40,000.00,
        'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

       ],    



      [

        'hotel_id' => 3,
        'type' => 'Executive Suite',
        'description' => '2000 sqft, 3 king sized ',
        'price' => 70,000.00,
        'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

      ],
      
      
      [

        'hotel_id' => 4,
        'type' => 'Suite',
        'description' => '2000 sqft',
        'price' => 100,000.00,
        'image' => 'https://source.unsplash.com/1800x900/?bedrooms',

   ],   
   
   
   [

    'hotel_id' => 4,
    'type' => 'Penthouse',
    'description' => '2000 sqft, 3 king sized beds, full kitchen.',
    'price' => 250,000.00,
    'image' => 'https://placeimg.com/640/480/arch',

]

    ];


        foreach ($rooms as $room) {
            
            Room::create(array(

                'hotel_id' => $room['hotel_id'],

                'type' => $room ['type'],

                'description' => $room ['description'],

                'price' => $room ['price'],

                'image' => $room ['image']

            ));
        }
    }
}
