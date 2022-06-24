<!DOCTYPE html>
<html lang="en">

<title>Serviciu stiri</title>
<link rel="stylesheet" href="style.css">

<body style=" max-width: 600px ;
    margin: auto;">
    <article>


        <h1> <?= $stire->title; ?></h1>

        <div>
            <p style="line-height: 1.6;">{!! $stire->body!!}</p>
        </div>

    </article>

    <a href="/">Back</a>

</body>

</html>