<html lang="en">
    <head>
        <title>پنل مدیریت</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header style="font-family: 'B Nazanin'; direction: rtl;">
                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" style="font-size: 25px;">پنل مدیریت</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto" style="font-size: 20px;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.reservation.index',"Pending")}}">رزرواسیون <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.room.index')}}">اتاق ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.message.index')}}">پیام ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.rule.index')}}">قوانين</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.slider.index')}}">اسلایدر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.account.index')}}">حساب های کاربری</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"--}}
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    خروج
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div style="font-family: 'B Nazanin'; text-align: right; font-size: 25px;" class="row">
                <div class="col-sm-12">
                    <br><br><br>
                        @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
