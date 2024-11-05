<?php
namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;
$group = new FieldsBuilder('homepage');
$group
    ->setLocation('post_type', '==',  'post');
$group
    ->addTrueFalse('homepage', [
        'label' => 'Homepage',
        'instructions' => 'Spuntare questa opzione per pubblicare il post in Homepage. La pubblicazione seguirà comunque in ordine di data',
    ]);
return $group;
