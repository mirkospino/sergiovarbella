<footer class="mb-5">
    <div class="container-narrow mx-auto text-center border-top">
        <div class="my-5">
            @if (has_nav_menu('footer_navigation'))
                {!! wp_nav_menu($footermenu) !!}
            @endif
        </div>
        All content © sergio varbella<br>
        <a href="/cookie-policy">cookie policy</a> |  <a href="/privacy-policy">privacy policy</a>
    </div>
</footer>
