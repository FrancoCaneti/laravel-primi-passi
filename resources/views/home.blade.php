<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: crimson;
                color: silver;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                vertical-align:center
            }
            
            .title{
                font-size:80px;
                
            }

          

          
        </style>
    </head>
    <body>
            <div class="content flex-center">
                <div class="title m-b-md">
                   Benvenuti nel fantastico mondo di  Laravel
                </div>
    </body>
</html>
