
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        margin-top: 50px;
        text-align: center;
        margin-left: -15px;
        color: #3498db;
    }
    form{
        margin: 10px 32%; 
        display: block; 
    }
    input{
        width: 300px;
        height: 28px;
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
    }
    .submit{
        background-color: #3498db;
        color: white;
        cursor: pointer;
        width: 150px;
        border:1px;
        border-radius: 5px ;
        float: right;
    }
    .submit:hover{
        background-color: #2980b9;
    }
    .radio{
        width: 20px;
    }
    td:nth-child(odd){
        text-align: right;
        width:100px;
    }
</style>



<body style="background-color: whitesmoke">
	<?php
	
	$connect = mysqli_connect('localhost','root','','business_service') or die('ket noi that bai');
	?>
    <h1>Business Register</h1>
    <form  method="POST">
        <table>
         <tr>
            <td>Name<font color="red">*</font></td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Address<font color="red">*</font></td>
            <td><input type="text" name="Address" required="true"></td>
        </tr>

        <tr>
            <td>City<font color="red">*</font></td>
            <td><input type="text" name="City"></td>
        </tr>
        <tr>
            <td>Telephone<font color="red">*</font></td>
            <td><input type="number" name="Telephone" required="true"></td>
        </tr>

        <tr>
            <td>URL<font color="red">*</font></td>
            <td><input type="text" name="URL"></td>
        </tr>
        <tr>
            <td>Title<font color="red">*</font></td>
            <td><select name="Title">
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

        </select></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" class="submit" value="Add business" name="submit" ></td>
    </tr>

</table>


</form>

<?php
if(isset($_POST['submit'])){
   $Name=$_POST['Name'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $Telephone=$_POST['Telephone'];
   $URL = $_POST['URL'];
   $Title = $_POST['Title'];


   //chèn vào bảng business
   $query2 ="INSERT INTO business VALUE('','$Name','$Address','$City','$Telephone','$URL')";
   mysqli_query($connect,$query2) or die('insert that bai !'); 

   //lấy ra BusinessID 
   $query3 = "SELECT `BusinessID` FROM `business` WHERE URL='$URL' "; 
   $result = mysqli_query($connect,$query3);
   if(mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)) {

        $BusinessID=$row['BusinessID'];

    }
}
    // lấy ra CategoryID từ option 
$query4 = "SELECT CategoryID FROM categories WHERE Title='$Title'";
$result2 = mysqli_query($connect,$query4);
if(mysqli_num_rows($result2) > 0){

    while ($row = mysqli_fetch_assoc($result2)) {

        $CategoryID=$row['CategoryID'];

    }
}
            // chèn vào bảng  biz_category trường đc chọn 
$query5 = "INSERT INTO biz_category VALUE('$BusinessID','$CategoryID')";
mysqli_query($connect,$query5) or die('insert that bai !'); 

header('location:6.6.php');
}
?>



</body>
</html>

