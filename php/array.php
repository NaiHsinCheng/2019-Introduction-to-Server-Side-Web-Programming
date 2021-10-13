<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $arr=array_fill(0,3,'おやすみ');
            
            echo '要素数は',count($arr),'<br>';
            echo $arr[0],'<br>';
            echo $arr[1],'<br>';
            echo $arr[2],'<br>';
            
        ?>
    </body>
</html>