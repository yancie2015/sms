<?PHP
  $ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, "send.php?phone={$phone}");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch);
	curl_close($ch);

	echo $file_contents;
?>
