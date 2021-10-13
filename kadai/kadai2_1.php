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
            
            echo '人物5人のパーソナルデータを以下に表示します。<br>';
            echo '名前 性別 年齢 身長 体重<br>';
            foreach($name as $value){
                echo $value,' ',$grand[$value],' ',$old[$value],', ',$high[$value],', ',$weight[$value],'<br>';
            }
            
        ?>
    </body>
</html>