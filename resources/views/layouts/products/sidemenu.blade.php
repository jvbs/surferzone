<div class="col-md-3">
    <div class="row">
        <div class="category bg-color">
            <div>
                <h4>CATEGORIAS</h4>
                <ul>
                    @foreach ($data['categories'] as $category)
                        @if (Request::segment(2) == $category->id && Request::segment(3) == 'categoria')
                            <li class="active"><a href="{{ route('show.search.category', $category->id) }}">{{ $category->name }}</a></li>
                        @else
                            <li><a href="{{ route('show.search.category', $category->id) }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
                <div class="size-category" style="margin-top: 30px">
                    <h4>MARCAS</h4>
                    <ul>
                        @foreach ($data['brands'] as $brand)
                            @if (Request::segment(2) == $brand->id && Request::segment(3) == 'marca')
                                <li class="active"><a href="{{ route('show.search.brand', $brand->id) }}">{{ $brand->name }}</a></li>
                            @else
                                <li><a href="{{ route('show.search.brand', $brand->id) }}">{{ $brand->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
