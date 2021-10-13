<?php
  header('Content-type:text/html;charset=UTF-8');
 ?>
 <html>
     <body>
         <?php
         $str = '猫';
         
         echo $str,'です。<br>',PHP_EOL;
         switch($str){
             case '犬':
                 echo 'ワンと鳴きます。';
                break;
            case '猫':
                echo 'ニャーと鳴きます。';
                break;
            case '':
                 echo 'もーと鳴きます。';
                 break;
            default:
                echo 'どのように鳴くのかな？';
         }
         ?>
    </body>
</html>
