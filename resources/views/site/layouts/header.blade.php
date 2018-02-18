
<header class="header @if(Request::route()->getName() == 'site_home') header-1 @endif">
    <div class="container">
        <a href="{{ route('site_home') }}" class="logo">
            <img src="{{asset('assets/site/img')}}/{{$settings->image_name}}" class="img-responsive">
        </a><!-- End Logo -->
        <div class="left-btn">
            <a href="{{ route('join_to_career') }}" class="btn">{{ trans('translate.join_to_career') }}</a>
            <a href="{{ route('partner') }}" class="btn active-btn">{{ trans('translate.become_a_partner') }}</a>
            @if(app()->getLocale() == 'en')<a href="{{ route('site_langa', ['locale' => 'ar']) }}" class="btn active-btn">{{ trans('translate.arabic') }}</a> @endif
            @if(app()->getLocale() == 'ar')<a href="{{ route('site_langa', ['locale' => 'en']) }}" class="btn active-btn">{{ trans('translate.english') }}</a> @endif
        </div><!-- End Left-Btn -->
        <div class="clearfix"></div>
    </div><!-- End container -->
</header><!--End Header -->