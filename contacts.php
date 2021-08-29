<?php require "top_section.php";  ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#36aa16">
    <title><?php echo file("lang/" . $_SESSION['language'] . "/menu.txt")[4]; ?> | Katlin Quadrelli</title>
    <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/contacts.css">
    <script src="js/general.js"></script>
</head>

<body>
    <?php
    require "header.php";
    $file = file("$path/contacts.txt");

    function newRecord($text)
    {
        $file = 'src/contactRequests.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "$text\n";
        // Write the contents back to the file
        file_put_contents($file, $current);
    }
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $record = "";
        $record .= "Name: " . $_POST['name'] . " " . $_POST['surname'] . "\r\n";
        $record .= "Mail: " . $_POST['email'] . "\r\n";
        $record .= "Subject: " . $_POST['subject'] . "\r\n";
        $record .= "Message: " . $_POST['message'] . "\r\n\r\n";

        newRecord($record);
        
        echo "<script>location.href='contacts.php?complete=1'</script>";
    }

    if (isset($_GET['complete'])) {
        echo "<script>alert('".$file[8]."')</script>";
    }
    ?>

    <h2 id="title"><?php echo $file[0] ?></h2>
    <cite><?php echo $file[1] ?></cite>

    <form action="" method="post">
        <label for="name"><?php echo $file[2] ?></label><br>
        <input required type="text" name="name" id=""><br>
        <label for="surname"><?php echo $file[3] ?></label><br>
        <input required type="text" name="surname" id=""><br>
        <label for="email"><?php echo $file[4] ?></label><br>
        <input required type="text" name="email" id=""><br>
        <label for="subject"><?php echo $file[5] ?></label><br>
        <input required type="text" name="subject" id=""><br>
        <label for="message"><?php echo $file[6] ?></label><br>
        <textarea required name="message" id="" rows="8"></textarea><br>
        <input type="submit" value="<?php echo $file[7] ?>" name="submit">
    </form>

    <div class="article" id="socials">
        <h3><?php echo $file[9] ?></h3>
        <a target="_blank" href="https://www.instagram.com/katlinquadrelli/"><img src="src/icons/instagram.svg" alt="icona insta"></a>
        <a target="_blank" href="https://www.instagram.com/katlinquadrelli/"><p>@katlinquadrelli</p></a>
        <a target="_blank" href="https://www.facebook.com/katlin.quadrelli"><img src="src/icons/facebook.svg" alt="icona fb"></a>
        <a target="_blank" href="https://www.facebook.com/katlin.quadrelli"><p>katlin.quadrelli</p></a>
        <a target="_blank" href=" https://www.linkedin.com/in/katlin-quadrelli-0b8531174/"><img src="src/icons/linkedin.svg" alt="icona lin"></a>
        <a target="_blank" href=" https://www.linkedin.com/in/katlin-quadrelli-0b8531174/"><p>Katlin Quadrelli</p></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCSodzSAXsddOEAPwciJ9fbQ"><img src="src/icons/youtube.svg" alt="icona yt"></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCSodzSAXsddOEAPwciJ9fbQ"><p>katlin.quadrelli</p></a>
    </div>

    <?php require 'footer.php'; ?>


</body>

</html>