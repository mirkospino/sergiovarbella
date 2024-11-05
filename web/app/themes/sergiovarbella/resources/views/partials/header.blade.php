<header class="container mt-5 mb-3">
    <div class="row brand text-center mb-3">
        <div class="col-8 col-md-6 col-lg-3 col-xl-2 mx-auto">
            <div class="logo">
                <a href="{{ home_url('/') }}">
                    <img src="@asset('images/logo.jpg')" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu($primarymenu) !!}
        @endif
    </nav>
</header>
