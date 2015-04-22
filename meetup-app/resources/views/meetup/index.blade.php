<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .title, .foto, .likebutton, .server
    {
        text-align: center;
    }

    .server
    {
        color: #CCC;
    }
    </style>
    <meta charset="UTF-8">
    <title>Meetup</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">
            <h1>Relaxa, tamo em casa...</h1>
            </div>
            <div class="foto"><img src="/images/helena.jpg" alt=""></div>
            <div class="likebutton">
                {{ $curtidas }} curtida(s)
                <br>
                <a href="#">Curtir</a>
            </div>
            <div class="server">
                Servidor: {{ $container }}
            </div>
        </div>
    </div>
</body>
</html>