<?php
  class SuperHero {

    // Constructor
    public function __constructor($name, $powers, $planet) {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet; 
    }

    // propiedades y los metodos
    public $name;
    public $powers;
    public $planet;

    public function attack() {
      return "¡$this->name ataca con sus poderes!";
    }

    public function description() {
      return "¡$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: $this->powers!";
    }
  }


  $hero = new SuperHero("Superman","Rayos, Vuela y Rapidez","Mercurio");

  // var_dump($hero);
  echo $hero->attack();
  echo $hero->description();
?>


