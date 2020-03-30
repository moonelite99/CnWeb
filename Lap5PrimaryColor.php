<html>
    <body>
    <?php     
        function isPrimaryColor($color)     
        {     
            // $color is a copy     
            switch ($color) {     
                case 'red':     
                case 'blue':     
                case 'green':     
                return true;     
                break;     
                default:     
                return false;     
        }     
        }     
            
        $color = 'blue';     
        if (isPrimaryColor($color)) {     
        echo $color . ' is a primary color';     
        } else {     
        echo $color . ' is not a primary color';     
        }     
        ?>
    </body>
</html>