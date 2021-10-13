<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $name = 'ラーメン';
            $str = <<<EOD
            お昼になりました。　<br>
            $name を食べに行きましょう。
            EOD;
            
            echo $str;
        ?>
    </body>
</html>