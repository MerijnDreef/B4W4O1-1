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
		<label for='uren'>Uren die u wilt inplannen : </label><input type='text' name='uren' id='uren' placeholder='Voer hier uw uren in'>
	<input type='submit' value='Create'>
</form>