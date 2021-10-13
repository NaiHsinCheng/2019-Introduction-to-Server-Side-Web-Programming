<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            
            echo '2001 年~2400 年までのうるう年を以下に表示します。<br>';
            for($i = 2001; $i <= 2400; $i++){
                if( $i % 4 == 0 && !($i % 100 == 0 && $i % 400 != 0))
                    echo $i,' ';
            }

        ?>
    </body>
</html>