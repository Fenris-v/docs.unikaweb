@extends('layout.layout')

@section('title', 'Общая документация')

@section('aside-menu')
    @if(isset($solutions))
        @foreach($solutions as $solution)
            @asidemenu(['route' => 'solution.show', 'slug' => $solution->slug])
            {{ $solution->name }}
            @endasidemenu
        @endforeach
    @endif
@endsection

@section('content')

    {{ Breadcrumbs::render('home') }}

    <div class="content-wrap">

        <h1>Общая документация</h1>
        <div class="content mb40">
            <p>На сайте собрана документация, подходящая для большинства готовых решений.</p>
            <p>Документация разбита по тематическим категориям.</p>
        </div>
    </div>

@endsection
