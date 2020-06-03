<div class="topcontent">
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Início</a></li>
            <li><a href="{{ route('show') }}">@yield('title')</a></li>
            @if(Request::segment(3) == 'categoria')
                <li><a href="{{ route('show.search.category', $data['currentCategory']->id) }}">{{ $data['currentCategory']->name }}</a></li>
            @endif
            @if(Request::segment(3) == 'marca')
                <li><a href="{{ route('show.search.brand', $data['currentBrand']->id) }}">{{ $data['currentBrand']->name }}</a></li>
            @endif
        </ul>
    </div>
</div>
