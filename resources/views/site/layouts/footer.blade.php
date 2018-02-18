<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">

                <img src="{{asset('assets/site/img')}}/{{$footer->image_name}}" class="img-responsive">
                <form class="form" method="post" action="{{ route('become_partner') }}">
                    {{ csrf_field() }}
                    <h3>{{ $footer->getDetails()->where('lang', app()->getLocale())->first()->title }}</h3>
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
                    <button type="submit" name="footer_form" class="submit-btn">{{ trans('translate.submit') }}</button>
                </form><!-- End Form -->
            </div><!-- End col-md-6 -->
            <div class="clearfix hidden-lg hidden-md hidden-sm"></div>
            <div class="col-md-2 col-sm-6">
                <ul class="site-map">
                    <li>
                        <a href="{{ route('site_home') }}">{{ trans('translate.become_partner') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('partner') }}">{{ trans('translate.careers') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site_home') }}">{{ trans('translate.list_practice') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site_home') }}">{{ trans('translate.privacy_policy') }}</a>
                    </li>
                </ul><!-- End Site-Map -->
            </div><!-- End col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <ul class="social text-center">
                    <li>
                        <a href="{{ $social_links->facebook }}">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social_links->twitter }}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social_links->instagram }}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social_links->linkedin }}">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul><!-- End Social -->
                <div class="clearfix"></div>
                <a href="{{ route('site_home') }}" class="play-store">
                    <i class="fa fa-android"></i>
                    {{ trans('translate.play_store') }}
                </a><!-- End Play-Store -->
            </div><!-- End col-md-3 -->

            <div class="col-sm-12">
                <div class="copy-right">
                    {{ trans('translate.copy_rights') }}
                </div><!-- End Copy-Right -->
            </div><!-- End col-md-12 -->
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End Footer -->