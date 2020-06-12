<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker
?>
<form name='delete' method='POST' action='<?= URL ?>employee/destroy/<?= $employees['id']?>'>
</label for='words'>Type bevestigd om het item te verwijderen</label><input name='words' type='text' placeholder='Type Bevestigd om het te bevestigen'>
<input type='submit' value='delete'>
</form>