<?php

namespace App\Http\Controllers\Main\Front;

use App\Models\Guest;
use App\Models\Room;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view(('Main.Front.reservation.index'),compact('rooms'));
    }

    public function add($room_id)
    {
        if($room_id)
        {
            $roomItem = Room::find($room_id);
            if ($roomItem && $roomItem instanceof Room)
            {
                return view (('Main.Front.reservation.add'),compact('roomItem'));
            }
        }
    }

    public function store($room_id)
    {
        $guest_data=[
            'firstname' => request()->input('firstname'),
            'lastname' => request()->input('lastname'),
            'contactno' => request()->input('contactno'),
        ];
        Guest::create($guest_data);

        $guest_Item = DB::table('Guest')->latest('guest_id')->first();

        $guest_id = ($guest_Item->guest_id);

        $day = request()->input('day');
        $month = request()->input('month');
        $year = request()->input('year');

        $checkin = $year . '-' . $month .'-'. $day ;

        $transaction_data=[
            'days' => request()->input('days'),
            'room_id' => $room_id ,
            'checkin' => $checkin,
            'guest_id' => $guest_id,
            'status' => "Pending",
        ];

        Transaction::create($transaction_data);

        return view ('Main.Front.reservation.store');
    }
}
