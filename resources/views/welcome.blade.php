<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - Add React in One Minute</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
        </style>
    </head>
    <body>
        <div id="root"></div>


        <h2>Laravel 5.2 and React</h2>

        <!-- We will put our React component inside this div. -->
        <div id="like_button_container"></div>

        <!-- Load React. -->
        <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
        <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

        <!-- Load our React component. -->
        <script src="{{ URL::asset('/js/all.js') }}"></script>
    </body>
</html>
