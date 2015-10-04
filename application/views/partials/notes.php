<?php 
	foreach ($notes as $note) { ?>
		<div class='notes'>
			<h3><?= $note['title'] ?></h3>
			<form action="/main/edit" method='post'>
				<input type='hidden' name='id' value='<?= $note['id'] ?>'>
				<textarea name='description'><?= $note['description'] ?></textarea>
			</form>
			<form action='' method='post'>
				<a href="">Delete</a>
			</form>
				<hr>
			</div>
	<?php } ?>