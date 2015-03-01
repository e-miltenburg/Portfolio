<!doctype html>
<html lang = "en">
    <head>
        <?php
        include 'PHP/standardMeta.php';
        include 'PHP/docDownload.php'
        ?>
    </head>
    <body>
        <div id="big_wrapper">
            <header id="top_header"><?php include 'PHP/Head.php' ?></header>
            <div id="new_div">  
                <section id="main_section">
                    <article>
                        <div class="standardframe"><div class="innerFrame">      
                                <h1>Projecten</h1>

                                <p>Op deze pagina staat een selectie van de opdrachten die ik gemaakt heb voor mijn opleiding.</p>

                                <h1>Blok 1</h1>
                                <div style="padding: 10px;"><h2>Innoveer de vouwfiets</h2>
                                    <p>Dit was het eerste groepsproject dat ik heb gemaakt voor de Haagse hogeschool. Wij hadden de opdracht gekregen om de maten van een vouwfiets te reduceren, met als basis de Dahon SUV. Hieronder staan een aantal documenten die gemaakt zijn voor dit project.
                                        Het evaluatierapport is achteraf door mij opgesteld. Dit rapport bevat alle evaluatierapporten en formulieren. Het leek mij beter om deze samen te voegen tot 1 rapport, waarin alles mooi is samengevat. Het rapport was ook een mooie oefening voor het maken van professionele rapporten.</p>
                                    <?php
                                    displayLink('B1ProjectEindrapportErik.pdf', 'Eindrapport', 'Projecten/blok1/Vouwfiets/');
                                    displayLink('B1PosterPresentatieErik.pdf', 'Posterpresentatie', 'Projecten/blok1/Vouwfiets/');
                                    displayLink('B1ProjectEvaluatierapportErik.pdf', 'Evaluatierapport', 'Projecten/blok1/Vouwfiets/');
                                    ?></div>
                                <h1>Blok 2</h1>
                                <div style="padding: 10px;"><h2>Eindopdracht CAE (Computer Aided Engineering)</h2>
                                    <p>Hieronder staat mijn eindopdracht voor CAE. Ik heb ervoor gekozen om een modelbouw stoommachine na te modelleren, eentje die ik zelf heb. Deze stoommachine heb ik uit elkaar gehaald, gemeten, en nagemodelleerd. Voordat ik aan de opdracht mocht beginnen moest ik een A4'tje maken waarop ik mijn eindopdracht kort beschreef, hierin staat nog meer informatie over dit project.</p>
                                    <?php
                                    displayLink('B2voorbereidingCAEErik.pdf', 'Pitchrapport', 'Projecten/blok2/CAE/');
                                    displayLink('B2EindopdrachtCAEErik.pdf', 'het volledige rapport voor CAE', 'Projecten/blok2/CAE/');
                                    ?>

                                </div>

                                <h1>Blok 3</h1>

                            </div></div>
                    </article>
                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
