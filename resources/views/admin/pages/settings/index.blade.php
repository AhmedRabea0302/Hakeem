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
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.site_settings') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{ route('update_settings')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.site_logo') }}</label>
                                <div class="col-md-4">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 340px; height: 170px;">
                                            <img class="omg-responsive center-block" src="{{ url('storage/uploads/images')}}/{{$settings->image_name }}" alt=""> </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                        <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> {{ trans('translate.select_image') }} </span>
                                            <span class="fileinput-exists"> {{ trans('translate.change') }} </span>
                                            <input type="file" name="image_name">
                                        </span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('translate.remove') }} </a>
                                        </div>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End form-group-->

                            <div class="form-group {{ $errors->has('site_name') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">{{ trans('translate.site_name') }}</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="site_name" value="{{ $settings->site_name }}">
                                    <span class="help-block"> {{ $errors->first('site_name') }} </span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('site_url') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">{{ trans('translate.site_url') }}</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="site_url" value="{{ $settings->site_url }}">
                                    <span class="help-block"> {{ $errors->first('site_url') }} </span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('site_name_search') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">{{ trans('translate.site_name_search') }}</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="site_name_search" value="{{ $settings->site_name_search }}">
                                    <span class="help-block"> {{ $errors->first('site_name_search') }} </span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('site_email') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">{{ trans('translate.site_email') }}</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="site_email" value="{{ $settings->site_email }}" >
                                    <span class="help-block"> {{ $errors->first('site_email') }} </span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('site_lang') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">{{ trans('translate.site_lang') }}</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="site_lang" value="{{ $settings->site_lang }}" >
                                    <span class="help-block"> {{ $errors->first('site_lang') }} </span>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">{{ trans('translate.update') }}</button>
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