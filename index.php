<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM biodata ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Beranda Utama</title>
</head>

<body>
<a href="add.html">Tambahkan Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Umur</td>
		<td>Email</td>
		<td>Hobi</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nama']."</td>";
		echo "<td>".$res['jeniskelamin']."</td>";
		echo "<td>".$res['umur']."</td>";	
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['hobi']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
