@extends('layouts.master')
@section('content')
    <!-- header (relative style) -->

    <!-- end header -->

    <!-- home -->
    {{--    @include('sections.articles')--}}
    <!-- end home -->

    <!-- catalog -->
    <div class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('sections.books_header')

                    @include('sections.books')
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button class="catalog__more" type="button">نمایش همه</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end catalog -->

    <!-- subscriptions -->
    @include('sections.abridged')
    <!-- end subscriptions -->

    <!-- plan -->

    <!-- end plan -->

    <!-- videos -->
    @include('sections.videos')
    <!-- end videos -->

    <!-- footer -->

    <!-- end footer -->
@endsection
