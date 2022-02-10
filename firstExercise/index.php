
<?php
    $first_name = 'Daniel';
    $surname = 'Benisti';
    $year_of_birth = 1996;
    $height = 170;
    // Special variable
    $SERVER_SOFTWARE = 'Apache';
    $MY_OS = 'Windows';

    $students = [];
    array_push($students, 'Thomas', 'Kathy', 'Eve', 'Bernard');


    

?>

<h1>First name: <?= $first_name ?> </h1>
<h2>Surname: <?= $surname ?></h2>
<p>Year of birth: <?= $year_of_birth  ?></p>
<p>Height:<?= $height ?></p>
<p> <?= $SERVER_SOFTWARE ?>  </p>
<p> My operating system is <?= $MY_OS ?>  </p>

 
<?php if ($condition == true) : ?>
    <p>
        My <strong>HTML</strong> code.
    </p>
<?php endif; ?>