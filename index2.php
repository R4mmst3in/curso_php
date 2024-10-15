<?php declare(strict_types=1); ?>


<!DOCTYPE html>
<html lang="es">


<?php

const API_URL = "https://whenisthenextmcufilm.com/api";



function get_data(string $url):array {
  $result = file_get_contents($url);
  $data = json_decode($result, true);
  return $data;
}

function get_until_message (int $days): string {
  return match(true) {
    $days === 0 => "Hoy se estrena!!!",
    $days === 1 => "Mañana se estrena",
    $days < 7   => "Se estrena esta semana",
    $days < 30  => "Se estrena este més",
    default     => "$days días hasta el estreno",
  };
}

$data = get_data(API_URL);

?>


<head>
  <title>La proxima pelicual de Marvel</title>
  <meta name="description" content="La proxima pelicula de Marvel" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.cdd" />

  <style>
    :root {
      color-scheme: light dark;
    }

    body {
      display: grid;
      place-content: center;
    }

    section {
      display: flex;
      justify-content: center;
      text-align: center;
    }

    hgroup {
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    {

    img {
      margin: 0 auto;
    }
  </style>

</head>


<body>
  <main>
    <section>
      <img
        src="<?= $data["poster_url"]; ?>"
        width="300"
        alt="Poster de <?= $data["title"]; ?>"
        style="border-radius: 16px"
      />
    </section>

    <hgroup>
      <h3><?= $data["title"] . " - " ; ?> <?= get_until_message ($data["days_until"]); ?></h3>
      <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
      <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
  </main>

</body>
</html>
