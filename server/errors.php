<!--
	/*
	 * File: 	errors.php
	 *
	 * Author:	Brandon White (brandonwhite@cmail.com)
	 * Date: 	Winter 2020
	 * Course:	Design Studio I
	 * 
	 * Summmary of File:
	 *
	 *	This will print errors. Thanks Prof. Rami for the code.
	 *  $errors and $error will be defined in server.php, and
	 *  this file will be included after their definition.
	*/
-->

<?php  if (count($errors) > 0) : ?>
	<div>
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>