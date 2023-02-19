<?php 
class Movie{
    public $title;
    public $duration;
    public $main_actor;
    
    function __construct(string $title , string $duration , string $main_actor ){

        $this->title = $title;
        $this->duration = $duration;
        $this->main_actor = $main_actor;


    }
    function getName(){
        return "$this->title";
    }
    

};

$gangsOfNewYork = new Movie('Gangs of NewYork' , '2h 47m' , 'Leonardo Dicaprio');
$unanottedaleoni = new Movie('Una notte da leoni', '1h 40m', 'Zach Galifianakis');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
</head>
<body>
    <h1><?= $gangsOfNewYork->title?></h1>
    <h1><?= $gangsOfNewYork->duration?></h1>
    <h1><?= $gangsOfNewYork->main_actor?></h1>
    <br>
    <br>
    <br>
    <br>
    <h1><?= $unanottedaleoni->title?></h1>
    <h1><?= $unanottedaleoni->duration?></h1>
    <h1><?= $unanottedaleoni->main_actor?></h1>

</body>
</html>




