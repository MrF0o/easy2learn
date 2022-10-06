@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="row overflow-hidden d-flex justify-content-center align-content-center">
            <p class="h2 text-center">How does it work?</p>

            <div class="col-md-12 col-xl-8 my-4">
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <div class="col-12 col-lg-6 p-0 m-0 flex-md-shrink-0 flex-shrink-1">
                            <div class="d-flex bg-lightergray mb-lg-0 mb-2">
                                <div
                                    class="bg-primary square d-flex justify-content-center h2 p-0 m-0 text-white align-items-center">
                                    <span>1</span>
                                </div>
                                <p class="m-0 px-lg-5 px-md-3 px-1 py-1 py-lg-2 fw-bold w-100">Collect your questions and <br
                                        class="hidden-xs-down">
                                    answers while studying</p>
                            </div>
                        </div>
                        <div class="p-0 m-0 col-lg-5 image-box flex-shrink-0">
                            <img class="h-100 rounded border border-secondary border-4"
                                src="{{ asset('media/photos/books.jpeg') }}" alt="books collected using easy2learn">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8 my-4">
                <div class="row">
                    <div class="d-flex flex-row-reverse justify-content-center align-items-center flex-wrap">
                        <div class="col-12 col-lg-6 p-0 m-0 flex-md-shrink-0 flex-shrink-1 ">
                            <div class="d-flex flex-row-reverse bg-lightergray mb-lg-0 mb-2">
                                <div
                                    class="bg-primary square d-flex justify-content-center h2 p-0 m-0 text-white align-items-center">
                                    <span>2</span>
                                </div>
                                <p class="px-lg-5 px-md-3 px-1 py-1 py-lg-2 m-0 fw-bold w-100">Start examing yourself and
                                    double <br class="hidden-xs-down">
                                    check if you know the course</p>
                            </div>
                        </div>
                        <div class="p-0 m-0 col-lg-5 image-box flex-shrink-0">
                            <img class="h-100 rounded border border-secondary border-4"
                                src="{{ asset('media/photos/woman-with-laptop.jpeg') }}"
                                alt="a woman studying using easy2learn via a laptop">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8 my-4">
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center flex-wrap text-left">
                        <div class="col-12 col-lg-6 p-0 m-0 flex-md-shrink-0 flex-shrink-1">
                            <div class="d-flex bg-lightergray w-100 w-lg-auto mb-lg-0 mb-2">
                                <div
                                    class="bg-primary square d-flex justify-content-center h2 p-0 m-0 text-white align-items-center">
                                    <span>3</span>
                                </div>
                                <p class="px-lg-5 px-md-3 px-1 py-1 py-lg-2 m-0 fw-bold">Share or sell your summary in <br
                                        class="hidden-xs-down">
                                    private or public</p>
                            </div>
                        </div>
                        <div class="p-0 m-0 col-lg-5 image-box flex-shrink-0">
                            <img class="h-100 rounded border border-secondary border-4"
                                src="{{ asset('media/photos/coins.jpeg') }}" alt="money earned with easy to learn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
