@extends('layouts.app')

@section('content')
<div class="home-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="text-left mt-4">
</div>
<div class="container">
    <div class="homepage-text">
    <h1 class="text-left display-3">Welcome To Bachao<h1>
    
    <h5 class="lead text-left">The largest online healthcare website in Bangladesh</h5>
    </div>
<div class="container">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as an Admin!') }}
                </div>
            </div>
            <div class="home-section">

        </div>
    </div>
</div>
        </div>
    </div>
</div>
</div>
@endsection

