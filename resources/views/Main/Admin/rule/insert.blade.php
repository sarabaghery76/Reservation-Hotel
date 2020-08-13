@extends('Main.Admin.partials.nav')

@section('content')

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>عنوان</th>
            <th>توضيحات</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
            <form action="{{route('admin.rule.store')}}" method="post">
                {{csrf_field()}}
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="عنوان" name="title">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" id="description" placeholder="توضیحات" name="description"></textarea>
                        </div>
                    </td>
                    <td>
                        <button class = "btn btn-success" type="submit">ثبت</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>

@endsection
