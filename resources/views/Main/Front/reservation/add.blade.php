@extends('Main.Front.partials.nav')

@section('content')

    <div style="font-family: 'B Nazanin';" class="table-responsive">

        <form action="{{route('front.reserve.store',$roomItem->room_id)}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            {{csrf_field()}}
            <table class="text-responsive" style="direction: rtl;width: 100%">
                <tr>
                    <td style=" direction: rtl;" >
                        <div class="d-flex w-100 justify-content-between">
                            <h3 class="mb-1">{{$roomItem->room_type}}</h3>
                        </div>
                        <br>
                            <h6 class="text-muted"> قیمت به مدت یک شب : {{$roomItem->price}} تومان</h6>
                        <br>
                            <h6 class="text-muted">صبحانه رایگان : {{($roomItem->breakfast )? 'دارد.' : 'ندارد.' }} </h6>
                        <br>
                            <h6 class="text-muted"> امکان سرویس اضافه (نفر) : {{$roomItem->add_service}} </h6>
                        <br>
                            <h6 class="text-muted">ظرفیت (نفر) : {{$roomItem->capacity}} </h6>
                        <br>
                        <div style="border: none" class="form-control">
                            <div class="glyphicon glyphicon-calendar btn-ml"></div>
                                <label>تاریخ ورود :  </label>
                                <select class="col-sm-4" name="day" id="day"></select>
                                <select class="col-sm-4" name="month" id="month"></select>
                                <select class="col-sm-4" name="year" id="year"></select>
                        </div>
                        <br>
                        <div style="border: none" class="form-control">
                            <label>به مدت چند شب؟</label>
                            <select class="col-sm-2" name="days" id="days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <br>
                    </td>
                    <br>

                    <td style="direction: ltr;" >
                        <img style="max-width: 600px; max-height: 500px" class="img-responsive" src="http://127.0.0.1:8000/images/room/{{$roomItem->photo}}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex w-100 justify-content-between">
                            <h3 class="mb-1">اطلاعات رزروکننده</h3>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="uname"> نام :</label>
                            <input type="text" class="form-control" id="firstname" placeholder="نام" name="firstname" required>
                            <div class="invalid-feedback"> .لطفا  فیلد نام را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="uname"> نام خانوادگی :</label>
                            <input type="text" class="form-control" id="lastname" placeholder="نام خانوادگی" name="lastname" required>
                            <div class="invalid-feedback"> .لطفا  فیلد نام خانوادگی را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="uname"> تلفن با کد شهر :</label>
                            <input type="text" class="form-control" id="contactno" placeholder="تلفن" name="contactno" required>
                            <div class="invalid-feedback"> .لطفا  فیلد تلفن را تکمیل نمایید </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group form-check">
                            <label>
                               <a href="{{route('front.rules.index')}}">
                                   قوانین و مقررات رزرو اینترنتی را مطالعه نموده و قبول دارم.
                               </a>
                            </label>
                                <input class="form-check-input" type="checkbox" name="remember" required>
                                <div class="invalid-feedback">برای ادامه به روند رزرو باید قوانین را مطالعه و تایید نمایید.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success">ثبت رزرواسیون</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            var day = [
                "01", "02", "03", "04", "05","06","07","08","09","10",
                "11", "12", "13", "14", "15","16","17","18","19","20",
                "21", "22", "23", "24", "25","26","27","28","29","30","31",
            ];
            $("#day").select2({
                data: day
            });
        });
        $(document).ready(function() {
            var month = [
                "01", "02", "03", "04", "05","06","07","08","09","10", "11", "12"
            ];
            $("#month").select2({
                data: month
            });
        });
        $(document).ready(function() {
            var year = [
                "1400","1401","1402","1403","1404","1405","1406","1407",
                "1408","1409","1410","1412","1411","1413","1414","1415","1416","1417","1418",
                "1419","1420","1421","1422","1423","1424","1425","1426","1427","1428","1429","1430",
            ];
            $("#year").select2({
                data: year
            });
        });

    </script>

@endsection
