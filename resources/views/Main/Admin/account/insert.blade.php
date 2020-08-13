@extends('Main.Admin.partials.nav')

    @section('content')
        <form action="{{route('admin.account.store')}}" method="post" >
            {{csrf_field()}}
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
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="نام" name="name">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="ایمیل" name="email">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="رمزعبور" name="password" >
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">ثبت</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    @endsection
