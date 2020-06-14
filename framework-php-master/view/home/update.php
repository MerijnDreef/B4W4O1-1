<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>home/edit">
	    <input type="hidden" name="id" value="<?=$paarden["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		<label for='name'>Name : </label><input name='name' type='text' placeholder='<?= $paarden['name'] ?>'>
		<label for='age'>Leeftijd : </label><input name='age' type='text' placeholder='<?= $paarden['age'] ?>'>
		<input type='submit' value='Update'>
	</form>