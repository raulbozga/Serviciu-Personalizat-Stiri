<!DOCTYPE html>
<html lang="en">

<title>Serviciu stiri</title>
<link rel="stylesheet" href="../CSS/style.css">

<!-- <script src="script.js" defer></script> -->

<header><a href="/">
        <h1>Serviciu stiri</h1>
    </a></header>

<body class="body-weather">

    <div>


        <form method="get" action="weather" name="name" class="form">
            <input type="text" name="name" value="" class="input"></input>
            <input type="submit" class="button">
        </form>

        <?php

        if (isset($_GET['name'])) {
            $name = $_GET['name'];
        } else {
            $name = "Bucharest";
        }

        echo $name;
        ?>

        <?php

        $apikey = "2152f98272b840fdaed102813222904";

        $city = $name;



        $api_url = "http://api.weatherapi.com/v1/current.json?key=${apikey}&q=${city}&lang=ro";
        // dd($api_url);
        $data = file_get_contents($api_url);

        $result = json_decode($data, true);

        $temperature = $result['current']['temp_c'];
        $humidity = $result['current']['humidity'];
        $condition = $result['current']['condition']['text'];


        ?>

        <div class="tabel">

            <p style="text-align: center">Temperatura in {{$city}} este {{$temperature}} °C</p>
            <p style="text-align: center">Umiditate {{$humidity}} %</p>
            <p style="text-align: center">Cerul {{$condition}} </p>

        </div>



    </div>
    <a href="/">Back</a>
</body>

</html>