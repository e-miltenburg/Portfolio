<!doctype html>

<html lang = "en">
    <head>
        <?php include 'PHP/standardMeta.php';
        include 'PHP/docDownload.php'
        ?>
    </head>
    <body>
        <div id="big_wrapper">
            <header id="top_header"><?php include 'PHP/Head.php' ?></header>
            <div id="new_div">  
                <section id="main_section">
                    <article >
                        <div class="standardframe"><div class="innerFrame">
                                <h1>Studieloopbaanbegeleiding</h1><br>
                                <h1>Blok 1</h1>
                                <?php
                                displayLink('PopMiltenburgB1.pdf', 'Persoonlijk ontwikkelingsplan', 'SLB/blok1/');
                                displayLink('SwotMiltenburgB1.pdf', 'SWOT analyse', 'SLB/blok1/');
                                displayLink('360MiltenburgB1.pdf', '360 graden feedback', 'SLB/blok1/');
                                ?>
                                <h1>Blok 2</h1>
                                <?php
                                displayLink('PopMiltenburgB2.pdf', 'Persoonlijk ontwikkelingsplan', 'SLB/blok2/');
                                displayLink('PapMiltenburgB2.pdf', 'Persoonlijk activiteiten plan', 'SLB/blok2/');
                                displayLink('360MiltenburgB2.pdf', '360 graden feedback', 'SLB/blok2/');
                                ?>
                                <h1>Blok 3</h1>
                                <?php 
                                displayLink('PapMiltenburgB3.pdf', 'Persoonlijk activiteiten plan', 'SLB/blok3/'); 
                                displayLink('360MiltenburgB3.pdf', '360 graden feedback', 'SLB/blok3/');
                                displayLink('PopMiltenburgB3.pdf','Persoonlijk ontwikkelingsplan','SLB/blok3/');
                                ?>
                            </div></div>
                    </article>
                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
