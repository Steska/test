@extends('layouts.app')

@section('title', 'View blog '.$blog->title)

@section('sidebar')
    @parent

@endsection

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <h1>{{$blog->title}}</h1>
    
    <div class="text">
        {{$blog->text}}
        
    </div>
</div>
</nav>    
@endsection

