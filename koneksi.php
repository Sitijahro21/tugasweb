<?php
	require'vendor/autoload.php';

	$client = new MongoDB\Client;

	$tugasweb = $client->tugasweb;

	$result1 = $tugasweb->createCollection('buku');
	var_dump($result1);
?>