<div class="container">
 <h1>Welkom bij de Reserveringen</h1>
 <p>Je bent ziet nu de reserveringen</p>
</div>
<?php
    foreach($paarden as $result){
       echo "<p>" . $result['namePaard'] . " </p>";
       echo "<p>" . $result['rasPaard'] . " </p>";
       echo "<p>" . $result['leeftijdPaard'] . " </p>";
       echo "<img src='../img/" . $result['img'] . "'> </p>";
       echo "<p>" . $result['schofthoogte'] . " </p>";

    }

?>
