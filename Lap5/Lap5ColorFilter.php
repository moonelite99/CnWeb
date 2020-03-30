<html>
    <body>
    <?php     
        class ColorFilter {     
        var $color;     
        function ColorFilter($color)     
        {     
            // $color is a copy     
            $this->color = $color;     
            // $this->color is a copy of a copy     
        }     
        function isPrimaryColor()     
        {     
            switch ($this->color) {     
            case 'red':     
            case 'blue':     
            case 'green':     
                return true;     
                break;     
            default:     
                return false;     
            }     
        }     
        }     
            
        $color = 'blue';     
        $filter = new ColorFilter($color);     
        if ($filter->isPrimaryColor() ) {     
            echo ($color.' is a primary color');     
        } else {     
            echo ($color.' is not a primary color');     
        }     
?>
    </body>
</html>