<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
</head>
<style type="text/css">
	table, th, td{
		border:1px solid black;
	}
	table{

		border-collapse:collapse;
	} 
	th{
			text-align: center;
	}
	form{
		margin-left: 27%;
	}
	
</style>
<body>
	<?php
	
	$connect = mysqli_connect('localhost','root','','business_service') or die('ket noi that bai');
	?>

	<h1 align="center"> Category Adminstration </h1>


	<form method="POST">
		<table border="0"  >
			<tr>
				<th>STT</th>
				<th> CategoryID</th>
				<th> Title</th>
				<th> Description</th>
			</tr>

			<?php
			$query = "select * from categories";
			$result = mysqli_query($connect,$query);
			if(mysqli_num_rows($result) > 0){
				$i=0;
				while ($row = mysqli_fetch_assoc($result)) {
					$i++;
					$CategoryID=$row['CategoryID'];
					$Title=$row['Title'];
					$Description=$row['Description'];
					echo"<tr>";

					echo "<td>$i</td>";
					echo "<td>$CategoryID</td>";
					echo "<td>$Title</td>";
					echo "<td>$Description</td>";
					echo"</tr>";
				}
			}
			?>
			<tr>
				<form method="POST">
					<td></td>
					<td><input type="text" name="CategoryID" required=""></td>
					<td><input type="text" name="Title"></td>
					<td><input type="text" name="Description"></td>


				</tr>
			</table>
			<input type="submit" value="insert" name="insert">
		</form>

		<?php
		if(isset($_POST['insert'])){
			$CategoryID= $_POST['CategoryID'];
			$Title= $_POST['Title'];
			$Description= $_POST['Description'];
			$query2 ="INSERT INTO categories VALUE('$CategoryID','$Title','$Description')";
			mysqli_query($connect,$query2) or die('insert that bai !');
			header('location:6.5.php');
		}
		?>


	</body>
	</html>