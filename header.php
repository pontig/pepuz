<header>
    <h1>Katlin <br> Quadrelli</h1>
    <div id="hamburger">
        <div id="bar1"></div>
        <div id="bar2"></div>
        <div id="bar3"></div>
    </div>
    <div id="menu">
        <?php
        $voices = file("$path/menu.txt");
        //var_dump($voices);
        echo '<div class="voice"><a href="index.php">' . $voices[0] . '</a></div>';
        echo '<div class="voice"><a href="about.php">' . $voices[1] . '</a></div>';
        echo '<div class="voice"><a href="photos.php">' . $voices[2] . '</a></div>';
        echo '<div class="voice"><a href="performing.php">' . $voices[3] . '</a></div>';
        echo '<div class="voice"><a href="contacts.php">' . $voices[4] . '</a></div>';
        echo '<div class="voice active"><img src="' . $path . '/flag.png"></div>';
        echo '<div class="voice" id="pippo"><img src="src/logo_big.png"></div>';
        ?>
        <div id="x">X</div>
        <div class="voice flag">Choose Language:</div>
        <?php
        $list = scandir('lang');
        for ($i = 2; $i < count($list); $i++) {
            $nat = $list[$i];
            $active = ($nat == $_SESSION['language']) ? 'active' : '';
            echo "<div class='voice flag' id='" . $nat . "flag'><a href='language.php?lang=$nat'><img src='lang/$nat/flag.png'></a></div>";
        }
        ?>
    </div>
</header>