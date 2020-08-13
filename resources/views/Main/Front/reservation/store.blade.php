@extends('Main.Front.partials.nav')

@section('content')
    <br><br>
    <div style="margin-bottom: 171px;" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="table-responsive">
            <table style="font-family: 'B Nazanin'; font-size: 40px; margin-bottom: 50px;" class="container text-center text-responsive" style="direction: rtl;width: 100%">
                <tr>
                    <td style="color: limegreen;">
                        <br>
                           .رزرو شما با موفقیت ثبت گردید
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="btn btn-info" href="{{route('front.main.index')}}" role="button">بازگشت به صفحه اصلی</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
