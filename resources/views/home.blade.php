<x-layout>



    <!DOCTYPE html>
    <html lang="en">

    <title>Serviciu stiri</title>
    <link rel="stylesheet" href="CSS/style.css">



    <body>


        <div class="stire">
            <?php
            $file = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&country=ro";

            $data = file_get_contents($file);


            $result = json_decode($data);
            $user_data = $result->results;

            ?>
            <?php foreach ($user_data as $user) : ?>
                <article>


                    <h2>
                        <a href="{{$user->link}}">{{$user->title}} ---go to</a>

                    </h2>

                    <a href="{{$user->link}}">
                        <img src="{{$user->image_url}} ">
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



    </body>

    </html>
</x-layout>