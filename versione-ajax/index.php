<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>dischi</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="logo.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container container">
            <!-- Disco ad esempio
            <div class="cd">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/9f/Ten_Summoner%27s_Tales.jpg" alt="">
                <h3>Ten's Summoners Tales</h3>
                <span class="author">Sting</span>
                <span class="year">1993</span>
            </div>
        </div>
        <!--creazione template con handlebar-->
        <script id="hb-template" type="text/x-handlebars-template">
           <div class='cd'>
               <img src ='{{poster}}' alt='{{title}}'>
               <h3>{{title}}</h3>
               <span class="author">{{name}}</span>
               <span class="year">{{anno}}</span>
           </div>
           </script>
    <script src="main.js" charset="utf-8"></script>
    </body>
</html>
