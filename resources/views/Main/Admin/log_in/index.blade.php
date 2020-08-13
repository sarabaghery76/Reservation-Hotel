<html lang="en">
    <head>
        <title>سیستم آنلاین رزرواسیون هتل جمالی</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <br><br><br>
            <form action="{{route('admin.main.index')}}" method="post" class="was-validated" novalidate>
                {{csrf_field()}}
                <table class="text-responsive" style="direction: rtl;width: 40%; font-family: 'B Nazanin'; margin: auto;">
                    <tr>
                        <td>
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">ورود به پنل مدیریت</h3>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="username"><b> نام کاربری :</b></label>
                                <input type="text" class="form-control" id="username" placeholder="نام" name="username" required>
                                <div class="invalid-feedback"> لطفا  فیلد نام کاربری را تکمیل نمایید. </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <label><b>کلمه عبور</b></label>
                                <input type="password" class="form-control" id="password" placeholder="کلمه عبور" name="password" required>
                                <div class="invalid-feedback"> لطفا فیلد کلمه عبور را تکمیل نمایید. </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @include('Main.Admin.Notification.index')
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-success">ورود</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
