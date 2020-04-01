<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php   
            $amount = $_POST['amount'];         
            date_default_timezone_set("Asia/Saigon");
            $target_dir = "upload/";
            for($i = 0;$i < $amount;$i++){               
                if ($_FILES['uploadfile']['error'][$i] > 0)
                echo "<font color = 'red'>"."File ".($i+1)." upload failed, Try again!" . "</font>" .'<br>';
            else {
                    move_uploaded_file($_FILES['uploadfile']['tmp_name'][$i], $target_dir . $_FILES['uploadfile']['name'][$i]);
                    echo '<li style="list-style:decimal">';
                    echo "<font color=#009432>"."Upload successfully"."</font>" . "<br/>";
                    echo 'File name: ' . $_FILES['uploadfile']['name'][$i] . '<br>';
                    echo 'Upload timestamp: ' . date("d/m/Y H:i:s.", filemtime($target_dir.$_FILES['uploadfile']['name'][$i])) . '<br>';
                    echo 'Size: ' . ($_FILES['uploadfile']['size'][$i]) . 'B' .'<br><br>';
                    echo'</li>';
                    }                  
                }                                      
    ?>
    <br>
        <a href="sort.php">List of files</a>
</body>
</html>