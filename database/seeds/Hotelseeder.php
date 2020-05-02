    <?php

    use Illuminate\Database\Seeder;
    
    use App\Models\Hotel;

    class Hotelseeder extends Seeder
    {
        
        //  * Run the database seeds.
        //  *
        //  * @return void
         
        public function run()
        {
            //List of Hotels in DATABASE
            $hotels = [
                [
                    'name'=> 'Eko Hotel',
                    'location' => 'VI, LA',
                    'description' => 'International luxury hotel.',
                    'image' => 'https://source.unsplash.com/1800x900/?rooms'
                ],

                [
                    'name'=> 'Four Points',
                    'location' => 'Lekki, LA',
                    'description' => 'International luxury hotel.',
                    'image' => 'https://source.unsplash.com/1800x900/?rooms'
                ],

                [
                    'name'=> 'Raddison Blu',
                    'location' => 'Ikeja, LA',
                    'description' => 'International luxury hotel.',
                    'image' => 'https://source.unsplash.com/1800x900/?rooms'
                ],

                [
                    'name'=> 'Cocoon',
                    'location' => 'Illupeju, LA',
                    'description' => 'International luxury hotel.',
                    'image' => 'https://source.unsplash.com/1800x900/?rooms'
                ],

            ];

            foreach ($hotels as $hotel) {
                Hotel::create(array(
                    'name' => $hotel['name'],
                    'location' => $hotel['location'],
                    'description' => $hotel['description'],
                    'image' =>$hotel['image']
                ));
            }
        }
    }
