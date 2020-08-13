@extends('Main.Admin.partials.nav')

@section('content')

    <a style="margin-bottom: 5px;" class="btn btn-info" href="{{route('admin.room.insert')}}" role="button">افزودن اتاق جدید</a>

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>نوع اتاق</th>
            <th>قیمت به مدت یک شب</th>
            <th>عکس</th>
            <th>صبحانه</th>
            <th>سرویس اضافه</th>
            <th>ظرفیت</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
        @if($rooms && count($rooms) > 0 )
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->room_type }}</td>
                    <td>{{ $room->price }} تومان </td>
                    <td><img style="max-width: 100px; max-height: 45px" class="img-responsive" src="http://127.0.0.1:8000/images/room/{{$room->photo}}"></td>
                    <td>{{($room->breakfast )? 'دارد' : 'ندارد' }}</td>
                    <td>{{ $room->add_service }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>
                        <a class = "btn btn-success" href="{{route('admin.room.edit',$room->room_id)}}">ویرایش</a>
                        <a class = "btn btn-danger" href="{{route('admin.room.delete',$room->room_id)}}">حذف</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
