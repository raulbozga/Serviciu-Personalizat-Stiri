<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Serviciu stiri</title>
<link rel="stylesheet" href="../CSS/style.css">

<header> <a href="/">
        <h1 style="padding: right 4rem;"><img src="../poze/logo2.png "></h1>
    </a></header>

<body class="body-weather">
    <x-logare />
    <div class="footer">


        <form method="get" action="weather" name="name" class="form">
            <input type="text" name="name" placeholder="Introduceti orasul" class="input"></input>
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
        $new = str_replace(' ', '%20', $api_url);

        $data = file_get_contents($new);

        $result = json_decode($data, true);

        $temperature = $result['current']['temp_c'];
        $humidity = $result['current']['humidity'];
        $condition = $result['current']['condition']['text'];


        ?>

        <style>
            table,
            th,
            td {
                border: 1px solid;
            }
        </style>

        <div class="tabel">
            <table style="align-items: center;">

                <tr style="align-items: center">
                    <td> Temperatura in {{$city}} este de {{$temperature}} °C</td>
                </tr>


                <tr>
                    <td style="text-align: center">Umiditate {{$humidity}} %</td>
                </tr>
                <tr>
                    <td style="text-align: center">Cerul {{$condition}} </td>
                </tr>

            </table>


        </div>



    </div>
    <x-footer />
</body>

</html>