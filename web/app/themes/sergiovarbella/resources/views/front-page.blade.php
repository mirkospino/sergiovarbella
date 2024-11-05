@extends('layouts.app')
@section('content')
    <div class="row">
        @while ($home_query->have_posts())
            @php $home_query->the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile
    </div>
@endsection
