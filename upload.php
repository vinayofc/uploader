<?php

$name=$_POST['fname'];
$filename=$name.$_FILES['myfile']['name'];
$tmp=$_FILES['myfile']['tmp_name'];
move_uploaded_file($tmp,"uploads/$filename");
echo "/uploads/".$filename;
?>