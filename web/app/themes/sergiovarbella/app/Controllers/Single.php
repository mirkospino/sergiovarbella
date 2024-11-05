<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function gallery()
    {
        $gallery = get_field('gallery');
        if ($gallery) {
            $gallery_ids = [];
            foreach ($gallery as $id) {
                $gallery_ids[$id['ID']]['caption'] = $id['caption'];
                $gallery_ids[$id['ID']]['thumb'] = wp_get_attachment_image_src($id['ID'], 'thumbnail_square');
                $gallery_ids[$id['ID']]['full'] = wp_get_attachment_image_src($id['ID'], 'full');
                $gallery_ids[$id['ID']]['title']  = get_the_title($id['ID']);
            }
            return $gallery_ids;
        }
    }
    public function tags()
    {
        $tags = get_the_tags();
        return $tags;
    }
}
