@extends('layouts.app')

@section('title', 'add')

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
    {!! Form::open(array('route' => 'add', 'class' => 'form', 'method' => 'post')) !!}
    {!! Form::text('title', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your title')) !!}
    {!! Form::textarea('text', null, 
        array('required', 
              'class'=>'form-control')) !!}
    {!! Form::submit() !!}
    {!! Form::close() !!}
</div>
</nav>    
@endsection

