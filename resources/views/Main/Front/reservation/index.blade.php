@extends('Main.Front.partials.nav')

@section('content')
    @if($rooms && count($rooms) > 0)
        <br>
        <div style="font-family: 'B Nazanin';" class="list-group">
            @foreach($rooms as $room)
                <a class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="table-responsive">
                        <table class="text-responsive" style="direction: rtl;width: 100%">
                            <tr>
                                <td style="direction: rtl;" >
                                    <div class="d-flex w-100 justify-content-between">
                                        <h3 class="mb-1">{{$room->room_type}}</h3>
                                    </div>
                                    <br>
                                        <h6 class="text-muted"> قیمت به مدت یک شب : {{$room->price}} تومان</h6>
                                    <br>
                                        <a class="btn btn-info" href="{{route('front.reserve.add',$room->room_id)}}" role="button">اطلاعات بیشتر و رزرو</a>
                                </td>
                                <td style=" direction: ltr;" >
                                    <img style="max-width: 500px; max-height: 200px" class="img-responsive" src="http://127.0.0.1:8000/images/room/{{$room->photo}}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </a>
                <br>
            @endforeach
        </div>
    @endif
@endsection
