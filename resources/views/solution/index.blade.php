@extends('layout.layout')

@section('title', 'Общая документация')

@section('aside-menu')
    @if($articles)
        @foreach($articles as $article)

            @asidemenu([
                    'route' => 'article.show',
                    'slug' => [$solution->slug, $article->slug],
                    'hasChildren' => $article->hasChildren()
                ])
            {{ $article->name }}
            @endasidemenu
        @endforeach
    @endif
@endsection

@section('content')

    {{ Breadcrumbs::render('solution', $solution) }}

    <div class="content-wrap">

        <h1>Документация по {{ $solution->name }}</h1>
        <div class="content mb40">
            {!! $solution->description !!}
        </div>
    </div>

@endsection
