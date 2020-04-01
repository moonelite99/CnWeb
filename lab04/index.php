<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>        
            <form action="index.php" method="POST">
            <label>Choose amount of files <font color="red">*</font></label>
            <input name="amount" list="amount" min="1" max="5" type="number" required style="width: 200px;">
            <datalist id="amount">
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
             </datalist>
             <input type="submit" value="Submit">         
            </form>
            <?php
            global $amount,$n;
            if(isset($_POST['amount'])){
                $amount = $_POST['amount'];
            echo '<form action="upload.php" method="POST" enctype="multipart/form-data" style="text-align: center;">';
            for($i = 0; $i < $amount; $i++){
                echo 'File '.($i+1).' <input type="file" name="uploadfile[]">'.'<br>';
            }
            echo '<input type="hidden" name = "amount" value="' . $amount . '">';
            echo'<input type="submit" value="Upload" name="up">';
            echo '</form>';
            }
            $n = $amount;
            ?>
</body>
</html>