<div class="container">
 <h1>Welkom bij de Reserveringen</h1>
 <p>Je bent nu de reserveringen</p>
</div>
<?php
    foreach($reservering as $result){
        $manege = getHorse($result['paardID']);
       echo "<p>" . $manege['namePaard'] . " </p>";
       echo "<img src='../img/" . $manege['img'] . "'> </p>";
       echo "<p>" . $manege['schofthoogte'] . " </p>";
      
       echo "<a href='" . URL . "home/update/ " .  $result['id'] . "'>Wijzigen</a>";
       echo "<a href='" . URL . "home/delete/" . $result['id'] . "'>Verwijderen</a>";
    }

?>
