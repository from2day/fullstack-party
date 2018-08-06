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
                    <p class="card-subtitle mb-2 text-muted">#{{ $issue['number'] }} by {{ $issue['user']['login'] }} </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection
