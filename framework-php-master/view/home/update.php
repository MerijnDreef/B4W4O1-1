<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>home/edit">
	    <input type="hidden" name="id" value="<?=$paarden["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		<label for='paardId'>De naam van het paard : </label><select name="paardId" id="name-select">
    <?php
    foreach($manege as $result){
    echo "<option value='" . htmlspecialchars($result['id']) . "'>" . htmlspecialchars($result['namePaard']) . "</option>";
    }
    ?>
</select>
<label for='startDate'>Start dag : </label><input type='date' name='startDate' id='startDate'>
        <label for='startTime'>Start tijd : </label><input type='time' name='startTime' id='startTime'>
		<label for='uren'>Uren die u wilt inplannen : </label><input type='number' name='uren' id='uren' min='1' max='12' placeholder='<?= $paarden['uren'] ?>'>
        <label for='namePersoon'>Uw naam : </label><input type='text' id='namePersoon' name='namePersoon' placeholder='<?= $paarden['namePersoon'] ?>'>
        <label for='adres'>Uw adres : </label><input type='text' id='adres' name='adres' placeholder='<?= $paarden['adres'] ?>'>
        <label for='telefoonNummer'>Uw telefoon nummer : </label><input type='number' id='telefoonNummer' name='telefoonNummer' placeholder='<?= $paarden['telefoonNummer'] ?>'>
		<input type='submit' value='Update'>
	</form>