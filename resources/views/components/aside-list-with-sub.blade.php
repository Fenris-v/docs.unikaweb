@php
    $hasChildren = $hasChildren ?? true;
    $active = $active ?? false;
@endphp
<li class="{{ $hasChildren ? '' : 'no-children' }} {{ $active ? 'active' : '' }}">
    <a href="{{ route($route, $slug) }}">{{ $slot }}</a>
    <ul class="submenu">
        @foreach($submenu as $item)
            @php
                $arrSlugs = $slug;
                $arrSlugs[] = $item->slug;
                $active = url()->current() === route($route, $arrSlugs);
            @endphp
            <li class="{{ $active ? 'active' : 'false' }}">
                <a href="{{ route($route, $arrSlugs) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
</li>
