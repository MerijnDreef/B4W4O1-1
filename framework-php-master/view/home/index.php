<div class="container">
 <h1>Welkom bij het php-framework.</h1>
 <p>Je bent nu in home/index.</p>
</div>
<?php
    foreach($paarden as $result){
        echo "<div>";
        echo "<img src='../img/" . $result['img'] . "'> </img>";
       echo "<strong> Naam : " . $result['namePaard'] . " </strong>";
       echo "<strong> Ras : " . $result['rasPaard'] . " </strong>";
       echo "<strong> Leeftijd : " . $result['leeftijdPaard'] . " </strong>";
       echo "<strong> Schofthoogte : " . $result['schofthoogte'] . " </strong>";
       echo "</div>";
       echo "<a href='" . URL . "employee/update/ " .  $result['id'] . "'>Wijzigen</a>";
       echo "<a href='" . URL . "employee/delete/" . $result['id'] . "'>Verwijderen</a>";
        }

?>
