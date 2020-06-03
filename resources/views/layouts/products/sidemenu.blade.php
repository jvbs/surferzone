<div class="col-md-3">
    <div class="row">
        <div class="category bg-color">
            <div>
                <h4>CATEGORIAS</h4>
                <ul>
                    @foreach ($data['categories'] as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                <div class="size-category" style="margin-top: 30px">
                    <h4>MARCAS</h4>
                    <ul>
                        @foreach ($data['brands'] as $brand)
                            <li><a href="#">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
