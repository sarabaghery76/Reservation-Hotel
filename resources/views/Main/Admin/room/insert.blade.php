@extends('Main.Admin.partials.nav')

@section('content')

    <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
        <thead class="thead-dark">
        <tr>
            <th>نوع اتاق</th>
            <th>قیمت به مدت یک شب (تومان)</th>
            <th>عکس</th>
            <th>صبحانه</th>
            <th>سرویس اضافه</th>
            <th>ظرفیت</th>
            <th>عملیات</th>
        </tr>

        </thead>
        <tbody>
            <form action="{{route(('admin.room.store'))}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="room_type" placeholder="نوع اتاق" name="room_type">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="price" placeholder="قیمت به مدت یک شب" name="price">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photo" name="photo" aria-describedby="inputGroupFileAddon01">
                                <label style="direction: ltr" class="custom-file-label" for="inputGroupFile01">انتخاب تصویر</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="checkbox" class="form-control" name="breakfast" id="breakfast">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="add_service" id="add_service">
                                <option value="0" selected >0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="capacity" id="capacity">
                                <option value="0" selected >0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
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
