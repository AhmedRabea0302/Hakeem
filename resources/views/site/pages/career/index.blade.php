@extends('site.layouts.master')
    <div class="page-content">
        @section('content')
        <div class="career-page">
            <div class="container">
                <div class="career">
                    <img src="{{asset('assets/site/img')}}/{{ $career->image_name }}" class="img-responsive">
                    <div class="info">
                        <h2>{{ $career->getDetails()->where('lang', app()->getLocale())->first()->title }}</h2>
                        <h3>{{ $career->getDetails()->where('lang', app()->getLocale())->first()->paragraph }}</h3>
                        <p>
                            {{ trans('translate.resume') }}
                            <a href="#">career@hakeem.co</a>
                        </p>
                    </div>
                </div><!-- End Get-Start -->
            </div><!-- End conrainer -->
        </div><!-- End Career-Page -->
    </div><!-- End Page-Content -->
@stop