<!doctype html>

<html lang = "en">
    <head>
        <title>Portfolio</title>
        <?php include 'PHP/standardMeta.php' ?>

        <script type="text/javascript"><!--
function ReplaceContentInContainer(id, content) {
                var container = document.getElementById(id);
                container.innerHTML = content;
            }
//--></script>


    </head>
    <body>
        <div id="big_wrapper">
            <header id="top_header"><?php include 'PHP/Head.php' ?></header>
            <div id="new_div">  
                <section id="main_section">
                    <article >
                        <?php
                        include 'PHP/Test.php';
                        ?>


                        <div id="about"><img class="image" src="Images/Menu/CV.png" align="right"><h1>Over mij:<br></h1><p>Mijn naam is Erik Miltenburg. Ik zit momenteel op de Haagse hogeschool in Delft waar ik werktuigbouwkunde studeer.<br>Hiervoor heb ik informatica gestudeerd in Amsterdam. Maar tijdens die studie ben ik erachter gekomen dat werktuigbouwkunde mij veel meer boeit.<br>Als ik klaar ben met deze studie wil ik graag in de energiesector gaan werken.</p><br><h1>Mijn hobbies:</h1><p>In mijn vrije tijd rij ik graag motor. Ik heb al meerdere mooie vakanties met de motor achter de rug.<br>Hiernaast heb ik ook een passie voor oude machines, en dan vooral stoommachines. Ik probeer zo veel mogelijk stoomgemalen in nederland te bezoeken wanneer deze op stoom zijn. <br>Naast stoomgemalen bezoek ik ook graag andere industriële gebouwen, zoals moderne energiecentrales.<br>Ookal ben ik gestopt met informatica, ik vind het wel erg leuk om te programmeren, waar ik dus ook nog steeds veel tijd aan besteed.</p></div>




                        <a href="CV.php"><div class="workshop"><div class="innerWorkshop"><h1>CV</h1><img class="image" src="Images/Menu/CV.png"></div></div></a>

                        <a href="COVA.php"><div class="workshop"><div class="innerWorkshop"><h1>Bedrijfscommunicatie</h1><p>&nbsp &nbsp &nbsp presentatiescript<br>
                                    &nbsp &nbsp &nbsp Argumenteren<br>
                                    &nbsp &nbsp &nbsp Communicatie<br>
                                    &nbsp &nbsp &nbsp Conflicthantering<br>
                                    &nbsp &nbsp &nbsp Raamwerk (Nederlands)<br>
                                    &nbsp &nbsp &nbsp Onderhandelen<br>
                                    &nbsp &nbsp &nbsp Vergaderen<br></p></div></div></a>
                        <a href="SLB.php"><div class="workshop"><div class="innerWorkshop"><h1>SLB</h1>
                                    <p>&nbsp &nbsp &nbsp Blok 1<br>
                                        &nbsp &nbsp &nbsp Blok 2<br>
                                    &nbsp &nbsp &nbsp Blok 3<br></p></div></div></a>
                        <a href=""><div class="workshop"><div class="innerWorkshop"><h1>Social media</h1></div></div></a>
                        <a href="orientatie.php"> <div class="workshop"><div class="innerWorkshop"><h1>Projecten</h1></div></div></a>
                        <a target="blank" href=""><div class="workshop"><div class="innerWorkshop"><h1></h1></div></div></a>

                    </article>

                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
