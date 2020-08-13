@extends('Main.Admin.partials.nav')

    @section('content')
        <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table style="direction: rtl; font-family: 'B Nazanin'; text-align: center" class="table">
                <thead class="thead-dark">
                <tr>
                    <th>عنوان</th>
                    <th>عکس</th>
                    <th>عملیات</th>
                </tr>

                </thead>
                <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" placeholder="عنوان" name="title">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" aria-describedby="inputGroupFileAddon01">
                                        <label style="direction: ltr" class="custom-file-label" for="inputGroupFile01">انتخاب تصویر</label>
                                    </div>
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
