<!DOCTYPE html>
<html lang="es">


<?php

require_once 'functions.php';

$data = get_data(API_URL);

?>


<head>
<title>La proxima película de Marvel: <?= $data["title"] ?></title>
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
