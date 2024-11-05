@if ($gallery)
    @if (count($gallery) == 1 || get_field('no_gallery') == true)
        <div class="container-narrow mx-auto mb-5">
            @foreach ($gallery as $key => $gallery_img)
                <div class="mb-3 text-center">
                    <img src="{{ $gallery[$key]['full'][0] }}" class="img-fluid mb-1">
                    @if ($gallery[$key]['caption'])
                        {{ $gallery[$key]['caption'] }}
                    @endif
                </div>
            @endforeach
        </div>
    @elseif (count($gallery) == 2)
        <div class="container-narrow mx-auto mb-5">
            <div class="row">
                @foreach ($gallery as $key => $gallery_img)
                    <div class="col-12 col-md-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal{{ $key }}">
                            <img src="{{ $gallery_img['thumb'][0] }}" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @elseif (count($gallery) == 3)
        <div class="container mb-5">
            <div class="row">
                @foreach ($gallery as $key => $gallery_img)
                    <div class="col-12 col-md-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal{{ $key }}">
                            <img src="{{ $gallery_img['thumb'][0] }}" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @elseif (count($gallery) > 3)
        <div class="container mb-5">
            <div class="splide mb-5">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($gallery as $key => $gallery_img)
                            <li class="splide__slide">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal{{ $key }}">
                                    <img src="{{ $gallery_img['thumb'][0] }}" class="img-fluid">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endif
