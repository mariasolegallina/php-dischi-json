<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="stylesheet" href="./css/app.css">

    <!-- bootstrap -->
    <link href="https=>//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- vue -->
    <script src="https=>//unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https=>//cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="text-light">
    <div id="app">

        <!-- navbar -->
        <nav class="navbar">
            <div class="container">
                <figure class="spot-icon">
                    <a href="#">
                        <img src="./img/spotify_icon.png" alt="spotify logo">
                    </a>
                </figure>
            </div>
        </nav>

        <!-- main -->
        <div class="main">


            <div class="container">
                <p>{{message}}</p>
                <div class="d-flex row">
                    <div class="col-4">
                        <figure>
                            <img src="" alt="">
                        </figure>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="./js/app.js"></script>
    <!-- bootstrap -->
    <script src="https=>//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>