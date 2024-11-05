<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function home_query()
    {
        $args = [
            'post_type' => 'post',
            'meta_query' => [
                [
                    'key' => 'homepage',
                    'value' => true,
                ]
            ]
        ];
        $query = new WP_Query($args);
        wp_reset_postdata();
        return $query;
    }
}
