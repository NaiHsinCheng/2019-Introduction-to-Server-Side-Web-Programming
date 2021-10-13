<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $days['morning']='朝';
            $days['afternoon']='昼';
            $days['night']='夜';
            
            echo $days['morning'],'になりました。<br>';
            echo $days['afternoon'],'になりました。<br>';
            echo $days['night'],'になりました。<br>';
            
        ?>
    </body>
</html>