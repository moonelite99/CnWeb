<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> radian -> độ</title>
</head>

<body>

	<form action="chuyen_doi_radian_do.php" method="POST">
		Nhập vào số :<input type="number" name="number" required="true"><br>
		mời chọn :<br>
		<input type="radio" name="ok1" value="rad">radian -> độ
		<input type="radio" name="ok2" value="do">độ -> radian <br>

		<input type="submit" value="chuyển đổi">
		<input type="reset" value="restart"><br>
		
		
		<?php
		$number = $_POST{"number"};
		$rad = $number*180/3.14;
		$do = $number*3.14/180;


		if(isset($_POST['ok1']) && !isset($_POST['ok2'])){
			print" $number radian = $rad độ";
		}else if(!isset($_POST['ok1']) && isset($_POST['ok2'])){
			print" $number độ = $do radian ";
		}else if(!isset($_POST['ok1']) && !isset($_POST['ok2'])){
			print" mời chọn option ! ";
		}else if(isset($_POST['ok1']) && isset($_POST['ok2'])){
			print" mời chọn lại option ! ";
		}

		?>
	</form>




</body>

</html>