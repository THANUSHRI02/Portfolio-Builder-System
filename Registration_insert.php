<?php
	//session_start();
	$Server="localhost";
	$UserName="root";
	$Password="Thanu1611";
	$DbName="houserent";


	$conn=new mysqli($Server,$UserName,$Password,$DbName);

	if($conn->connect_error)
	{
		die ("error ");
	}
	$Role=$_POST["Role"];
	$Name=$_POST["Name"];
	$UserName=$_POST["UserName"];
	$Password=$_POST["Password"];
	$Email=$_POST["Email"];
	$MobileNo=$_POST["MobileNo"];
	
	

	

	/*$sql="";
	if(isset($_SESSION["Id"]))
	{
		if($_SESSION["Id"]!="")
		{
			$Id=$_SESSION["Id"];
			$sql="update student set FirstName='$FirstName',LastName='$LastName',Gender='$Gender' Country='$Country',
			Hobby='$Hobby', Aboutyou='$Aboutyou'  where ID='$Id' ";
		}
		else
		{
			$sql="Insert into student (FirstName,LastName,Gender,Country,Hobby,Aboutyou)values('$FirstName' ,'$LastName','$Gender','$Country','$Hobby','$Aboutyou')";
		}
	}
	else
	{  */

		


		$sql="Insert into register (Role,Name,UserName,Password,Email,MobileNo)values('$Role' ,'$Name','$UserName','$Password','$Email','$MobileNo')";
	
	echo $sql;

	if($conn->query($sql)===TRUE)
	{
		echo "Sucessfully Registered";
		//unset($_SESSION['Id']);
	}
	else
	{
		echo "Not Inserted have some issue";
	}
   
	$conn->close();
?>