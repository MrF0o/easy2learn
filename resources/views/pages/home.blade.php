@extends('layouts.main')

@section('content')
    <div class="content">
        <h1 class="display-5 text-center">Learn 30% FASTER</h1>
        <p class="h5 text-center">with the E2L strategy</p>
        <div class="text-center mb-5">
            <button class="btn btn-secondary play-btn text-center" data-bs-toggle="modal" data-bs-target="#video-modal">
                <i class="fa-solid fa-play"></i>
            </button>
        </div>
        <p class="h4 text-center">Try out the DEMO here below</p>

        <div class="row justify-content-center pt-5">
            <div class="col-lg-7 col-xl-6 col-md-10">
                @include('inc.product')
            </div>
        </div>
    </div>

    <div class="modal modal-lg" id="video-modal" tabindex="-1" aria-labelledby="filter-modal" style="display: none"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="block-rounded block-transparent block mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                        </h3>
                        <div class="block-options space-x-1">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body block-content fs-sm" style="height: 50vh;">
                        <div class="embed-responsive h-100 w-100">

                            <iframe class="embed-responsive-item" height="100%" width="100%" src="https://www.youtube.com/embed/j-u_-R3PHlk"></iframe>
                        </div>
                    </div>

                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/j-u_-R3PHlk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
@endsection
