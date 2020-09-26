@extends('layout.layout')

@section('title', 'Общая документация')

@section('aside-menu')
    @if(isset($solutions))
        @each('layout.aside-list', $solutions, 'solution')
    @endif
@endsection

@section('content')

    <div class="content-wrap">
        <h1>Общая документация</h1>
        <div class="content mb40">
            <p>На сайте собрана документация, подходящая для большинства готовых решений.</p>
            <p>Документация разбита по тематическим категориям.</p>
        </div>
    </div>

@endsection
