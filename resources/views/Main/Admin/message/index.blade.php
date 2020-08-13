@extends('Main.Admin.partials.nav')

@section('content')

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>نام</th>
            <th>ايميل</th>
            <th>پيام</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
        @if($messages && count($messages) > 0 )
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td><textarea cols="80" disabled>{{$message->message }}</textarea></td>
                    <td>
                        <a class = "btn btn-success" href="{{route('admin.message.edit',$message->contact_id)}}">ویرایش</a>
                        <a class = "btn btn-danger" href="{{route('admin.message.delete', $message->contact_id)}}">حذف</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
