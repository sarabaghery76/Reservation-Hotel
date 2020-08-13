@extends('Main.Admin.partials.nav')

@section('content')
 @auth()
     .عزیز خوش آمدید {{ auth()->user()->name }}
 @endauth
@endsection
