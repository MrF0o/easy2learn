@extends('layouts.main')

@section('content')
    <div class="content row d-flex justify-content-center">
        <div class="row text-center">
            <p class="h2">Pricing</p>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="javascript:void(0)" class="block-rounded block-link-shadow block text-center">
                <div class="block-header">
                    <h2 class="block-title fs-lg">Free</h2>
                </div>
                <div class="block-content bg-body-light">
                    <div class="py-2">
                        <p class="h1 fw-bold mb-2">$0</p>
                    </div>
                </div>
                <div class="block-content">
                    <div class="fs-sm py-2">
                        <p class="m-0 p-1"><strong>1</strong> course</p>
                        <p class="m-0 p-1"><strong>Max 30</strong> Q&A's</p>
                        <p class="m-0 p-1">90 days archive</p>
                        <p class="m-0 p-1">Ads</p>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <span class="btn btn-primary px-4" onclick="window.location.href = '{{route('register')}}'">REGISTER</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="javascript:void(0)" class="block-rounded block-link-shadow block text-center">
                <div class="block-header">
                    <h2 class="block-title fs-lg">STUDENT +</h2>
                </div>
                <div class="block-content bg-body-light">
                    <div class="py-2">
                        <p class="h1 fw-bold mb-2">4$/mo <div class="fs-sm">($48/year)</div></p>
                    </div>
                </div>
                <div class="block-content">
                    <div class="fs-sm py-2">
                        <p class="m-0 p-1"><strong>Unlimited courses</strong></p>
                        <p class="m-0 p-1"><strong>Unlimited Q&A's</strong></p>
                        <p class="m-0 p-1"><strong>Unlimited archive</strong></p>
                        <p class="m-0 p-1"><strong>Export summary (PDF,Word)</strong></p>
                        <p class="m-0 p-1"><strong>Share your summaries</strong></p>
                        <p class="m-0 p-1"><strong>Sell your summaries (*)  <br><span class="text-sm text-muted">(in private or public)</span></strong></p>
                        <p class="m-0 p-1"><strong>Ad-free</strong></p>
                        <p class="m-0 p-1"><strong>Support</strong></p>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <span class="btn btn-primary px-4 disabled">UPGRADE</span>
                    <p class="text-muted fs-sm">* In development</p>
                </div>
            </a>
        </div>
        <div class="col-12 text-center">
            <p> <a href="#" class="link">Any questions, suggestions or feedback? Please check our support page</a></p>
        </div>
    </div>
@endsection
