<?php
    header('COntent-type:text/html;charset=UTF-8');
?>
<html>
    <body>
        <?php
            $bstone = array('1' => 1,'2' => 2,'3' => 3,'4' => 4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11,'12'=>12);
            foreach($bstone as $key =>$value){
                echo $value,' is ',$key,' month stone.<br>';
            }
        ?>
        </body>
        </html>