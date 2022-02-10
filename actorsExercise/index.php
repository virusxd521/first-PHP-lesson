
<?php


        // Creating the multi array
    $cast_crew = [];
    $cast_crew['cast'] = [];
    $cast_crew['cast'][] = 'John David Washington'; 
    $cast_crew['cast'][] = 'Robert Pattinson';
    $cast_crew['cast'][] = 'Elizabeth Debicki';


    $cast_crew['director'] = [];


    $cast_crew['director'][] = 'Christopher Nolan';


    $casting = [];
    $casting['actors'] = [];
    $casting['directors'] = [];





    $people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];


    foreach($people as $key=>$value){
        foreach($people[$key] as $item=>$data){
            if($people[$key]['job'] === 'actor'){
                array_push($casting['actors'], $people[$key]['name']);
            } else {
                array_push($casting['directors'], $people[$key]['name']);
            }
        };

    }


?>