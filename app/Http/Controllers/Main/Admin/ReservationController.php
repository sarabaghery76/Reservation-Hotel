<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\ReservationRequest;
use App\Models\Guest;
use App\Models\Room;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Compound;
use function Faker\Provider\me_ME\Company;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($status)
    {
        $resItem = Transaction::where('status',$status)->get();

        foreach ($resItem as $res)
        {
            $extra_bed = $res->extra_bed ;
            $days = $res->days ;
            $price = $res->room->price ;

            $bill = ($days * $price) + ($extra_bed * 100000) ;


            $reserveItem = Transaction::find($res->transaction_id);
            $inputs = [
                'bill' => $bill,
            ];
            $reserveItem->Update($inputs);

        }

        return view(('Main.Admin.reservation.index'),compact('resItem'))->with('status', $status);
    }

    public function delete($reserve_id)
    {
        if($reserve_id && ctype_digit($reserve_id))
        {
            Transaction::destroy($reserve_id);
        }
    }
    public function edit($reserve_id)
    {
        if($reserve_id && ctype_digit($reserve_id))
        {
            $reserveItem = Transaction::find($reserve_id);
            if ($reserveItem && $reserveItem instanceof Transaction)
            {
                return view(('Main.Admin.reservation.editPending'),compact('reserveItem'));
            }
        }
    }
    public function Checkout($reserve_id)
    {
        if($reserve_id && ctype_digit($reserve_id))
        {
            $reserveItem = Transaction::find($reserve_id);
            if ($reserveItem && $reserveItem instanceof Transaction)
            {
                $inputs = [
                    'status' => 'CheckOut',
                ];
                $reserveItem->Update($inputs);
                return redirect()->route('admin.reservation.index','CheckIn');
            }
        }
    }
    public function update(ReservationRequest $reservationRequest,$reserve_id)
    {
        if($reserve_id && ctype_digit($reserve_id))
        {
            $inputs = [
                'days' => request()->input('days') ,
                'extra_bed' => request()->input('extra_bed'),
                'room_no'=> request()->input('room_no'),
                'status' => 'CheckIn',
            ];
            $reserveItem = Transaction::find($reserve_id);
            $reserveItem->Update($inputs);
            return redirect()->route('admin.reservation.index','Pending');
        }
    }
}
