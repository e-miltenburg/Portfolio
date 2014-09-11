<?php

    function getZooi() {
        static $i = 0;
        if ($i == 0) {
            /* samengevat */
            $i = 1;
            echo'beknopt';
            return $i;           
            
            
        } if($i ==1){
            $i = 0;
            echo 'uitgebreid';
            return $i;
        }
    }
?>
