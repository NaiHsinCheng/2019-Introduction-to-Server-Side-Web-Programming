<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            
            $check = $_POST['year'];
            $check = htmlspecialchars($check, ENT_QUOTES,'UTF-8');
            echo 'あなたが入力した',$check,'年は, ',PHP_EOL;
            if( $check % 4 == 0 && !($check % 100 == 0 && $check % 400 != 0))
                echo 'うるう年です。<br>',PHP_EOL;
            else
                echo 'うるう年ではありません(平年です)。<br>',PHP_EOL;
        ?>
    </body>
</html>