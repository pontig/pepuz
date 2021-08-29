<footer>
    <div id="sitemap">
        <?php
        $voices = file("$path/menu.txt");

        echo '<div class="voice"><a href="index.php">' . $voices[0] . '</a></div>';
        echo '<div class="voice"><a href="about.php">' . $voices[1] . '</a></div>';
        echo '<div class="voice"><a href="photos.php">' . $voices[2] . '</a></div>';
        echo '<div class="voice"><a href="performing.php">' . $voices[3] . '</a></div>';
        echo '<div class="voice"><a href="contacts.php">' . $voices[4] . '</a></div>';

        ?>
    </div>

    <div id="copyright">
        <p>©2021 EP, all rights reserved.<br>version 0819</p>
    </div>
</footer>