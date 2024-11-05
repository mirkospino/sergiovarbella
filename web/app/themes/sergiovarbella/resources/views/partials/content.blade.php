
<article class="post-teaser col-6 col-md-4 col-lg-3 col-xl-2 mb-4">
    <a href="{{ get_permalink() }}">
        <div class="image position-relative">
            <img src="{{ get_the_post_thumbnail_url('', 'thumbnail_square') }}" class="img-fluid image-teaser">
            <div class="overlay position-absolute w-100 h-100 mw-100 mh-100 top-0">
                <div class="overlay-inner bg-secondary h-100">
                    <div class="text-uppercase d-flex flex-column justify-content-center align-items-center h-100 text-center">
                        <div class="post-title">
                            {!! get_the_title() !!}
                        </div>
                        <div class="post-cats">
                            {{ App::post_cats() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>
