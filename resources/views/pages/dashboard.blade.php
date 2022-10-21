@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container">
            @if (session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <p class="mb-0">
                        {{session()->get('success')}}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h6>Hi {{ auth()->user()->username }},</h6>

            <p>I'm Carl, the founder of Easy2learn and I have some good and bad news to mention...</p>

            <p>The bad news is that we are doing a test currently to see if people like you are interested in <br>
                this (unique) concept, before taking further action (spending a lot of money/energy in this project).</p>

            <p>This test started on 1 nov 2022 and currently <strong>{{ $count }}</strong> signed up for this
                project,
                which is very positive.</p>

            <p>The good news is that we've decided to give the <u class="fw-bold">first 50 people who signed up a FREE
                    UPGRADE to Student + for
                    1 year</u>, when the project has been completed. </p>

            <p>We will send you an email once the platform is set live, most probably it will be around the beginning of
                2023.
            </p>

            <p>My deepest apologies for bringing you this news, as you were probably expecting a working system, but we hope
                that you can understand our situation as it is very hard to launch a startup these days.</p>

            <h6>Kind regards,</h6>
            <strong>Carl</strong>
        </div>
    </div>
@endsection
