<?php
if (isset($_POST['sbt'])) 
{
	$file=$_FILES['fileload'];
	//echo $file;
	print_r($file);
	$filename=$_FILES['fileload']['name'];
	$filetemp=$_FILES['fileload']['tmp_name'];
	$store="storefile/".$filename;
	if(move_uploaded_file($filetemp, $store))
	{
		echo "File uploaded successfully";
	}
	else
	{
		echo "Uploading Failed";
	}
}
?>