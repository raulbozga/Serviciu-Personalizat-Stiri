<link href='https://css.gg/instagram.css' rel='stylesheet'>
<link href='https://css.gg/facebook.css' rel='stylesheet'>
<link href='https://css.gg/git-fork.css' rel='stylesheet'>

<footer>
    <div class="m-footer">
        <div class="footer">

            <h2 style="text-align: center;">Newsletter!</h2>
            <h3 style="text-align: center;">Stati la curent cu ultimele noutati!</h3>

            <form method="post" action="/newsletter" class="form" style="padding-top: 1rem;">
                @csrf

                <input id="email" type="text" name="email" class="input" placeholder="Adresa de email"></input>
                <button type="submit" class="button">Subscribe</button>

                @error('email')
                <span style="color: red;">{{$message}}</span>
                @enderror
            </form>

            <h3 style="text-align: center;">Contact : </h3>



            <h2 style=" text-align: center;">
                <span class="forc"><a href="https://www.instagram.com/raulbozga/"><i class="gg-instagram"></i></a> </span>
                <span class="forc"><a href="https://www.facebook.com/raulciprian.bozga"><i class="gg-facebook"></i></a></span>
                <span class="forc"> <a href="https://github.com/raulbozga/news"><i class="gg-git-fork"></i></a></span>

            </h2>

            <h3 style="text-align: center;">Tel: +0723455674</h3>


        </div>

    </div>

</footer>