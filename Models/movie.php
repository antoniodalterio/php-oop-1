<?php

class Movie
{
  public $title;
  public $year;
  public $directed;

  public $pegi;

  function __construct($_title, $_year, $_directed)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->directed = $_directed;
  }

  public function setPegi($eta)
  {
    if ($eta < 12) {
      return 'Non puoi vedere questo film, se non accompagnato da un adulto';
    }
  }

}

$ironMan = new Movie('Iron Man', 'May 2, 2008', 'Jon Favreau');
echo $ironMan->title;
echo '<br>';
echo $ironMan->year;
echo '<br>';
echo $ironMan->directed;
echo '<br>';
echo $ironMan->setPegi(11);

echo '<hr>';

$hulk = new Movie('The Incredible Hulk', 'June 13, 2008', 'Louis Leterrier');
echo $hulk->title;
echo '<br>';
echo $hulk->year;
echo '<br>';
echo $hulk->directed;
echo '<br>';
echo $hulk->setPegi(10);






