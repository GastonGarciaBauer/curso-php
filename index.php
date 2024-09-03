<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
# LLAMADAS A APIs
# Inicializar una nueva sesión de cURL; ch = cURL handle

$ch = curl_init(API_URL);

//Indicar que queremos recibir el resulado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición
y guardamos el resultado */

$result = curl_exec($ch);

//una alternativa seria utilizar file_get_contents (se llama a la API con un GET y te quedás con el json)
// $result = file_get_contents(API_URL);

$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <title>La próxima película de Marvel</title>
    <meta name="desciption" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <!--<pre style="font-size: 15px; overflow: scroll; height: 250px;">
    <?php var_dump($data); ?>
    </pre>-->
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
        style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días </h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p>La siguiente es: <?= $data["following_production"] ["title"]; ?> </p>
    </hgroup>

</main>

<style>
    :root{
        color-scheme: dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
</style>