<!DOCTYPE html>
<html lang="en">

<title>Serviciu stiri</title>
<link rel="stylesheet" type='text/css' href="CSS/style.css" />

<head>

    <h2>Food</h2>

</head>

<header><a href="/">
        <h1>Serviciu stiri</h1>
    </a></header>

<body style=" max-width: 600px ;margin: auto; padding-bottom:2rem;">


    <div class="stire">
        <?php

        $category = "food";

        $file = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&country=us&category={$category}";
        //$file = "http://api.mediastack.com/v1/news?access_key=26c3c6cb2249167251ba46a4774c4b0c&country=ro";
        $data = file_get_contents($file);

        $result = json_decode($data);
        $user_data = $result->results;

        ?>
        <a href="/">
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

</body>

</html>