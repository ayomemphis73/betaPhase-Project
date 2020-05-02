<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Reservation;

use App\Models\Hotel;

use App\Models\Room;


class ReservationController extends Controller
{
    
    //  * Display a listing of the reservations.
    //  *
    //  * @return \Illuminate\Http\Response
      

    // using the Reservation model to get all rooms for each hotel as well as the user informations using with()
    
    public function index()
    { 
        $reservations = Reservation::with('room', 'room.hotel')

        ->orderBy('arrival', 'asc')
        ->get();

         return view('dashboard.reservations')->with('reservations',$reservations);

    }

     
    //  * Show the form for creating new reservation.
    //  *
    //  * @return \Illuminate\Http\Response
     
    public function create($hotel_id)
    {
        $hotelInfo = Hotel::with('rooms') ->get() ->find($hotel_id);
        
        return view('dashboard.reservationCreate', compact('hotelInfo'));
    }

    
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        $request->request->add(['user_id' => 1]);

        Reservation::create($request->all());
    
        return redirect('dashboard/reservations')->with('success', 'Reservation created!');
    }

    
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function show(Reservation $reservation)
    {
        $reservation = Reservation::with('room', 'room.hotel')
        
        ->get()
        ->find($reservation->id);

        if ($reservation->user_id === \Auth::user()->getUserInfo()['sub']) {

        $hotel_id =$reservation->room->hotel_id;

        $hotelInfo = Hotel::with('rooms') ->get() ->find($hotel_id);

        return view('dashboard.reservationSingle' , compact('reservation' ,'hotelInfo'));
 
    } else 
    return redirect('dashboard/reservations')->with('error', 'You are not authorized.');
}

    
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit(Reservation $reservation)

    {
        
     $reservation = Reservation::with('room', 'room.hotel')->get()->find($reservation->id);
      $hotel_id = $reservation->room->hotel_id;

      $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);

      return view('dashboard.reservationEdit', compact('reservation', 'hotelInfo'));
}

    
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function update(Request $request, Reservation $reservation)

    {
        if ($reservation->user_id != \Auth::user()->getUserInfo()['sub'])
        return redirect('dashboard/reservations')->with('error', 'You are not authorized to update this ');

  $user_id = \Auth::user()->getUserInfo()['sub'];
  $reservation->user_id = $user_id;
  $reservation->num_of_guests = $request->num_of_guests;
  $reservation->arrival = $request->arrival;
  $reservation->departure = $request->departure;
  $reservation->room_id = $request->room_id;

  $reservation->save();

        return redirect('dashboard/reservations')->with('success', 'reservation updated');

    }    

    
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function destroy(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation ->id);

        $reservation ->delete();

        return redirect('dashboard/reservations') ->with('success','reservation deleted');

    return redirect('dashboard/reservations')->with('error', 'You are not authorized to delete this reservation');
}
}
