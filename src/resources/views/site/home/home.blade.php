@extends('layout.site')


@section('content')

                @include('site.home.slider')
                @include('site.home.service')
                   @include('site.home.call')
                    @include('site.home.portfolio')
                        @include('site.home.features')
                @include('site.home.recipes')
                @include('site.home.testimonial')
                @include('site.home.pricing')

               @endsection