<?php
   $data = $_POST['data'];
	$file = "page.html";
	$fp = fopen($file, 'w'); 
	fwrite($fp, $data); 
	fclose($fp);
	echo "done";
?>
