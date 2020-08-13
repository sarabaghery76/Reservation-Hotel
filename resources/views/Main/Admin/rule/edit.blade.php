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
        @if($ruleItem && count($ruleItem) > 0 )
            <form action="{{route('admin.rule.update',$ruleItem->rule_id)}}" method="post">
                {{csrf_field()}}
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="عنوان" name="title" value="{{$ruleItem->title}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" id="description" placeholder="توضیحات" name="description">{{$ruleItem->description }}</textarea>
                        </div>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">به روز رسانی</button>
                    </td>
                </tr>
            </form>
        @endif
        </tbody>
    </table>

@endsection
