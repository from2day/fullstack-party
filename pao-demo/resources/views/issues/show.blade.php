@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ route('issues.index') }}">Back to issues</a>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $issue['title'] }} #{{ $issue['number'] }}</h5>
                    <p class="card-text">
                        {{ $issue['body']}}
                    </p>
                    <p><span class="badge badge-success">{{ $issue['state']}}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="row">
        <div class="col-md-2">
            <img src="{{ $issue['user']['avatar_url']}}" alt="" class="img-thumbnail rounded-circle">
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <p class="card-title"><a href="{{ $issue['user']['html_url'] }}">{{ $issue['user']['login'] }} </a></p>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $issue['body']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
