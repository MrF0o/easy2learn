@extends('layouts.main')

@section('content')
    <div class="content">
        <h1 class="display-5 text-center">Learn 30% FASTER</h1>
        <p class="h5 text-center">with the E2L strategy</p>
        <p class="h4 text-center">Try out the DEMO here below</p>

        <div class="row justify-content-center pt-5">
            <div class="col-lg-7 col-xl-6 col-md-10">
                @include('inc.product')
            </div>
        </div>
    </div>
@endsection
