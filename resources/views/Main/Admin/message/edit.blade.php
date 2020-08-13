@extends('Main.Admin.partials.nav')

    @section('content')
        <form action="{{route('admin.message.update',$messageItem->contact_id)}}" method="post" >
            {{csrf_field()}}
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
                @if($messageItem && count($messageItem) > 0 )
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="نام" name="name" value="{{ $messageItem->name }}">
                            </div>
                        </td>
                        <td>{{ $messageItem->email }}</td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="پیام" name="message">{{$messageItem->message }}</textarea>
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">به روز رسانی</button>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </form>
    @endsection
