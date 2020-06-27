

@extends('layouts.app')

@section('content')




{!! Form::open(['url' => 'newrequest/submit']) !!}



<div class="form-group">
    {{Form::label('to', 'To')}}

    {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Reciver'])}}
</div>
 
<div class="form-group">
    {{Form::label('title', 'Title')}}

    {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Message Title'])}}
</div>
 




<div class="form-group">
     {{Form::label('message', 'Message')}}

     {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter your Message '])}}
</div>

<div>
    {{Form::submit('Submit', ['class'=>'bnt btn-primary'])}}
</div>
{!! Form::close() !!}


@endsection

@section('sidebar')
@parent
<h3>This page contains all the messages recived.<br>
  Admin can read or delete.<h3>
  <div class="sidebar">
    <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175">
  </div>@endsection