<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Serviciu stiri</title>
<link rel="stylesheet" type='text/css' href="../CSS/style.css" />


<header> <a href="/">
        <h1 style="position: fixed ; padding: right 1rem;"><img src="../poze/logo2.png "></h1>
    </a></header>

<head>



</head>



<body class="body-sport">
    <x-logare />

    <div class="stire">
        <?php

        $category = "sports";

        $file = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&country=ro&category={$category}";

        $data = file_get_contents($file);

        $result = json_decode($data);
        $user_data = $result->results;

        ?>
        <h2>Sport</h2>

        <a href="/" style="font-display:centre">
            Back </a>
        <?php foreach ($user_data as $user) : ?>
            <article>


                <h2>
                    <a href="{{$user->link}}">{{$user->title}} </a>
                </h2>

                <a href="{{$user->link}}">
                    <img src="{{$user->image_url}} " style=" max-width: 100%; height: auto; margin: auto; border-radius: 8px;">
                </a>

                <h3>
                    {{$user->pubDate}}
                </h3>

                <div>
                    {{$user->description}}

                </div>

                <div>


                </div>
            </article>

        <?php endforeach; ?>



    </div>

    <a href="/">
        Back </a>

    <x-footer />
</body>

</html>