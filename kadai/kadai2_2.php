<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            
            $name = array('佐藤','鈴木','高橋','田中','伊藤');
            $grand = array('佐藤'=>'男性','鈴木'=>'女性','高橋'=>'女性','田中'=>'男性','伊藤'=>'男性');
            $old = array('佐藤'=>30,'鈴木'=>20,'高橋'=>17,'田中'=>75,'伊藤'=>51);
            $high = array('佐藤'=>175,'鈴木'=>155,'高橋'=>160,'田中'=>163,'伊藤'=>170);
            $weight = array('佐藤'=>68,'鈴木'=>49,'高橋'=>52,'田中'=>62,'伊藤'=>70);
            
            
            $G = $_POST['grand'];
            $OS = $_POST['old'][0];
            $OB = $_POST['old'][1];
            $HS = $_POST['high'][0];
            $HB = $_POST['high'][1];
            $WS = $_POST['weight'][0];
            $WB = $_POST['weight'][1];
            

            $G = htmlspecialchars($G, ENT_QUOTES,'UTF-8');
            $OS = htmlspecialchars($OS, ENT_QUOTES,'UTF-8');
            $OB = htmlspecialchars($OB, ENT_QUOTES,'UTF-8');
            $HS = htmlspecialchars($HS, ENT_QUOTES,'UTF-8');
            $HB = htmlspecialchars($HB, ENT_QUOTES,'UTF-8');
            $WS = htmlspecialchars($WS, ENT_QUOTES,'UTF-8');
            $WB = htmlspecialchars($WB, ENT_QUOTES,'UTF-8');
            
            echo '選択した条件を満たす人物を以下に表示します。<br>',PHP_EOL;
            
            
            foreach($name as $value){
                if( $grand[$value]==$G && $old[$value]>=$OS && $old[$value]<=$OB && $high[$value]>=$HS && $high[$value]<=$HB && $weight[$value]>=$WS && $weight[$value]<=$WB )
                    echo $value,' ',$grand[$value],' ',$old[$value],', ',$high[$value],', ',$weight[$value],'<br>';
            }
           
        ?>
    </body>
</html>