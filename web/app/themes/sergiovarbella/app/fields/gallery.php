<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$group = new FieldsBuilder('gallery');
$group
    ->setLocation('post_type', '==', 'post');
$group
    ->addTrueFalse('no_gallery', [
        'label' => 'Gallery',
        'instructions' => 'Metti le immagini impaginate in vertiale invece che fare una Gallery',
    ])
    ->addGallery('gallery', [
        'label' => 'Gallery',
        'instructions' => 'Inserire immagini aggiuntive',
        'return_format' => 'array',
        'min' => '0',
        'max' => '999',
        'insert' => 'append',
        'library' => 'all',
        'min_width' => '600',
        'min_height' => '600',
        'max_width' => '3000',
        'max_height' => '3000',
        'mime_types' => 'jpg, png, gif',
    ]);

return $group;
