<?php

  class Movie {

    public $title;
    public $director;
    public $duration;
    public $first_release;
    private $vote;
    static $counter = 0;

    public function __construct($_title) {

      $this -> title = $_title;
      self::$counter++;

    }

    public function setVote($_vote) {

      $this -> vote = $_vote;

    }

    public function getInfo() {

      return '<h1>' . $this -> title . '</h1><p>Director(s): ' . $this -> director . '</p><p>Duration: ' . $this -> duration . ' minutes</p><p>Release Date (USA): ' . $this -> first_release .'</p><p>Vote average: ' . $this -> vote .'</p>';

    }

    static function getCounter () {

      return self::$counter;

    }

  }

?>