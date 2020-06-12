<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>employee/edit">
	    <input type="hidden" name="id" value="<?=$employees["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		<label for='name'>Name : </label><input name='name' type='text' placeholder='<?= $employees['name'] ?>'>
		<label for='age'>Leeftijd : </label><input name='age' type='text' placeholder='<?= $employees['age'] ?>'>
		<input type='submit' value='Update'>
	</form>