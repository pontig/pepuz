<?php require "top_section.php";  ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#36aa16">
    <title>Home | Katlin Quadrelli</title>
    <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="js/jQuery.js"></script> -->
    <script src="js/general.js"></script>
    <script src="js/index.js"></script>
</head>

<body>
    <?php require "header.php"; ?>

    <div id="stage">
        <video autoplay muted loop>
            <source type="video/mp4" src="src/thumbnail.mp4">
            </source>
        </video>
    </div>

    <div class="article" id="a1"></div>
    <div class="article" id="a2"></div>
    <div class="article" id="a3"></div>
    <div class="article" id="a4"></div>
    <div class="article" id="a5"></div>

    <?php require 'footer.php'; ?>
</body>

</html>