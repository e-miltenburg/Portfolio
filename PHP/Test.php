<?php

    function getZooi() {
        static $i = 0;
        if ($i == 0) {
            /* samengevat */
            $i = 1;
            echo'beknopt';
            
            
        } else{
            $i = 0;
            echo 'uitgebreid';
            
        }
    }


?>
