<?php
use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;


Container::make('post_meta', 'ueberuns')
    ->show_on_template('template-parts/content-ueberuns.php')
    ->add_fields(array(
        Field::make('text', 'crb_ueberuns_title', 'title'),
        Field::make('textarea', 'crb_ueberuns_text_01', 'text_teil01'),
        Field::make('textarea', 'crb_ueberuns_text_02', 'text_teil02'),
    ));
