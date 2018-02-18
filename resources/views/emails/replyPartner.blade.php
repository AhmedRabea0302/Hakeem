@extends('admin.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <h2 class="text-center">Add Your Reply</h2>

                @if(Session::has('m'))
                    <?php $a=[]; $a = session()->pull('m'); ?>
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
                <form action="{{ $emails->email ? route('send_mail') : route('send_sms')  }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Email To:</label>
                        <input type="text" value="{{$emails->email}}" name="user_email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Message:</label>
                        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input type="submit" class="btn btn-info" value="Reply">
                </form>
            </div>
        </div>
    </div>
@stop