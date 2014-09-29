<!doctype html>

<html lang = "en">
    <head>
        <title>Portfolio</title>
        <?php include 'php/standardMeta.php' ?>

        <script type="text/javascript"><!--
function ReplaceContentInContainer(id, content) {
                var container = document.getElementById(id);
                container.innerHTML = content;
            }
//--></script>


    </head>
    <body>
        <div id="big_wrapper">
            <header id="top_header"><?php include 'php/Head.php' ?></header>
            <div id="new_div">  
                <section id="main_section">
                    <article >
                        <?php
                        include 'php/Test.php';
                        ?>


                        <div id="about"><img class="image" src="Images/Menu/CV.png" align="right"><h1>Over mij:<br></h1><p>Mijn naam is Erik Miltenburg. Ik zit momenteel op de Haagse hogeschool in Delft waar ik werktuigbouwkunde studeer.<br>Hiervoor heb ik informatica gestudeerd in Amsterdam. Maar tijdens die studie ben ik erachter gekomen dat werktuigbouwkunde mij veel meer boeit.<br>Als ik klaar ben met deze studie wil ik graag in de energiesector gaan werken.</p><br><h1>Mijn hobbies:</h1><p>In mijn vrije tijd rij ik graag motor. Ik heb al meerdere mooie vakanties met de motor achter de rug.<br>Hiernaast heb ik ook een passie voor oude machines, en dan vooral stoommachines. Ik probeer zo veel mogelijk stoomgemalen in nederland te bezoeken wanneer deze op stoom zijn. <br>Naast stoomgemalen bezoek ik ook graag andere industriële gebouwen, zoals moderne energiecentrales.<br>Ookal ben ik gestopt met informatica, ik vind het wel erg leuk om te programmeren, waar ik dus ook nog steeds veel tijd aan besteed.</p></div>




                        <a href="CV.php"><div class="workshop"><div class="innerWorkshop"><h1>CV</h1><img class="image" src="Images/Menu/CV.png"></div></div></a>

                        <a href="COVA.php"><div class="workshop"><div class="innerWorkshop"><h1>Bedrijfscommunicatie</h1><p>&nbsp &nbsp &nbsp presentatiescript</p></div></div></a>
                        <a href="SLB.php"><div class="workshop"><div class="innerWorkshop"><h1>SLB</h1><p>&nbsp &nbsp &nbsp Persoonlijk ontwikkelings plan</p><p>&nbsp &nbsp &nbsp SWOT analyse</p></div></div></a>
                        <a href=""><div class="workshop"><div class="innerWorkshop"><h1>Social media</h1></div></div></a>
                        <a href="orientatie.php"> <div class="workshop"><div class="innerWorkshop"><h1>Project "vouwfiets"</h1></div></div></a>
                        <a target="blank" href="https://github.com/e-miltenburg?tab=repositories"><div class="workshop"><div class="innerWorkshop"><h1>Github projects</h1><img class="image" src="Images/Menu/github logo.png"></div></div></a>

                    </article>

                </section>
            </div>
            <footer id="the_footer"><?php include 'php/Footer.php' ?></footer>
        </div>
    </body>
</html>
