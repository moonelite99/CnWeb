<link rel="stylesheet" href="style.css">
<form action="sort.php" method='POST'>
        <input type="submit" name ="sorttype" value="Files list sort by file name">
        <input type="submit" name ="sorttype" value="Files list sort by upload time">
</form>
<?php

date_default_timezone_set("Asia/Saigon");
$dir = "upload/";
$a = scandir($dir);
if(isset($_POST['sorttype'])){
    $sorttype = $_POST['sorttype'];
    if($sorttype == 'Files list sort by file name'){
        echo'Sort by file name';
        echo '<ol>';
        foreach($a as $value){
        if($value == '.' || $value == '..') continue;
        echo'<li>'
        . 'Name: '. $value . '<br>'
        . 'Size: '. filesize("upload/".$value).' Byte' .'<br>'
        . 'Uploaded date: ' . date("d/m/Y H:i:s.", filemtime("upload/" . $value)) . '<br><br>'
        . '</li>' ;
        }
        echo '</ol>';
    }
    
    if($sorttype == 'Files list sort by upload time'){
        $files = glob("upload/*");
    $count = count($files);
    $i= 0;
    $j = 1;
    while($i < $count){
        if(!isset($files[filemtime($files[$i])])){
            $files[filemtime($files[$i])] = $files[$i];
            unset($files[$i]);
        }
        else{
            $files[filemtime($files[$i]) + $j++] = $files[$i];
            unset($files[$i]);
        }
        $i++;
    }
    krsort($files);
    echo'Sort by upload time';
    echo '<ol>';
    foreach($files as $value){
        // if($value == '.' || $value == '..') continue;
        echo'<li>'
        . 'Name: '. basename($value) . '<br>'
        . 'Size: '. filesize($value).' Byte' .'<br>'
        . 'Uploaded date: ' . date("d/m/Y H:i:s.", filemtime($value)) . '<br><br>'
        . '</li>' ;
    }
    }
    
}

?>