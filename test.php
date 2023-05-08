<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>
        <h2>Order recieved!<br><br>order dtails</h2>
        <br>
        color: <?php 
                    $c= $_GET["color"];
                    if ($c == "pink")
                        echo "we have". $c ."in stock";
                    else
                        echo "we dont have this color" ?> <br>
        size: <?php $s= $_GET["size"];
                    if ($s == "xs")
                        echo "we have". $s ."in stock";
                    else
                        echo "we dont have this size" ?> <br>
        kind: <?php $k= $_GET["kind"];
                    if ($k == "niky")
                        echo "we have". $k ."in stock";
                    else
                        echo "we dont have this kind" ?> <br>
    </body>
</html>