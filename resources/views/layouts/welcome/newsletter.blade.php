<section id="divider-b">
    <div class="section-background bg" style="
        background-image: url({{ asset('img/divider-b.jpg') }});
        height: 240px;">
        <div class="divider-overlay">
            <form class="input-group style-input-group" enctype="multipart/form-data" action="{{ route('assign.newsletter') }}" method="POST">
                @csrf
                <input
                    class="placeholder  @error('name') is-invalid @enderror"
                    name="email"
                    type="text"
                    placeholder="Assine nossa newsletter"
                    value="{{ old('email') }}"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <span class="newsletter-input">
                    <button class="newsletter-input-i" type="submit">
                        <i class="fa fa-envelope"></i>
                    </button>
                </span>
            </form>
        </div>
    </div>
</section>
