@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('m'))
                <?php $a = []; $a = session()->pull('m'); ?>
                <div class="alert alert-{{$a[0]}}">
                    {{$a[1]}}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="portlet box green" style="padding: 15px;">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.social_links') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{ route('social_links') }}" method="post" class="form-horizontal" style="padding: 15px;" enctype="multipart/form-data">
                        <div class="form-body">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                                <label class="lead">{{ trans('translate.facebook') }}</label>
                                <input type="text" name="facebook" class="form-control" value="{{$social_links->facebook}}">
                                <span class="help-block"> {{ $errors->first('facebook') }} </span>
                            </div>

                            <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                <label class="lead">{{ trans('translate.twitter') }}</label>
                                <input type="text" name="twitter" class="form-control" value="{{$social_links->twitter}}">
                                <span class="help-block"> {{ $errors->first('twitter') }} </span>
                            </div>

                            <div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
                                <label class="lead">{{ trans('translate.insta') }}</label>
                                <input type="text" name="instagram" class="form-control" value="{{$social_links->instagram}}">
                                <span class="help-block"> {{ $errors->first('instagram') }} </span>
                            </div>

                            <div class="form-group {{ $errors->has('linkedin') ? 'has-error' : '' }}">
                                <label class="lead">{{ trans('translate.linkedin') }}</label>
                                <input type="text" name="linkedin" class="form-control" value="{{$social_links->linkedin}}">
                                <span class="help-block"> {{ $errors->first('linkedin') }} </span>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green"><i class="fa fa-pencil"></i> {{ trans('translate.update') }}</button>
                                    </div>
                                </div>
                            </div>
                        <div>
                    </form>
                    <!-- END FORM-->
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->
@stop
