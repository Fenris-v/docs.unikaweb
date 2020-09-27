<?php

// HOME
Breadcrumbs::for(
    'home',
    function ($trail) {
        $trail->push('Главная', route('solution.index'));
    }
);

// Решение
Breadcrumbs::for(
    'solution',
    function ($trail, $solution) {
        $trail->parent('home');
        $trail->push($solution->name, route('solution.show', $solution->getRouteKey()));
    }
);

// Статья
Breadcrumbs::for(
    'article',
    function ($trail, $list) {
        $trail->parent('solution', $list['solution']);
        $trail->push(
            $list['article']->name,
            route('article.show', [$list['solution']->getRouteKey(), $list['article']->getRouteKey()])
        );
    }
);

// Вложенная статья
Breadcrumbs::for(
    'article1',
    function ($trail, $list) {
        $trail->parent('article', ['solution' => $list['solution'], 'article' => $list['article']]);
        $trail->push(
            $list['article1']->name,
            route('article.show', [$list['article']->getRouteKey(), $list['article1']->getRouteKey()])
        );
    }
);
