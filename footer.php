<footer>
    <div id="sitemap">
        <?php
        $voices = file("$path/menu.txt");

        echo '<a href="index.php">' . $voices[0] . '</a>';
        echo '<a href="about.php">' . $voices[1] . '</a>';
        echo '<a href="photos.php">' . $voices[2] . '</a>';
        echo '<a href="performing.php">' . $voices[3] . '</a>';
        echo '<a href="contacts.php">' . $voices[4] . '</a>';

        ?>
    </div>

    <div id="copyright">
        <p>©2021 EP, all rights reserved.<br>version 0907</p>
    </div>
</footer>