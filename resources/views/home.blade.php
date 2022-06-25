<x-layout>



    <!DOCTYPE html>
    <html lang="en">

    <title>Serviciu stiri</title>
    <link rel="stylesheet" href="CSS/style.css">



    <body>


        <div class="stire">
            <?php
            $file = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&country=ro&category=business,science,politics,sports";

            $data = file_get_contents($file);


            $result = json_decode($data);
            $user_data = $result->results;

            ?>
            <?php foreach ($user_data as $user) : ?>
                <article>


                    <h2>
                        <a href="{{$user->link}}" clas="titlu">{{$user->title}} </a>

                    </h2>

                    <a href="{{$user->link}}">
                        <img src="{{$user->image_url}} ">
                    </a>

                    <h4>
                        <p>postat : {{$user->pubDate}}</p>
                    </h4>

                    <div>
                        <p>{{$user->description}}</p>

                    </div>

                    <div>


                    </div>
                </article>

            <?php endforeach; ?>



        </div>



    </body>

    </html>
</x-layout>