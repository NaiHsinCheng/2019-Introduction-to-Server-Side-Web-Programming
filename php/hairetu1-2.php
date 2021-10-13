<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $days[]='朝';
            $days[]='昼';
            $days[]='夜';
            
            echo $days[0],'になりました。<br>';
            echo $days[1],'になりました。<br>';
            echo $days[2],'になりました。<br>';
            
        ?>
    </body>
</html>