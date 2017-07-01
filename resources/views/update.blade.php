@extends('layouts.app')

@section('title', 'add')

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
    {!! Form::open(array('route' => 'update', 'class' => 'form', 'method' => 'put')) !!}
    {!! Form::text('title', $blog->title, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your title')) !!}
    {!! Form::textarea('text', $blog->text, 
        array('required', 
              'class'=>'form-control')) !!}
    {!! Form::hidden('id', $blog->id, 
        array('required', 
              'class'=>'form-control')) !!}
    
    {!! Form::submit() !!}
    {!! Form::close() !!}
    
</div>
</nav>    
@endsection


