@extends('admin.layouts.master')
@section('content')
    <style>
        table th, td {
            padding: 15px;
            text-align: center;
        }
    </style>
    <div class="row">
        <div class="col-md-12" >
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
            <div class="portlet box green" style="padding: 15px">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.add_users') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form" >
                    <h2 style="padding: 15px;">{{ trans('translate.add_user') }}</h2>
                    <form action="{{route('add_user')}}" method="post" style="padding: 15px;">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>{{ trans('translate.user_name') }}</label>
                            <input type="text" name="user_name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>{{ trans('translate.user_email') }}</label>
                            <input type="email" name="email" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>{{ trans('translate.user_pass') }}</label>
                            <input type="password" name="user_pass" class="form-control" />
                        </div>

                        <input type="submit" value="{{ trans('translate.add_user') }}" class="btn btn-success">
                    </form>
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->

    <div class="row">
        <div class="col-md-12">

            <div class="portlet box green" style="padding: 15px;">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.all_users') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <div action="" method="post" class="form-horizontal" style="padding: 15px;" enctype="multipart/form-data">
                        <div class="form-body">
                            {{ csrf_field() }}
                            <h2>{{ trans('translate.all_users') }}</h2>
                            <table class="table table-bordered">
                                <tr>
                                    <th>{{ trans('translate.user_name') }}</th>
                                    <th>{{ trans('translate.user_email') }}</th>
                                    <th>{{ trans('translate.new_pass') }}</th>
                                    <th>{{ trans('translate.update') }}</th>
                                    <th>{{ trans('translate.delete') }}</th>
                                </tr>

                                @foreach($users as $user)
                                    <tr>
                                        <form action="{{route('update_user')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id" value="{{$user->id}}" />
                                            <td>
                                                <input type="text" name="new_name" class="form-control" value="{{$user->name}}" />
                                            </td>
                                            <td><input type="text" name="new_email" class="form-control" value="{{$user->email}}" /></td>
                                            <td><input type="password" name="new_password" class="form-control" /></td>
                                            <td><input class="btn btn-info" type="submit" value="{{ trans('translate.update') }}"></td>
                                        </form>
                                        <form action="{{route('delete_user')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id_d" value="{{$user->id}}" />
                                            <td><input type="submit" class="btn btn-danger" value="{{ trans('translate.delete') }}"></td>
                                        </form>

                                    </tr>
                                @endforeach
                            </table>
                        <div>
                    </div>
                    <!-- END FORM-->
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->

@stop