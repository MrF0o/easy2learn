@extends('layouts.main')

@section('content')
    <div class="content row d-flex justify-content-center">
        <div class="row text-center">
            <p class="h2">How does it work?</p>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="javascript:void(0)" class="block-rounded block-link-shadow block text-center">
                <div class="block-header">
                    <h3 class="block-title">Free</h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="py-2">
                        <p class="h1 fw-bold mb-2">$0</p>
                        <p class="h6 text-muted">per year</p>
                    </div>
                </div>
                <div class="block-content">
                    <div class="fs-sm py-2">
                        <p><strong>1</strong> course</p>
                        <p><strong>Max 30</strong> Q&A's</p>
                        <p>90 days archive</p>
                        <p>Ads</p>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <span class="btn btn-primary px-4">REGISTER</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="javascript:void(0)" class="block-rounded block-link-shadow block text-center">
                <div class="block-header">
                    <h3 class="block-title">STUDENT +</h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="py-2">
                        <p class="h1 fw-bold mb-2">$49</p>
                        <p class="h6 text-muted">per year</p>
                    </div>
                </div>
                <div class="block-content">
                    <div class="fs-sm py-2">
                        <p><strong>Unlimited courses</strong></p>
                        <p><strong>Unlimited Q&A's</strong></p>
                        <p><strong>Unlimited archive</strong></p>
                        <p><strong>Export summary (PDF,Word)</strong></p>
                        <p><strong>Share your summaries</strong></p>
                        <p><strong>Sell your summaries (*)  <br><span class="text-sm">(in private or public)</span></strong></p>
                        <p><strong>Ad-free</strong></p>
                        <p><strong>Support</strong></p>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <span class="btn btn-primary px-4">UPGRADE</span>
                    <p class="text-muted fs-sm">* In development</p>
                </div>
            </a>
        </div>
        <div class="col-12 text-center">
            <p> <a href="#" class="link">Any questions, suggestions or feedback? Please check our support page</a></p>
        </div>
    </div>
@endsection
