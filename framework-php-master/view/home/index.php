<div class="container">
 <h1>Welkom bij het php-framework.</h1>
 <p>Je bent nu in home/index.</p>
</div>
<?php
    foreach($paarden as $result){
       echo "<p>" . $result['namePaard'] . " </p>";
       echo "<p>" . $result['rasPaard'] . " </p>";
       echo "<p>" . $result['leeftijdPaard'] . " </p>";
       echo "<p>" . $result['img'] . " </p>";
       echo "<p>" . $result['schofthoogte'] . " </p>";
    }

?>
