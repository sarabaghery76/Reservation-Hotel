@extends('Main.Front.partials.nav')
{{$i=1}}
@section('content')
    <div style="height: 490px;" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            @if($sliders && count($sliders) > 0)
                @foreach($sliders as $slider)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{$i++}}"></li>
                @endforeach
            @endif
        </ol>

        <div style="height: 490px;" class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://127.0.0.1:8000/images/slider/welcome.jpg" class="d-block w-100" alt="...">
            </div>

            @if($sliders && count($sliders) > 0)
                @foreach($sliders as $slider)
                    <div class="carousel-item">
                        <img src="http://127.0.0.1:8000/images/slider/{{$slider->picture}}" class="d-block w-100" alt="...">
                        <div style="height: 250px;" class="carousel-caption d-none d-md-block">
                            <p style="font-family: 'B Nazanin'; font-size: 30px;"><b>{{$slider->title}}</b></p>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
