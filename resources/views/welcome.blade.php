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
        <input type="text" placeholder="Adj meg egy nevet"><button>+</button>
        <br>
    </div>
    <input type="submit" value="Sorsol">
    </form>
    <div class="result">
    </div>
    </body>
    <script>

        $("button").click(function(){
            $( ".field" ).append( '<br><input type="text" placeholder="Adj meg egy nevet"><br>');
        });

        $("submit").click(function(){
            var str = $( "form" ).serialize();
            $( ".result" ).text(str);

        });


    </script>
</html>
