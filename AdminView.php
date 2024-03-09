<html>
<head>
	<link rel="stylesheet" href="../style.css">
	</head>
<body>

	<h1> File Information System </h1>

<?php

$Server="localhost";
$UserName="root";
$Password="Thanu1611";
$DbName="task";

$conn=new mysqli($Server,$UserName,$Password,$DbName);

if($conn->connect_error)
{
	die("Error");
}

$sql="select * from dataowner";

//echo($sql);

$Result=$conn->query($sql);
if($Result->num_rows>0)
{
	echo "<table>

			<tr>
			<th> Id </th>
			<th> Title </th> 
			<th> File Name</th>
			<th> Description </th> 
			<th> Send </th> </tr>";
	while($row=$Result->fetch_assoc())
	{
		echo " <tr> 
					<td> ". $row["Ownerid"]." </td>
					<td> ". $row["Title"]." </td> 
					<td> <img src='". $row["FileUpload"]."' > </td>
					<td> ". $row["Description"]." </td>
					<td> <a href='#'?Id=".$row["Ownerid"]."'>Send to Cloud</a></td>

					</tr>";
	}
	echo "</table>";
}

$conn->close();
?>
</body>
</html>
