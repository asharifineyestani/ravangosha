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


        </div>
    </div>
    <!-- end catalog -->

    <!-- subscriptions -->

    <!-- end subscriptions -->

    <!-- plan -->

    <!-- end plan -->

    <!-- videos -->

    <!-- end videos -->

    <!-- footer -->

    <!-- end footer -->
@endsection
