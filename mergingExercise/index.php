<?php
    $default_values = [];
    $default_values['title'] = null;
    $default_values['year'] = null;
    $default_values['plot'] = null;
    $default_values['duration'] = null;

    $movie['title'] = 'Tenet';
    $movie['year'] = 2020;
    $movie['rating'] = 7.5;
    $movie['duration'] = 150; 

    $movie = array_merge($default_values, $movie);

?>