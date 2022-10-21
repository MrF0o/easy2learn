@extends('layouts.main')

@section('content')
    <div class="row content">

        {{-- <div class="row justify-content-center ">
            <div class="col-md-6 mb-3">
                <div class="alert alert-primary fw-bold text-center">Please confirm your email address by clicking the verification link in the mail.</div>
            </div>
        </div> --}}

        <div class="col-lg-5 col-md-7 mx-auto">
            <div class="block-rounded block">

                <div class="block-header block-header-default justify-content-between">
                    <div class="block-title">
                        Sign in
                    </div>
                    <div>
                        <a href="#" class="text-muted">
                            <span class="p-1">Forgot password?</span>
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full mx-4">
                    <p class="text-muted fw-normal">Welcome please login</p>
                </div>
                <div class="row mx-4">
                    <form action=" {{route('auth.login')}} " method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="username" type="text" class="form-control form-control-alt" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control form-control-alt" placeholder="Password">
                        </div>
                        <div class="my-4">
                            <button type="submit" class="btn btn-alt-info px-5 mb-3 float-end"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
                        </div>
                        {{-- <hr>
                        <div class="text-center fs-sm">
                            OR login by using the following
                        </div>
                        <div class="text-center my-3 row">
                            <div class="col-lg-6 m-2 m-lg-0">
                                <button class="btn btn-facebook px-5 w-100"><i class="fab fa-facebook-f px-1"></i> Facebook</button>
                            </div>
                            <div class="col-lg-6 m-2 m-lg-0">
                                <button class="btn btn-google px-5 w-100"><i class="fab fa-google px-1"></i> Google</button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
