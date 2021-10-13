<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $days=array('morning'=>'朝','afternoon'=>'昼','night'=>'夜');
            
            echo $days['morning'],'になりました。<br>';
            echo $days['afternoon'],'になりました。<br>';
            echo $days['night'],'になりました。<br>';
            
        ?>
    </body>
</html>