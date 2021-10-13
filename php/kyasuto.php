<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $var = 123.456;
            echo '$varは',$var,'<br>';
            echo '$varは',(int)$var,'<br>';
            echo '$varは',$var,'<br>';

        ?>
    </body>
</html>