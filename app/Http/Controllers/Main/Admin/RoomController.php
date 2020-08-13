<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();
        return view(('Main.Admin.room.index'),compact('rooms'));
    }

    public function store(RoomRequest $roomRequest)
    {
        if(request()->input('breakfast') == 'on')
        {
            $breakfast = 1;
        }
        else{
            $breakfast = 0;
        }

        $photo_name = str_random(8).'.'.$roomRequest->file('photo')->getClientOriginalExtension();

        $inputs = [
            'room_type' => request()->input('room_type') ,
            'price' => request()->input('price') ,
            'photo' => $photo_name,
            'breakfast'=> $breakfast ,
            'add_service' => request()->input('add_service') ,
            'capacity' => request()->input('capacity'),
        ];
        $s = $roomRequest->file('photo')->move(public_path('images/room'),$photo_name);
        Room::create($inputs);
        return redirect()->route('admin.room.index');
    }

    public function insert()
    {
        return view(('Main.Admin.room.insert'));
    }

    public function delete($room_id)
    {
        if($room_id && ctype_digit($room_id))
        {
            Room::destroy($room_id);
        }
    }

    public function edit($room_id)
    {
        if($room_id && ctype_digit($room_id))
        {
            $roomItem = Room::find($room_id);
            if ($roomItem && $roomItem instanceof Room)
            {
                return view(('Main.Admin.room.edit'),compact('roomItem'));
            }
        }
    }

    public function update(RoomRequest $roomRequest,$room_id)
    {
        if($room_id && ctype_digit($room_id))
        {
            if(request()->input('breakfast') == 'on')
            {
                $breakfast = 1;
            }
            else{
                $breakfast = 0;
            }

            $new_photo_name = str_random(8).'.'.$roomRequest->file('photo')->getClientOriginalExtension();

            $inputs = [
                'room_type' => request()->input('room_type') ,
                'price' => request()->input('price') ,
                'photo' => $new_photo_name,
                'breakfast'=> $breakfast ,
                'add_service' => request()->input('add_service') ,
                'capacity' => request()->input('capacity'),
            ];
            $s = $roomRequest->file('photo')->move(public_path('images/room'),$new_photo_name);
            $roomItem = Room::find($room_id);
            $roomItem->Update($inputs);
            return redirect()->route('admin.room.index');
        }
    }
}
