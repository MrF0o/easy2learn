@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="row text-center overflow-hidden d-flex justify-content-center align-content-center">
            <p class="h2">How does it work?</p>
            <div class="row mb-5">
                <div class="p-0 col-md-6 d-flex justify-content-end align-items-center">
                    <div class="d-flex bg-lightgray w-100 w-md-auto mb-md-0 mb-2">
                        <div
                            class="bg-primary square d-flex justify-content-center h2 p-0 m-0 text-white align-items-center">
                            <span>1</span>
                        </div>
                        <p class="m-0 px-5 fw-bold">Collect your questions and <br>
                            answers while studying</p>
                    </div>
                </div>
                <div class="p-0 m-0 col-md-6 d-flex justify-content-start align-items-center">
                    <img class="w-md-50 w-100 border rounded border-3" src="{{ asset('media/photos/books.jpeg') }}"
                        alt="books collected using easy2learn">
                </div>
            </div>
            <div class="row mb-5 flex flex-row-reverse">
                <div class="p-0 col-md-6 d-flex flex-col-reverse justify-content-start align-items-center p-0">
                    <div class="d-flex bg-lightgray w-100 w-md-auto mb-md-0 mb-2 justify-content-between">
                        <p class="px-5 m-0 fw-bold">Start examing yourself and double <br>
                            check if you know the course</p>
                        <div
                            class="bg-primary square d-flex justify-content-center h2 p-0 m-0 text-white align-items-center">
                            <span class="">2</span>
                        </div>
                    </div>
                </div>
                <div class="p-0 col-md-6 d-flex justify-content-end align-items-center">
                    <img class="w-md-50 w-100 border rounded border-3" src="{{ asset('media/photos/woman-with-laptop.jpeg') }}"
                        alt="a woman studying using easy2learn via a laptop">
                </div>
            </div>
            <div class="row mb-5">
                <div class="p-0 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                    <div class="d-flex bg-lightgray w-100 w-md-auto mb-md-0 mb-2">
                        <div
                            class="bg-primary h2 p-0 m-0 square d-flex justify-content-center text-white align-items-center">
                            <span>3</span>
                        </div>
                        <p class="px-5 m-0 fw-bold">Share or sell your summary in <br>
                            private or public</p>
                    </div>
                </div>
                <div class="p-0 col-md-6 d-flex justify-content-start align-items-center">
                    <img class="w-md-50 w-100 border rounded border-3" src="{{ asset('media/photos/coins.jpeg') }}" alt="money earned with easy to learn">
                </div>
            </div>
        </div>
    </div>
@endsection
