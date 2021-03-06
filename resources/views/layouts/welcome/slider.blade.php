<section id="slider">
    <nav class="nav-imgbar flex-prev">
        <div class="custom-navigation">
            <a class="prev slider-height">
                <span class="icon-wrap"><i class="ion-ios-arrow-thin-left"></i></span>
            </a>
            <a class="next slider-height flex-next">
                <span class="icon-wrap"><i class="ion-ios-arrow-thin-right"></i></span>
            </a>
        </div>
    </nav>
    <div class="flexslider">
        <ul class="slides">
            <li class="slider-height">
                <a href="{{ route('show') }}">
                    <div class="section-background bg" style="background-image: url({{ asset('img/slider-1.jpg') }});">
                        <div class="slider-overlay">
                            <div class="slider-box">
                                <div class="slider-title">OFERTAS</div>
                                {{-- <div class="slider-subtitle">CONFIRA</div> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
