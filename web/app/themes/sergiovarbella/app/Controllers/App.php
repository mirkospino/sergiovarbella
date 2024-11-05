<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }
    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public static function post_cats()
    {

        $post_cats = get_the_category($post);
        $categories = '';
        $i = 0;
        foreach ($post_cats as $post_cat) {
            if ($i > 0) {
                $categories .= ' / ';
            }
            $categories .= $post_cat->name;
            $i++;
        };
        return $categories;
    }
    public function primarymenu()
    {
        $args = [
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav'
        ];
        return $args;
    }
    public function footermenu()
    {
        $args = [
            'theme_location' => 'footer_navigation',
            'menu_class' => 'nav'
        ];
        return $args;
    }
    public function lorem_ipsum()
    {
        return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    }
}
