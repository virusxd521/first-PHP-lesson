<?php 

    $movies = [
        [
            'title' => 'Dunkerk',
            'year' => 2017,
            'pg' => 13,
            'favourite' => false
        ],
        [
            'title' => 'Tenet',
            'year' => 2020,
            'pg' => 13
        ],
        [
            'title' => 'Interstellar',
            'year' => 2014,
            'pg' => 13,
            'favourite' => false
        ],
        [
            'title' => 'Inception',
            'year' => 2010,
            'pg' => 13,
            'favourite' => true
        ],
        [
            'title' => 'The Prestige',
            'year' => 2006,
            'pg' => 13
        ],
        [
            'title' => 'Batman begins',
            'year' => 2005,
            'pg' => 12,
            'favourite' => true
        ],
        [
            'title' => 'The Dark Knight',
            'year' => 2008,
            'pg' => 12,
            'favourite' => true
        ],
        [
            'title' => 'The Dark Knight Rises',
            'year' => 2012,
            'pg' => 12,
            'favourite' => false
        ],
    ];


    $favourite_movies = [];

    foreach($movies as $key => $value){
        if(!empty($movies[$key]['favourite'])){
            array_push($favourite_movies, $movies[$key]['title']);
            // echo '<p>' . $movies[$key]['title'] . '</p>';
        };
    };

?>