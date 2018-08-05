@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $issue['title'] }}
                    <span class="push-right label label-default">{{ $issue['state'] }}</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        {{ $issue['body']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
