<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List business</title>
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<style type="text/css">
	#wrapper{
		width: 1000px;
		min-height: 250px;
		margin: 50px auto;
		background: #f5efef;
	}
	#left{
		width: 250px;
		border-right: 1px solid;

	}
	#right{
		width: 750px;
	}
	table, th, td{
		border:1px solid black;
	}
	table{

		border-collapse:collapse;
	} 
	th{
		text-align: center;
		width: 100px;
	}
	
	ul li {
		margin: 20px;
	}
</style>
<body>
	
	<?php
	
	$connect = mysqli_connect('localhost','root','','business_service') or die('ket noi that bai');

	?>
	<h1 align="center" style="font-size: 30px;"> Business Listing </h1>
	<div id="wrapper" class="clear-fix" >
		<div id="left" class="fl-left">
			<h1 style="text-align: center;"> Danh Sách Tiêu Đề</h1>
			<ul>
				<?php
				$query = "select Title from categories";
				$result = mysqli_query($connect,$query);
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
						$Title=$row['Title'];

						echo"<li><a href='#'>$Title</a></li>";

					}
				}

				?>
			</ul>
			<div>
				<form action="" method="GET">
					<label>Title<font color="red">*</font></label>
					<select name="Title">
						<?php
						$query = "select Title from categories";
						$result = mysqli_query($connect,$query);
						if(mysqli_num_rows($result) > 0){
							while ($row = mysqli_fetch_assoc($result)) {
								$Title=$row['Title'];
								echo"<option>$Title</option>";
							}
						}
						?>

					</select>
					<input type="submit" name="submit" value="tìm kiếm">
				</form>

			</div>
		</div>
		<div id="right" class="fl-left">
			<?php
			if (isset($_REQUEST['submit'])) 
			{
            // Gán hàm addslashes để chống sql injection
				$Title = addslashes($_GET['Title']);


                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
				$query = "SELECT business.BusinessID,business.Name,business.Address,business.Telephone,business.URL, categories.Title,categories.Description FROM business,categories,biz_category WHERE business.BusinessID=biz_category.BusinessID and biz_category.CategoryID=categories.CategoryID and categories.Title like '%$Title%'";
					$result = mysqli_query($connect,$query);
				if (mysqli_num_rows($result) > 0) 
				{

					echo '<table border="1" cellspacing="0" cellpadding="10">';
				echo	'<tr>';
				echo		'<th> BusinessID</th>';
				echo		'<th> Name</th>';
				echo		'<th> Address</th>';
				echo		'<th> Telephone</th>';
				echo		'<th>URL</th>';
				echo		'<th>  Title</th>';
				echo		'<th> Description</th>';
				echo	'</tr>';
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo "<td>{$row['BusinessID']}</td>";
						echo "<td>{$row['Name']}</td>";
						echo "<td>{$row['Address']}</td>";
						echo "<td>{$row['Telephone']}</td>";
						echo "<td>{$row['URL']}</td>";
						echo "<td>{$row['Title']}</td>";
						echo "<td>{$row['Description']}</td>";

						echo '</tr>';
					}
					echo '</table>';
				} 
				else {
					echo "Khong tim thay ket qua!";
				}
			}

			?>
		
			</div>
		</div>
	</body>
	</html>