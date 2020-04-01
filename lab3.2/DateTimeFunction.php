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
    $name1 = $_POST{"name1"};
    $name2 = $_POST{"name2"};

    // câu 1 : chuyển về định dạng đề bài cần
    $bday1 = date("l, F j, Y", strtotime($_POST{"bday1"}));
    $bday2 = date("l, F j, Y", strtotime($_POST{"bday2"}));

    // câu 2 : tính chênh lệch ngày ở đây

    $first_date = strtotime($_POST{"bday1"});
    $second_date = strtotime($_POST{"bday2"});
    $datediff = abs($first_date - $second_date);
   

    // câu 3 :  tính tuổi Name1,Name2 ở đây từ đó suy ra chênh lệch tuổi !
    
    $bday3 = new DateTime($_POST{"bday1"}) ;
    $bday4 = new DateTime($_POST{"bday2"}) ;
    $difference2 = $bday3->diff(date_create());
     $difference3 = $bday4->diff(date_create());
    
    ?>
    <table border="1">
        <tr>
            <td>Name1</td>
            <td><?php echo $name1  ?></td>
        </tr>
        <tr>
            <td>Name2</td>
            <td><?php echo $name2  ?></td>
        </tr>

        <tr>
            <td>Birthday1</td>
            <td><?php echo $bday1  ?></td>
        </tr>
        <tr>
            <td>Birthday2</td>
            <td><?php echo $bday2  ?></td>
        </tr>
        
        <tr>
            <td>Chênh lệch ngày </td>
            <td><?php echo floor($datediff / (60*60*24)). ' ngày' ?></td>
        </tr>
        <tr>
            <td>Tuổi <?php echo $name1  ?> </td>
            <td><?php echo $difference2->y  ?></td>
        </tr>
        <tr>
            <td>Tuổi <?php echo $name2  ?> </td>
            <td><?php echo  $difference3->y ?></td>
        </tr>

        <tr>
            <td>Chênh lệch tuổi </td>
            <td><?php echo  abs($difference2->y - $difference3->y)?></td>
        </tr>

    </table>
</body>
</html>