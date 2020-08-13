@extends('Main.Admin.partials.nav')

@section('content')

    <a style="margin-bottom: 5px;" class="btn btn-info" href="{{route('admin.rule.insert')}}" role="button">افزودن قانون جدید</a>

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>عنوان</th>
            <th>توضيحات</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
        @if($rules && count($rules) > 0 )
            @foreach($rules as $rule)
                <tr>
                    <td>{{ $rule->title }}</td>
                    <td><textarea cols="100" disabled>{{ $rule->description }}</textarea></td>
                    <td>
                        <a class = "btn btn-success" href="{{route('admin.rule.edit',$rule->rule_id)}}">ویرایش</a>
                        <a class = "btn btn-danger" href="{{route('admin.rule.delete',$rule->rule_id)}}">حذف</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
