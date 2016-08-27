<?php
	require_once('get_words.php');

	$word = $_POST['word'];

	echo(get_words($word));

