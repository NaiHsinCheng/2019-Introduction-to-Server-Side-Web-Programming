<?php
    header('Content-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            
             $menyu=array('チョコレートシューケーキ'=>600,
                    'ストロベリーシューケー'=>800,
                    'グリーンティーシューケー'=>700,
                    'ガトーショコラ'=>650,
                    '抹茶シフォン'=>750,
                    'チーズケーキ'=>700,
                    'ホットケーキ'=>460);
            
            $F = $_POST['food'];
            $P = $_POST['place'];
            $F = htmlspecialchars($F, ENT_QUOTES,'UTF-8');
            $P = htmlspecialchars($P, ENT_QUOTES,'UTF-8');
            
            $Food = explode(",", $F);  //組込み関数
            
            function money($ff,$mm,$pp){
                    $money = 0;
                    foreach($ff as $value){
                        $money+=$mm[$value];
                    }
                    if($pp =='テイクアウト')
                        $money=$money*1.08;
                    else
                        $money=$money*1.1;
                        
                    return $money;
            }   //ユーザ定義関数
            
            function out($ff,$mm,$pp){
                
                echo '注文履歴：<br>';
                foreach($ff as $value){
                        echo $value,' ',$mm[$value],'円<br>';
                }
                if($pp =='テイクアウト')
                       echo 'テイクアウト：消費税は８％です。<br>';
                else
                       echo '店内：消費税は１０％です。<br>';
                
            }
            
            
            out($Food,$menyu,$P);
            echo '<br><br>合計/',count($Food),'点  ',money($Food,$menyu,$P),'円です。<br>';
           
        ?>
    </body>
</html>