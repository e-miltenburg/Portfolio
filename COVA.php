<!doctype html>

<html lang = "en">
    <head>
        <title>Portfolio</title>

        <?php
        include 'PHP/standardMeta.php';
        include 'PHP/classes.php'

        /* function displayLink($document,$naam,$vak){

          $fulltext = '<div class="pdfDownload"><a href="./docs/'.$vak.$document.'"><img class="image" style="vertical-align:middle" src="./Images/Icons/pdf-icon.png" alt="download document">'.$naam.'</a></div>';
          echo $fulltext;
          } */
        ?>
    </head>
    <body>
        <div id="big_wrapper">
            <header id="top_header"><?php include 'PHP/Head.php' ?></header>
            <div id="new_div">  
                <section id="main_section">
                    <article>

                        <h1>Bedrijfscommunicatie</h1><br>


                        <h2>Blok 1</h2>
                        
                        <?php displayLink('presentatiescript.pdf', 'presentatiescript', 'COVA/blok1/'); ?>
                        <?php displayLink('Communicatie.pdf', 'Communicatie', 'COVA/blok1/'); ?>
                        <?php displayLink('OefenrapportNL.pdf', 'Rapport (nederlands)', 'COVA/blok1/'); ?>
                        <?php displayLink('OefenrapportEN.pdf', 'Rapport (engels)', 'COVA/blok1/'); ?>
                        
                        <h2>Blok 2</h2>

                        <?php displayLink('verslagprojectmatigcreeren.pdf', 'Projectmatig creëren', 'COVA/blok2/'); ?>
                        <?php displayLink('Onderhandelen.pdf', 'Onderhandelen', 'COVA/blok2/'); ?>
                        <?php displayLink('Vergaderen.pdf', 'Vergaderen', 'COVA/blok2/'); ?>
                        <?php displayLink('Conflicthantering.pdf', 'Conflicthantering', 'COVA/blok2/'); ?>

                        <h2>Blok 3</h2>

                        <?php displayLink('Argumenteren.pdf', 'Argumenteren', 'COVA/blok3/'); ?>

                    </article>
                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
