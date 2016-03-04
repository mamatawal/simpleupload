<?php
	move_uploaded_file($_FILES["file"]["tmp_name"], "masukSini/" . $_FILES["file"]["name"]);
	echo "file saved into: " . "masukSini/" . $_FILES["file"]["name"];
?>