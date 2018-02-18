@extends('site.layouts.master')
<div class="page-content">

@section('content')
        <div class="container">
            <div class="get-start">
                <form class="form" method="post" action="{{ route('become_partner') }}">
                    {{ csrf_field() }}
                    <h2 class="text-center">{{$partner->getDetails()->where('lang', app()->getLocale())->first()->title}}</h2>
                    <h3>{{ $partner->getDetails()->where('lang', app()->getLocale())->first()->paragraph }}</h3>
                    @if(Session::has('m'))
                        <?php $a = []; $a = session()->pull('m'); ?>
                        <div class="alert alert-{{$a[0]}}">
                            {{$a[1]}}
                        </div>
                    @endif
                    <div class="form-group {{ $errors->has('full_name') ? 'has-error' : ''}}">
                        <label>{{ trans('translate.full_name') }}</label>
                        <input type="text" name="full_name" placeholder="{{ trans('translate.full_name') }}">
                        @if($errors->has('full_name'))
                            <span class="help-block"> {{ $errors->first('full_name') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('speciality') ? 'has-error' : ''}}">
                        <label>{{ trans('translate.speciality') }}</label>
                        <input type="text" name="speciality" placeholder="{{ trans('translate.speciality') }}">
                        @if($errors->has('speciality'))
                            <span class="help-block"> {{ $errors->first('speciality') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label>{{ trans('translate.email') }}</label>
                        <input type="email" name="email" placeholder="{{ trans('translate.email') }}">
                        @if($errors->has('email'))
                            <span class="help-block"> {{ $errors->first('email') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone_num') ? 'has-error' : ''}}">
                        <label>{{ trans('translate.phone_num') }}</label>
                        <input type="tel" name="phone_num" placeholder="{{ trans('translate.phone_num') }}">
                        @if($errors->has('phone_num'))
                            <span class="help-block"> {{ $errors->first('phone_num') }} </span>
                        @endif
                    </div>
                    <button type="submit" name="home_form" class="submit-btn">{{ trans('translate.get_started') }}</button>
                </form><!-- End Form -->
            </div><!-- End Get-Start -->
        </div><!-- End conrainer -->
    </div><!-- End Page-Content -->
@stop