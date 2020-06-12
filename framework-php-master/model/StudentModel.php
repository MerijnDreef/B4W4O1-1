<?php

function getAllHorses() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM manege";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createReserve($data){
    try {

        $conn = openDataBaseConnection();
            $insert = $conn->prepare("INSERT INTO reservering (namePaard, rasPaard, leeftijdPaard, namePersoon, telefoonNummer, adres, starttime) VALUES ( :namePaard, :rasPaard, :leeftijdPaard, :namePersoon, :telefoonNummer, :adres, :starttime)");
    
            $insert->bindParam(':namePaard', $data['namePaard']);
		   $insert->bindParam(':rasPaard', $data['rasPaard']);
		   $insert->bindParam(':leeftijdPaard', $data['leeftijdPaard']);
		   $insert->bindParam(':namePersoon', $data['namePersoon']);
		   $insert->bindParam(':telefoonNummer', $data['telefoonNummer']);
		   $insert->bindParam(':adres', $data['adres']);
		   $insert->bindParam(':starttime', $data['starttime']);
           $conn = null;
            return $insert->execute();
    
    }
    catch(PDOException $error) {
        echo 'Connection failed:' . $error->getMessage();
    }
    $conn = null;
    
    return $result;
 }

function updateReserve($data){
    try {

        $conn = openDataBaseConnection();
            $insert = $conn->prepare("UPDATE reservering set namePaard = :namePaard, rasPaard = :rasPaard, leeftijdPaard = :leeftijdPaard, namePersoon = :namePersoon, telefoonNummer = :telefoonNummer, adres = :adres, starttime =:starttime WHERE id = :id");
            $insert->bindParam(':id', $data['id']);
			$insert->bindParam(':namePaard', $data['namePaard']);
			$insert->bindParam(':rasPaard', $data['rasPaard']);
			$insert->bindParam(':leeftijdPaard', $data['leeftijdPaard']);
			$insert->bindParam(':namePersoon', $data['namePersoon']);
			$insert->bindParam(':telefoonNummer', $data['telefoonNummer']);
			$insert->bindParam(':adres', $data['adres']);
			$insert->bindParam(':starttime', $data['starttime']);
         $output = $insert->execute();
           $conn = null;
            return $output;
    
    }
    catch(PDOException $error) {
        echo 'Connection failed:' . $error->getMessage();
    }
    $conn = null;
    
    return $result;
 }

 function deleteReserve($id){
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
    $conn = null;
    
    return $result;
 }
 ?>
