@extends('Main.Admin.partials.nav')

@section('content')

    <a style="margin-bottom: 5px;" class="btn btn-info" href="{{route('admin.account.insert')}}" role="button">افزودن حساب کاربری جدید</a>

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>نام</th>
            <th>ايميل</th>
            <th>رمزعبور</th>
            <th>عمليات</th>
        </tr>

        </thead>
        <tbody>
        @if($users && count($users) > 0 )
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a class = "btn btn-success" href="{{route('admin.account.edit',$user->id)}}">ویرایش</a>
                        <a class = "btn btn-danger" href="{{route('admin.account.delete',$user->id)}}">حذف</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
