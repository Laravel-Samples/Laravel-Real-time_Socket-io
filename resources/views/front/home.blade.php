@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <public-message :home-message="{{ $message }}"></public-message>
        </div>
    </div>
</div>
@endsection
