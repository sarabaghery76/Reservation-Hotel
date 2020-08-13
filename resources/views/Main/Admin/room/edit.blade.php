@extends('Main.Admin.partials.nav')

@section('content')

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>نوع اتاق</th>
            <th>قیمت به مدت یک شب (تومان)</th>
            <th>عکس</th>
            <th></th>
            <th>صبحانه</th>
            <th>سرویس اضافه</th>
            <th>ظرفیت</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
        @if($roomItem && count($roomItem) > 0 )
            <form action="{{route('admin.room.update',$roomItem->room_id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="room_type" placeholder="نوع اتاق" name="room_type" value="{{$roomItem->room_type}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="price" placeholder="قیمت به مدت یک شب" name="price" value="{{$roomItem->price}}">
                        </div>
                    </td>
                    <td>
                        <img style="max-width: 100px; max-height: 45px" class="img-responsive" src="http://127.0.0.1:8000/images/room/{{$roomItem->photo}}">
                    </td>
                    <td>
                        <div style="max-width: 150px;" class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photo" name="photo" aria-describedby="inputGroupFileAddon01">
                                <label style="direction: ltr" class="custom-file-label" for="inputGroupFile01">انتخاب تصویر</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="checkbox" class="form-control" {{$roomItem->breakfast ? 'checked' : ''}} name="breakfast" id="breakfast">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="add_service" id="add_service">
                                <option value="0" {{$roomItem->add_service==0 ? 'selected' : ''}}>0</option>
                                <option value="1" {{$roomItem->add_service==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$roomItem->add_service==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$roomItem->add_service==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$roomItem->add_service==4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{$roomItem->add_service==5 ? 'selected' : ''}}>5</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="capacity" id="capacity">
                                <option value="0" {{$roomItem->capacity==0 ? 'selected' : ''}}>0</option>
                                <option value="1" {{$roomItem->capacity==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$roomItem->capacity==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$roomItem->capacity==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$roomItem->capacity==4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{$roomItem->capacity==5 ? 'selected' : ''}}>5</option>
                            </select>
                        </div>
                    </td>
                        <td>
                        <button class = "btn btn-success" type="submit">به روز رسانی</button>
                    </td>
                </tr>
            </form>
        @endif
        </tbody>
    </table>

@endsection
