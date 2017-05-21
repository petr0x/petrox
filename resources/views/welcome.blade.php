<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <form>
    <body>
    <div class="field">
        <input type="text" class="name" placeholder="Add meg a Játékos nevét"><button class="add">Következő</button>
        <br>
    </div>
    <button class="sors"></button>
    </form>
    <div class="result">
    </div>
    </body>
    <script>
        var names = [];
        $(".add").click(function(){
           names.append($(".name").text());
        });

        $(".sors").click(function(){
            $( ".result" ).text(namss);

        });


    </script>
</html>
