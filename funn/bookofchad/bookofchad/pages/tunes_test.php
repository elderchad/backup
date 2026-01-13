<!-- source: https://codepen.io/markhillard/pen/Hjcwu -->
<p>Demo Music From <a href="http://incompetech.com">incompetech.com</a></p>
    <audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio>
    <ul id="playlist">
        <li class="current-song"><a href="../media/aChildsPrayer.ogg">A Child's Prayer</a></li>
        <li><a href="Severe%20Tire%20Damage.mp3">Severe Tire Damage</a></li>
        <li><a href="Broken%20Reality.mp3">Broken Reality</a></li>
    </ul>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="audioPlayer.js"></script>
    <script>
        // loads the audio player
        audioPlayer();
    </script>

<?php
	$page = "Tunes";
	include "../includes/connect.php";
	include "../includes/header_test.php";
	include "../includes/sidebar.php";
?>








<div id="content">




</div>

<?php
	include "../includes/footer.php";
?>

<!--<p>The World's -ONLY- Soundtrack largely provided by the LDS church</p>-->