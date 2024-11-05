<?php

namespace App;

add_action('after_setup_theme', function () {
    sage('blade')->compiler()->directive('d', function ($var) {
        return "<?php d({$var}); ?>";
    });
});
