@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h1>Issues</h1>

            @foreach($issues as $issue)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>
                    <a href="{{ route('issues.show', $issue['number']) }}">
                        {{ $issue['title'] }}
                    </a></h5>
                    <p class="card-subtitle mb-2 text-muted">#{{ $issue['number'] }} by {{ $issue['user']['login'] }} {{ Carbon\Carbon::parse($issue['created_at'])->diffForHumans(Carbon\Carbon::now()) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6" style="
        background: url(https://tesonet.com/wp-content/themes/tesonet-theme/dist/images/map.svg) no-repeat;
    background-position-x: 37%;
    background-position-y: -137px;
    background-size: 677px;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: initial;
    background-size: 430px;
    background-position: -45px 0;
    background-size: 677px;
    background-position: 37% -137px;
    background-color: #2c3998!important;
    ">
        </div>
    </div>
</div>
@endsection
