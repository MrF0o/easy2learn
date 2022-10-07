@extends('layouts.main')

@section('content')
    <div class="row content">

        <div class="row text-center">
            <p class="h2 m-1">Register for free</p>
            <p class="h4 fw-light">and start saving time while learning</p>
        </div>

        <div class="col-lg-5 col-md-7 mx-auto">
            <div class="block-rounded block">

                <div class="block-header block-header-default justify-content-between">
                    <div class="block-title">
                        Create an account
                    </div>
                    <div>
                        <a href="#" class="text-muted">
                            <span class="p-1">View terms</span>
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full mx-4">
                    <p class="text-muted fw-normal">Please fill in the following details to create an account.</p>
                </div>
                <div class="row mx-4">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-alt" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-alt" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-alt" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-alt" placeholder="Confirm Password">
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" class="form-check-input" id="checkbox-terms" placeholder="Confirm Password">
                            <label for="checkbox-terms" class="pe-1">I agree to Terms & Conditions</label>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-alt-primary px-5"><i class="fa fa-plus px-1"></i> Sign Up</button>
                        </div>
                        <hr>
                        <div class="text-center fs-sm">
                            OR create an account by using the following
                        </div>
                        <div class="text-center my-3 row">
                            <div class="col-lg-6 m-2 m-lg-0">
                                <button class="btn btn-facebook px-5 w-100"><i class="fab fa-facebook-f px-1"></i> Facebook</button>
                            </div>
                            <div class="col-lg-6 m-2 m-lg-0">
                                <button class="btn btn-google px-5 w-100"><i class="fab fa-google px-1"></i> Google</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
