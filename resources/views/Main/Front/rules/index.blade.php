@extends('Main.Front.partials.nav')

@section('content')
    @if($rules && count($rules) > 0)
        <br>
        <div style="font-family: 'B Nazanin';" class="list-group">
            @foreach($rules as $rule)
                <a class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="table-responsive">
                        <table class="text-responsive" style="direction: rtl;width: 100%">
                            <tr>
                                <br>
                                <td style="direction: rtl;" >
                                    <div class="d-flex w-100 justify-content-between">
                                        <h3 class="mb-1">{{$rule->rule_id}}. {{$rule->title}}</h3>
                                    </div>
                                    <br>
                                        <h6 class="text-muted">{{$rule->description}} </h6>
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
