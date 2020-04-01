<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date time validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="index.php" method="POST">
        <h2>Date and time</h2>
        <label for="name" style="margin-right: 170px">Your name: </label>
        <input type="text" name="name" required> <br>
        <label for="day" style="margin-right: 210px">Date: </label>
        <select name="day">
            <?php
                for($i = 1; $i <= 31; $i++){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <label for="month"></label>
        <select name="month">
            <?php
                for($i = 1; $i <= 12; $i++){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <label for="day"></label>
        <select name="year">
            <?php
                for($i = 2020; $i >= 1; $i--){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <br>
        <label for="hour" style="margin-right: 207px">Time: </label>
        <select name="hour">
            <?php
                for($i = 0; $i <= 24; $i++){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <label for="minute"></label>
        <select name="minute">
            <?php
                for($i = 0; $i <= 60; $i++){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <label for="second"></label>
        <select name="second">
            <?php
                for($i = 0; $i <= 60; $i++){
                    print("<option>$i</option>");
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Submit" name="submitted">
        <input type="reset" value="Reset">
        <br>
        <hr>
    <?php
        if(isset($_POST['submitted'])){
                $name = $_POST['name'];
                $year = $_POST['year'];
                $month = $_POST['month'];
                $day = $_POST['day'];
                $hour = $_POST['hour'];
                $minute = $_POST['minute'];
                $second = $_POST['second'];
            
            print("Hi $name ! <br><br>");
            if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 !=0) && $month == 2 && $day >29){
                echo "Năm $year là năm nhuận<br/>";
                echo "Tháng $month năm $year có tối đa 29 ngày!<br/>";
            }
            else if($year % 4 != 0 || ($year % 100 == 0 && $year % 400 != 0) && $month == 2 && $day >28){
                echo "Tháng $month năm $year có tối đa 28 ngày! <br/>";
            }
            else if(($month == 4 ||$month == 6 ||$month == 9 ||$month == 11) && $day > 30){
                echo "Tháng $month có tối đa 30 ngày! <br/> ";
                
            }
            else if(($month == 1 ||$month == 3 ||$month == 5 ||$month == 7 ||$month == 8 ||
            $month == 10 ||$month == 12 )&& $day > 31){
                echo "Tháng $month có tối đa 31 ngày! <br/>";
            }
            else{
                echo "You have choose to have an appoitment on $hour:$minute:$second, $day/$month/$year <br/>";
                echo "<br/>";
                if($hour > 11){
                    $hour = $hour % 12;
                    echo "In 12 hour, the time and date is  $hour:$minute:$second PM, $day/$month/$year <br/>";
                }
                else
                    echo "In 12 hour, the time and date is  $hour:$minute:$second AM, $day/$month/$year <br/>";

                echo '<br>';
                    if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 !=0) && $month == 2){
                        echo "This month have 29 days <br/>";
                    }
                    else if($year % 4 != 0 || ($year % 100 == 0 && $year % 400 != 0) && $month == 2){
                        echo "This month have 28 days <br/>";
                    }
                    else if(($month == 4 ||$month == 6 ||$month == 9 ||$month == 11)){
                        echo "This month have 30 days <br/>";
                        
                    }
                    else if(($month == 1 ||$month == 3 ||$month == 5 ||$month == 7 ||$month == 8 ||
                    $month == 10 ||$month == 12 )){
                        echo "This month have 31 days  <br/>";
                    }
            }
        }
    ?>
    </form>
</body>
</html>