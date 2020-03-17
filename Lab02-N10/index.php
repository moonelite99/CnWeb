<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
            color:#2980b9;
        }
        tr:nth-child(odd){
            background: #eee;
        }
        td:nth-child(odd){
            width: 100px;
        }
        td:nth-child(even){
            width: 300px;
        }
        tr{
            height: 50px;
            text-align: center;
        }
        table{
            margin: 50px auto;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Entered Information</h1>
<?php 
    $name = $_POST{"name"};
    $school = $_POST{"school"};
    $class = $_POST{"class"};
    $email = $_POST{"email"};
    $phone = $_POST{"phone"};
    $bday = date("d-m-Y", strtotime($_POST{"bday"}));
    $gender = $_POST{"gender"};
?>
<table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name  ?></td>
        </tr>
        <tr>
            <td>School</td>
            <td><?php echo $school  ?></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><?php echo $class  ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email  ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $phone  ?></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><?php echo $bday  ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender  ?></td>
        </tr>
    </table>
</body>
</html>
