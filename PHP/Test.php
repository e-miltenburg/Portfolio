<?php

    function getZooi() {
        static $i = 0;
        if ($i == 0) {
            /* samengevat */
            $i = 1;
            echo'Dit is meer informatie. Maar het ziet er niet echt uit alsof het meer informatie is, eerder minder. Maar als ik niet snel stop met typen zal deze tekst wel langer worden als de beknopte tekst. Dat moment is denk ik nu gekomen. Hier staat nu sowieso meer tekst dan dat er eerst stond. Maar het heeft een stuk minder inhoud, aangezien het alleen maar praat over dat de tekst korter en daarna langer is.';
            return $i;           
            
            
        } if($i ==1){
            $i = 0;
            echo 'Hier komt een korte beschrijving te staan over mij. Zoals bijvoorbeeld welke studie ik volg, mijn leeftijd enz. Als hierop geklikt wordt komt er meer informatie tevoorschijn.';
            return $i;
        }
    }
?>
