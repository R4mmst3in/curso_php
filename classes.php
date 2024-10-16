<?php
  class SuperHero {
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


  $hero = new SuperHero();

  $hero->name   = "Superman";
  $hero->powers = "Rayos, Vuela y Rapidez";
  $hero->planet = "Mercurio";

  // var_dump($hero);

  echo $hero->description();
?>


