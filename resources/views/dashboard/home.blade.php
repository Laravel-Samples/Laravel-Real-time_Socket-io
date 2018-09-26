@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Dashboard</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Hi {{ auth()->user()->username}}, write the home message bellow.</h3>
                    <home-message-block></home-message-block>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
