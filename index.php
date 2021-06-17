<!-- 
- create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico 
-->

<?

  require_once __DIR__ .'/Movie.php';

  $movie1 = new Movie('Avengers Endgame');
  $movie1 -> director = 'Anthony and Joe Russo';
  $movie1 -> duration = 181;
  $movie1 -> first_release = 'April 26th, 2019';
  $movie1 -> setVote(8.4);

  $movie2 = new Movie('Avengers Infinity War');
  $movie2 -> director = 'Anthony and Joe Russo';
  $movie2 -> duration = 149;
  $movie2 -> first_release = 'April 27th, 2018';
  $movie2 -> setVote(8.4);

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>

    <span>
      <?php echo $movie1 -> getInfo() ?>
    </span>
    <span>
      <?php echo $movie2 -> getInfo() ?>
    </span>
    
    <h3>Film in lista: <?php echo $movie1 -> getCounter() ?></h3>
    
  </body>

</html>