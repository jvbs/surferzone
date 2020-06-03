<div class="topcontent">
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Início</a></li>
            <li><a href="{{ route('show') }}">Produtos</a></li>
            <li><a href="{{ route('show.product.detail', $data->id) }}">@yield('title') </a></li>
        </ul>
    </div>
</div>
