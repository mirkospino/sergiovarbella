<article @php post_class() @endphp>
    <h1 class="post-title text-uppercase text-center">
        {!! get_the_title() !!}
    </h1>
    <div class="container-narrow mx-auto">
        <div class="post-content mb-3">
            @php the_content() @endphp
        </div>
    </div>
    @include('partials.content-single-gallery')
    <div class="container-narrow mx-auto">
        @if ($tags)
            <div class="tags mb-5 text-center">
                @foreach ($tags as $tag)
                    <a href="/tag/{{ $tag->slug }}">
                        #{{ $tag->name }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</article>
@include('partials.content-single-gallery-modal')
