<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="<?=URL?>employee/store">
	<!-- bouw hier je formulier -->
	<label for='name'>Naam Paard</label><input name='name' type='text' placeholder='Vul hier een naam in'>
	<label for='age'>Leeftijd Paard</label><input name='age' type='text' placeholder='Vul hier een leeftijd in'>
	<input type='submit' value='Create'>
</form>