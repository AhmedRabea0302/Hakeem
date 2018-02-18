@extends('site.layouts.master')
<div class="home">
@section('content')
        <div class="page-content">
            <div class="home-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            @if(Session::has('m'))
                                <br/>
                                <?php $a = []; $a = session()->pull('m'); ?>
                                <div class="alert alert-{{$a[0]}}">
                                    {{$a[1]}}
                                </div>
                            @endif
                            <form method="post" action="{{ route('send_gather') }}" class="form">
                                {{ csrf_field() }}
                                <h2>{{ $home_details->getDetails()->where('lang', app()->getLocale())->first()->title }}</h2>
                                <div class="form-group">
                                    <label>{{ trans('translate.hi') }}</label>
                                    <input type="text" name="full_name" placeholder="{{ trans('translate.name') }}">
                                </div>
                                <div class="form-group">
                                    <label>, {{ trans('translate.sent_an_email') }}</label>
                                    <select class="lbl-select">
                                        <option value="1"> {{ trans('translate.email') }}</option>
                                        <option value="2"> {{ trans('translate.sms') }}</option>
                                    </select>

                                </div>
                                <div class="form-group hide div-tel">
                                    <label>{{ trans('translate.at') }} +</label>
                                    <input type="tel" name="phone_code" maxlength="3" class="code-number">
                                    <input type="tel" name="number" placeholder="{{ trans('translate.phone_num') }}">

                                </div>
                                <div class="form-group div-email">
                                    <label>
                                        {{ trans('translate.email') }},
                                    </label>
                                    <input type="email" name="email" placeholder="{{ trans('translate.email') }}" class="">
                                </div>
                                <div class="form-group">
                                    <label>{{ trans('translate.launch') }}</label>
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="submit-btn">{{ trans('translate.get_started') }}</button>
                            </form><!-- End Form -->
                        </div><!-- End col-md-7 -->

                        <div class="col-md-5">
                            <div class="left-img">
                                <img src="{{asset('assets/site/img/')}}/{{$home_details->image_name}}" class="img-responsive">
                            </div>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </div><!-- End Home-Page -->
        </div><!-- End page-content -->
    </div>
@stop