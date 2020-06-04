@extends('templates.outs.home')

@section('content')
    {{-- HEADER--}}
	<div class="hug hug-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{ route('home') }}" class="pull-left"><img src="{{ \App\Helpers\Helpers::logoUrl() }}" alt="Ribbbon"></a>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-line pull-right login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-line pull-right register">Register</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
	</div>
@stop