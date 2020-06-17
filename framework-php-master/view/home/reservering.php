<div class="container">
 <h1>Welkom bij de Reserveringen</h1>
 <p>Je bent nu de reserveringen</p>
</div>
<?php
    foreach($reservering as $result){
        $manege = getHorse($result['paardId']);       
       echo "<img src='../img/" . $manege['img'] . "'> </p>";
       echo "<p>De naam van het paard : " . $manege['namePaard'] . " </p>";
       echo "<p>De schofthoogte : " . $manege['schofthoogte'] . " </p>";
       echo "<p>Leeftijd van het paard : " . $manege['leeftijdPaard'] . "</p>";
       echo "<p>Naam van de ruiter : " . $result['namePersoon'] . "</p>";
       echo "<p>Begin tijd : " . $result['starttime'] . "</p>";
       echo "<p>Lengte van de rit : " . $result['uren'] . " uren</p>";
       echo "<p>Prijs van de rit : " . 55 * $result['uren'] . " &euro;</p>";
       echo "<a href='" . URL . "home/update/ " .  $result['id'] . "'>Wijzigen</a>";
       echo "<br>";
       echo "<a href='" . URL . "home/delete/" . $result['id'] . "'>Verwijderen</a>";
       echo "<br>";
    }

?>
