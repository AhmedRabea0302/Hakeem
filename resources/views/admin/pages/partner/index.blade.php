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
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{ trans('translate.become_partner_message') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <h2 style="padding: 15px;">{{ trans('translate.doctors_w_partners') }}</h2>
                    <table class="table-bordered" style="padding: 15px; text-align: center" width="100%">
                        <tr>
                            <th>{{ trans('translate.name') }}</th>
                            <th>{{ trans('translate.email') }}</th>
                            <th>{{ trans('translate.speciality') }}</th>
                            <th>{{ trans('translate.phone_num') }}</th>
                            <th>{{ trans('translate.delete') }}</th>
                            <th>{{ trans('translate.reply') }}</th>
                        </tr>

                        @foreach($partner_messages as $partner_message)
                            <tr>
                                <td>{{ $partner_message->full_name }}</td>
                                <td>{{ $partner_message->email }}</td>
                                <td>{{ $partner_message->speciality }}</td>
                                <td>{{ $partner_message->phone_num }}</td>
                                <td><a href="{{route('send_reply_to_partner', ['id' => $partner_message->id])}}" class="btn btn-info">{{ trans('translate.reply') }}</a></td>
                                <td><a href="{{ route('delete_message_partner', ['id' => $partner_message->id]) }}" class="btn btn-danger">{{ trans('translate.delete') }}</a></td>
                            </tr>
                        @endforeach

                    </table>
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->
@stop