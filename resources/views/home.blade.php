@extends('layouts.app')

@section('content')
<div class="home-section">
<div class="container">
    <div class="homepage-text">
    <h1 class="text-left display-3">Welcome To Bachao<h1>
   
    <h5 class="lead text-left">The largest online healthcare website in Bangladesh</h5>
    
    <img
            src="images/homepage.jpg"
            alt="..."
            class="img-thumbnail"
            style="background-image"
    />
</div>
</div>
<div class="container">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as a user!') }}
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
<div class="footer">
        <div class="text-center">
        &copyCopyright Bachao 2021
        </div>
    </div>
@endsection


