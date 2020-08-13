<html lang="en">
    <head>
        <title>سیستم آنلاین رزرواسیون هتل جمالی</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/select2.min.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css"></script>

    </head>
    <body>
        <div class="container">

            <header style="font-family: 'B Nazanin'; direction: rtl;">
                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" style="font-size: 25px;">سیستم آنلاین رزرواسیون هتل جمالی</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto" style="font-size: 20px;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('front.main.index')}}">صفحه اصلی <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('front.reserve.index')}}">رزرواسیون</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('front.rules.index')}}">قوانین و مقررات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('front.aboutus.index')}}">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('front.contactus.index')}}">تماس با ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">مدیریت</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div style="margin-bottom: 13px;" class="row">
                <div class="col-sm-12">
                    <br><br>
                        @yield('content')
                </div>
            </div>
        </div>

        <footer style="height: 50px; bottom: 0;right: 0; width: 100%;" id="sticky-footer" class="py-3 bg-dark text-white-50">
            <div class="container text-center">
                <small style="font-family: 'B Nazanin'; font-size: 15px;"> . کلیه حقوق مادی و معنوی وبسایت رزرواسیون متعلق به هتل جمالی می باشد&copy;</small>
            </div>
        </footer>
        <script src="/js/jquery2.min.js" type="text/javascript"></script>
        <script src="/js/select2.min.js"></script>
    </body>
</html>
