<?php


            function displayLink($document,$naam,$vak){
                
                //$document = naam van het document
                // $naam = de naam van de link
                // $vak = de subfolder gevolgd door een slash (leeg laten als het in de root map van docs staat)
                

            $fulltext = '<a><div class="pdfDownload"><a href="./docs/'.$vak.$document.'"><img class="image" style="vertical-align:middle" src="./Images/Icons/pdfIcon.png" alt="download document">'.$naam.'</div></a>';
            echo $fulltext;   
    

    
}?>
