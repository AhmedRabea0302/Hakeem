@extends('admin.layouts.master')
@section('content')
    <style>
        table th, td {
            padding: 15px;
            text-align: center;
        }
    </style>
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
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.join_career') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <h2 style="padding: 15px;">{{ trans('translate.people_start_career') }}</h2>
                    <table class="table-bordered" style="padding: 15px; text-align: center" width="100%">
                        <tr>
                            <th>{{ trans('translate.name') }}</th>
                            <th>{{ trans('translate.phone_or_mail') }}</th>
                            <th>{{ trans('translate.delete') }}</th>
                            <th>{{ trans('translate.reply') }}</th>
                        </tr>

                        @foreach($career_messages as $career_message)
                            <tr>
                                <td>{{ $career_message->name }}</td>
                                <td>{{ ($career_message->email) ? $career_message->email : $career_message->number }}</td>
                                <td><a href="{{($career_message->email) ? route('send_reply_to_partner', ['id' => $career_message->id]) : route('send_sms_to_partner', ['id' => $career_message->id])}}" class="btn btn-info">{{ trans('translate.reply') }}</a></td>
                                <td><a href="{{ route('delete_message',['id'=>$career_message->id]) }}" class="btn btn-danger">{{ trans('translate.delete') }}</a></td>
                            </tr>
                        @endforeach

                    </table>
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->
@stop