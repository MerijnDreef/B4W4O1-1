<h1>Voeg een reservering toe</h1>
<form name="create" method="post" action="<?=URL?>home/store">
	<!-- bouw hier je formulier -->
	<label for='name'>De naam van het paard : </label><select name="name" id="name-select">
    <?php
    foreach($paarden as $result){
    echo "<option value='" . htmlspecialchars($result['id']) . "'>" . htmlspecialchars($result['namePaard']) . "</option>";
    }
    ?>
</select>
        <label for='startDate'>Start dag : </label><input type='date' name='startDate' id='startDate'>
        <label for='startTime'>Start tijd : </label><input type='time' name='startTime' id='startTime'>
		<label for='uren'>Uren die u wilt inplannen : </label><input type='number' name='uren' id='uren' min='1' max='12'>
        <label for='namepersoon'>Uw naam : </label><input type='text' id='namepersoon' name='namepersoon' placeholder='Voer hier uw naam in'>
        <label for='adres'>Uw adres : </label><input type='text' id='adres' name='adres' placeholder='Voer hier uw adres in'>
        <label for='telefoonNummer'>Uw telefoon nummer : </label><input type='number' id='telefoonNummer' name='telefoonNummer' placeholder='Voer hier uw telefoon nummer in'>
	<input type='submit' value='Create'>
</form>