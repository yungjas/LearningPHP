<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>String manipulation</title>
    </head>
    <body>
        <!--echo and html elements can be used together -->
        <!--substr(variable, staring index, length), length is an optional parameter -->
        <?php
            $phrase = "Save Me";
            $phrase2 = "Stan EXID";
            
            $phrase[0] = "B";
            echo $phrase;
            echo str_replace("Stan", "Queens", $phrase2);
            echo substr($phrase, 5)
           
        ?>
    </body>
</html>