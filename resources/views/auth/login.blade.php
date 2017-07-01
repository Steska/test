@extends('layouts.layout')

@section('title', 'Login')

@section('sidebar')
    <a href='/'>Main Page</a>

@endsection

@section('content')
    {!! Form::open(array('route' => 'login', 'class' => 'form', 'method' => 'post')) !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
    {!! Form::password('password', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your password')) !!}
    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection

