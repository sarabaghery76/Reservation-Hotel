@extends('Main.Admin.partials.nav')

@section('content')
    <form action="{{route('admin.reservation.update',$reserveItem->transaction_id)}}" method="post" >
        {{csrf_field()}}
        <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
            <thead class="thead-dark">
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>نوع اتاق</th>
                <th>مدت اقامت</th>
                <th>سرویس اضافه</th>
                <th>شماره اتاق</th>
                <th> عملیات </th>
            </tr>
            </thead>
            <tbody>
                @if($reserveItem && count($reserveItem) > 0 )
                    <tr>
                        <td>{{ $reserveItem->guest->firstname }} {{$reserveItem->guest->lastname}}</td>
                        <td>{{ $reserveItem->room->room_type }}</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="days" placeholder="مدت اقامت" name="days" value="{{ $reserveItem->days }}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="extra_bed" placeholder="سرویس اضافه" name="extra_bed" value="{{ $reserveItem->extra_bed }}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="room_no" placeholder="شماره اتاق" name="room_no" value="{{ $reserveItem->room_no }}">
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">ذخیره اطلاعات</button>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </form>
@endsection
