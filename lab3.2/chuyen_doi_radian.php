<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> radian -> độ</title>
</head>
<style>
	form{
		margin-left: 35%;
	}
</style>
<body>

	<form action="chuyen_doi_radian.php" method="POST">
		Nhập vào số :<input type="number" name="number1" required="true"><br>
		mời chọn :<br>
		<input type="radio" name="ok1" value="rad">radian -> độ
		<input type="radio" name="ok2" value="do">độ -> radian <br>

		<input type="submit" value="chuyển đổi">
		<input type="reset" value="restart"><br>
		
		
		<?php
		if(isset($_POST{"number1"})){

		$number = $_POST{"number1"};
	
		$rad = $number*180/3.14;
		$do = $number*3.14/180;
}

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