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
                                <h1>Bedrijfscommunicatie</h1><br>
                                <h2>Blok 1</h2>
                                <?php
                                displayLink('presentatiescript.pdf', 'presentatiescript', 'COVA/blok1/');
                                displayLink('Communicatie.pdf', 'Communicatie', 'COVA/blok1/');
                                displayLink('OefenrapportNL.pdf', 'Rapport (nederlands)', 'COVA/blok1/');
                                displayLink('OefenrapportEN.pdf', 'Rapport (engels)', 'COVA/blok1/');
                                ?>
                                <h2>Blok 2</h2>
                                <?php
                                displayLink('verslagprojectmatigcreeren.pdf', 'Projectmatig creëren', 'COVA/blok2/');
                                displayLink('Onderhandelen.pdf', 'Onderhandelen', 'COVA/blok2/');
                                displayLink('Vergaderen.pdf', 'Vergaderen', 'COVA/blok2/');
                                displayLink('Conflicthantering.pdf', 'Conflicthantering', 'COVA/blok2/');
                                ?>
                                <h2>Blok 3</h2>
                                <?php displayLink('Argumenteren.pdf', 'Argumenteren', 'COVA/blok3/'); ?>
                            </div></div>
                    </article>
                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
