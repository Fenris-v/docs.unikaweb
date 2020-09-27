@php
    $hasChildren = $hasChildren ?? true;
    $active = $active ?? false;
@endphp
<li class="{{ $hasChildren ? '' : 'no-children' }} {{ $active ? 'active' : '' }}">
    <a href="{{ route($route, $slug) }}">{{ $slot }}</a>
</li>
