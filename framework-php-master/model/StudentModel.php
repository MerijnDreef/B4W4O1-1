<?php

function getAllHorses(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM paarden";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getHorse($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM paarden WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }
 function getAllReserve(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reservering";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getReserve($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM reservering WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function createReserve($data){
    if($_POST['startDate'] != NULL && $_POST['startTime'] != NULL && $_POST['namePersoon'] != NULL && $_POST['telefoonNummer'] != NULL && $_POST['uren'] != NULL && $_POST['adres'] != NULL){
    try {
        $dt = new DateTime($data['startDate'] . 'T' . $data['startTime']);
        $starttime = $dt->format('Y-m-d\TH:i:s.u');
        $conn = openDataBaseConnection();
           $insert = $conn->prepare("INSERT INTO reservering (id, paardId, namePersoon, telefoonNummer, adres, starttime, uren) VALUES (null, :paardId, :namePersoon, :telefoonNummer, :adres, :starttime, :uren)");
           $insert->bindParam(':paardId', $data['paardId']);
           $insert->bindParam(':namePersoon', $data['namePersoon']);
		   $insert->bindParam(':telefoonNummer', $data['telefoonNummer']);
		   $insert->bindParam(':adres', $data['adres']);
           $insert->bindParam(':starttime', $starttime);
           $insert->bindParam(':uren', $data['uren']);
           $insert->execute();
           $conn = null;    
    }
    catch(PDOException $error) {
        echo 'Connection failed:' . $error->getMessage();
    }
}
    $conn = null;
    
    return $result;
 }

function updateReserve($data){
   
    if($_POST['startDate'] != NULL && $_POST['startTime'] != NULL && $_POST['namePersoon'] != NULL && $_POST['telefoonNummer'] != NULL && $_POST['uren'] != NULL && $_POST['adres'] != NULL){
    try {
        $dt = new DateTime($_POST['startDate'] . 'T' . $_POST['startTime']);
        $starttime = $dt->format('Y-m-d\TH:i:s.u');
        $conn = openDataBaseConnection();
            $insert = $conn->prepare("UPDATE reservering set paardId = :paardId, namePersoon = :namePersoon, telefoonNummer = :telefoonNummer, adres = :adres, starttime =:starttime, uren = :uren WHERE id = :id");
            $insert->bindParam(':id', $data['id']);
            $insert->bindParam(':paardId', $data['paardId']);
            $insert->bindParam(':namePersoon', $data['namePersoon']);
            $insert->bindParam(':telefoonNummer', $data['telefoonNummer']);
            $insert->bindParam(':adres', $data['adres']);
            $insert->bindParam(':starttime', $starttime);
            $insert->bindParam(':uren', $data['uren']);
            $insert->execute();
            $conn = null;
            // return $output;
    
    }

    catch(PDOException $error) {
        echo 'Connection failed:' . $error->getMessage();
    }
}
    $conn = null;
    
    return $result;
 }

 function deleteReserve($id){
    if($_POST['input'] == 'bevestigd')   
     try {

        $conn = openDataBaseConnection();
            $insert = $conn->prepare("DELETE FROM reservering WHERE id = :id");
            $insert->bindParam(':id', $id);
           $output = $insert->execute();
            $conn = null;
            return $output;
    
    }
    catch(PDOException $error) {
        echo 'Connection failed:' . $error->getMessage();
    }
}
    $conn = null;
    
    return $result;
 }
 ?>
