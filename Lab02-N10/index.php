<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $name = $_POST{"name"};
    $school = $_POST{"school"};
    $class = $_POST{"class"};
    $email = $_POST{"email"};
    $phone = $_POST{"phone"};
    $gender = $_POST{"gender"};
    print("Your name: " . $name);
    print("<br>Your school: " . $school);
    print("<br>Your class: " . $class);
    print("<br>Your email: " . $email);
    print("<br>Your phone: " . $phone);
    print("<br>Your gender: " . $gender);
?>
</body>
</html>
