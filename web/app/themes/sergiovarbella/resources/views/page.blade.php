@extends('layouts.app')

@section('content')
    @while (have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        <div class="container container-narrow">
            @include('partials.content-page')
        </div>
    @endwhile
@endsection
