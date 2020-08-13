@extends('Main.Admin.partials.nav')

    @section('content')
        <form action="{{route('admin.slider.update',$sliderItem->slider_id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
                <thead class="thead-dark">
                <tr>
                    <th>عنوان</th>
                    <th>عکس</th>
                    <th></th>
                    <th>عملیات</th>
                </tr>

                </thead>
                <tbody>
                @if($sliderItem && count($sliderItem) > 0 )
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" placeholder="عنوان" name="title" value="{{ $sliderItem->title }}">
                                </div>
                            </td>
                            <td><img style="max-width: 250px; max-height: 150px" class="img-responsive" src="http://127.0.0.1:8000/images/slider/{{$sliderItem->picture}}"></td>
                            <td>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" aria-describedby="inputGroupFileAddon01">
                                        <label style="direction: ltr" class="custom-file-label" for="inputGroupFile01">انتخاب تصویر</label>
                                    </div>
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
