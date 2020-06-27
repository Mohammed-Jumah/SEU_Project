@extends('layouts.app')

@section('content')


{!! Form::open(['action' => 'PagesController@SendEmail', 'method'=>'POST']) !!}


<div class="form-group">
    {{Form::label('Name')}}

    {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter your name'])}}
</div>
 
<div class="form-group">
    {{Form::label('Email')}}

    {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter your email'])}}
</div>

<div class="form-group">
    {{Form::label('Subject')}}

    {{Form::text('subject', '',['class'=>'form-control','placeholder'=>'Enter your subject'])}}
</div>

<div class="form-group">
    {{Form::label('Body')}}

    {{Form::text('body', '',['class'=>'form-control ','placeholder'=>'Enter your message '])}}
</div>

<div>
    {{Form::submit('Send Email', ['class'=>'bnt btn-primary'])}}
</div>
{!! Form::close() !!}


@endsection
@section('sidebar')
    @parent
  
    @endsection