<div class="col-md-6">
    <div class="zoom-background">
        <div id="carousel-easyzoom">
            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails ">
                <div class="zoom-fit-image">
                    <a href="{{ asset('storage/img/products/' . $data->img) }}">
                        <img src="{{ asset('storage/img/products/' . $data->img) }}" alt="{{ $data->name }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- <nav class="navigation easyzoom-item-navigation">
        <ul>
            <li class="prevnav"><a class="prev-slide ion-ios-arrow-left"></a></li>
            <li class="nextnav"><a class="next-slide ion-ios-arrow-right"></a></li>
        </ul>
    </nav> --}}
</div>
