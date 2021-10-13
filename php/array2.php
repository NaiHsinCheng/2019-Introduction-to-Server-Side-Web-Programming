<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $bstone = array('ガーネット','アメシスト','アクアマリン','ダイヤモンド',
                            'エメラルト','パール','ルビー','ペリドット',
                            'サファイア','オパール','トパーズ','ターコイス');
            
            $birth=3;
            
            echo '私は',$birth,'月生まれです<br>';
            echo '誕生石は',$bstone[$birth-1],'です。';
           
        ?>
    </body>
</html>