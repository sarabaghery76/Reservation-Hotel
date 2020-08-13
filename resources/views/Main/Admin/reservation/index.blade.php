@extends('Main.Admin.partials.nav')

@section('content')
    @include('Main.Admin.reservation.partial')
    <br>
    @if($status=='Pending')

        <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
            <thead class="thead-dark">
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>شماره تماس</th>
                <th>نوع اتاق</th>
                <th>تاریخ رزرو</th>
                <th>وضعیت</th>
                <th> عملیات </th>
            </tr>
            </thead>
            <tbody>
            @if($resItem && count($resItem) > 0 )
                @foreach($resItem as $resitem)
                    <tr>
                        <td>{{ $resitem->guest->firstname }} {{$resitem->guest->lastname}}</td>
                        <td>{{ $resitem->guest->contactno }}</td>
                        <td>{{ $resitem->room->room_type }}</td>
                        <td>{{ $resitem->checkin }}</td>
                        <td>
                            در انتظار بررسي
                        </td>
                        <td>
                            <a class = "btn btn-success" href="{{route('admin.reservation.edit',$resitem->transaction_id)}}"> پذیرش کردن</a>
                            <a class = "btn btn-danger" href="{{route('admin.reservation.delete',$resitem->transaction_id)}}"> لغو کردن</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    @else

        <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
            <thead class="thead-dark">
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>نوع اتاق</th>
                <th>شماره اتاق</th>
                <th>تاریخ پذیرش</th>
                <th>مدت اقامت</th>
                <th>وضعیت</th>
                <th>تخت اضافی</th>
                <th>پرداختی</th>
                <th> عملیات </th>
            </tr>
            </thead>
            <tbody>
            @if($resItem && count($resItem) > 0 )
                @foreach($resItem as $resitem)
                    <tr>
                        <td>{{ $resitem->guest->firstname }} {{$resitem->guest->lastname}}</td>
                        <td>{{ $resitem->room->room_type }}</td>
                        <td>{{ $resitem->room_no }}</td>
                        <td>{{ $resitem->checkin }}</td>
                        <td>{{ $resitem->days }}</td>
                        <td>
                            @if($status=='CheckIn')
                                پذیرش
                            @else
                                تسویه
                            @endif
                        </td>
                        <td>{{ $resitem->extra_bed  }}</td>
                        <td>{{ $resitem->bill }} </td>
                        <td>
                            @if($status=='CheckIn')
                                <a class = "btn btn-warning" href="{{route('admin.reservation.Checkout',$resitem->transaction_id)}}"> تسویه و خروج</a>
                            @else
                                <div style="color: limegreen"><b>تسويه شده</b></div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    @endif
@endsection
