@extends('layouts.app')
@section('content')
    <div class="row">
        @while (have_posts())
            @php the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile
    </div>
@endsection
