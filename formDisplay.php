<?php

if(isset($_POST['register']))
{
	if (isset($_POST['StudentID']) && isset($_POST['StudentName']) && isset($_POST['StudentParentage']) && isset($_POST['StudentAddress']) && isset($_POST['StudentCell']) && isset($_POST['StudentQual']) && isset($_POST['StudentGend'])) 
	{
		$ID=$_POST['StudentID'];
		$Name= $_POST['StudentName'];
		//$Name= trim($_POST['StudentName']);
		//$Name=trim($Name);
		$Parentage=$_POST['StudentParentage'];
		$Address=$_POST['StudentAddress'];
		$Email=$_POST['StudentEmail'];
		$CellNo=$_POST['StudentCell'];
		$Qualification=$_POST['StudentQual'];
		$Gender=$_POST['StudentGend'];
	}
	
	//$Hobbies="";
	if(isset($_POST['Hobb']))
	{
		foreach($_POST['Hobb'] as $value)
		{
			$Hobbies.=$value;
			$Hobbies.=",";
		}
	}


		echo  $ID;$Name;$Address;echo $Email;echo $CellNo;echo $Qualification;echo $Gender;echo $Hobbies;
		
}


?>
