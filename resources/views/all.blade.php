@extends('layouts.app')

@section('title', 'All Blogs')

@section('sidebar')
    @parent

@endsection

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <h1>All blogs</h1>
    @foreach ($blogs as $blog)
    <li onclick="location.href = 'blog/{{$blog->id}}'" class='list-group-item'>{{ $blog->title }}
    @if (Auth::check())
        <a class='glyphicon glyphicon-pencil badge' href='/edit/{{$blog->id}}'> </a>
        
    @endif
    </li>                    
@endforeach
    @if (Auth::check())
    <a href='/add'>Добавить</a>
    @endif
</div>
</nav>
@endsection