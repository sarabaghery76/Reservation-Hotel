@extends('Main.Front.partials.nav')

@section('content')
    <div style="font-family: 'B Nazanin';" class="table-responsive">
        <form action="{{route('front.contactus.store')}}" method="post" class="was-validated">
    <br>
            {{csrf_field()}}
            <table class="text-responsive" style=" direction: rtl;width: 100%">
            <br>
                <tr>
                    <td>
                        <h4>
                            آدرس : مشهد - خيابان امام رضا - امام رضا 8 - کوچه دوم - سمت چپ
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>
                            تلفن : 12345678
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 20%" class="form-group">
                            <label for="name"> نام :</label>
                            <input type="text" class="form-control" id="name" placeholder="نام" name="name" required>
                            <div class="invalid-feedback"> .لطفا  فیلد نام را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div style="width: 20%" class="form-group">
                            <label> ایمیل :</label>
                            <input type="email" class="form-control" id="email" placeholder="ایمیل" name="email" required>
                            <div class="invalid-feedback"> .لطفا  فیلد ایمیل را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div style="width: 50%" class="form-group">
                            <label> پیام :</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            <div class="invalid-feedback"> .لطفا  فیلد پیام را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success">ارسال پیام</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

@endsection
