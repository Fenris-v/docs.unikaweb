@extends('layout.layout')

@section('title', 'Общая документация')

@section('aside-menu')
    @if($menu)
        @php
            $submenu = $submenu ?? [];
        @endphp

        @foreach($menu as $item)
            @php
                $active = stripos(url()->current(), route('article.show', [$solution->slug, $item->slug])) !== false;
            @endphp
            @if($active && !empty($submenu))
                @asidesubmenu([
                        'route' => 'article.show',
                        'slug' => [$solution->slug, $item->slug],
                        'hasChildren' => $item->hasChildren(),
                        'active' => $active,
                        'submenu' => $submenu
                    ])
                {{ $item->name }}
                @endasidesubmenu
            @else
                @asidemenu([
                        'route' => 'article.show',
                        'slug' => [$solution->slug, $item->slug],
                        'hasChildren' => $item->hasChildren(),
                        'active' => $active
                    ])
                {{ $item->name }}
                @endasidemenu
            @endif
        @endforeach
    @endif
@endsection

@section('content')

    @if(isset($article1))
        {{ Breadcrumbs::render('article1', ['solution' => $solution, 'article' => $article, 'article1' => $article1]) }}
    @else
        {{ Breadcrumbs::render('article', ['solution' => $solution, 'article' => $article]) }}
    @endif

    <div class="content-wrap">

        <h1>{{ $article1->name ?? $article->name }}</h1>
        <div class="content mb40">
            {!! $article1->text ?? $article->text !!}
        </div>
    </div>

@endsection
