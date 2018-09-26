@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hey, {{ auth()->user()->username}}, write the home message bellow.
                    <home-message-block></home-message-block>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
