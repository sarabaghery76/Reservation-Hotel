@extends('Main.Admin.partials.nav')

@section('content')

    <a style="margin-bottom: 5px;" class="btn btn-info" href="{{route('admin.slider.insert')}}" role="button">افزودن اسلایدر جدید</a>

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>عنوان</th>
            <th>عکس</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
        @if($sliders && count($sliders) > 0 )
            @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td><img style="max-width: 250px; max-height: 150px" class="img-responsive" src="http://127.0.0.1:8000/images/slider/{{$slider->picture}}"></td>
                    <td>
                        <a class = "btn btn-success" href="{{route('admin.slider.edit',$slider->slider_id)}}">ویرایش</a>
                        <a class = "btn btn-danger" href="{{route('admin.slider.delete',$slider->slider_id)}}">حذف</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
