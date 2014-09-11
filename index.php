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

                        <a href="javascript:ReplaceContentInContainer('about','<?php $i= getZooi() ?>')"><div id="about"><?php $i = getZooi($i) ?></div></a>











                        <a href="https://github.com/e-miltenburg?tab=repositories"><div class="workshop"><div class="innerWorkshop"><h1>Github projects</h1><img class="image" src="Images/Menu/github logo.png"></div></div></a>
                        <a href="orientatie.php"> <div class="workshop"><div class="innerWorkshop"><p>test</p></div></div></a>
                        <div class="workshop"><div class="innerWorkshop"></div></div>
                    </article>

                </section>
            </div>
            <footer id="the_footer"><?php include 'php/Footer.php' ?></footer>
        </div>
    </body>
</html>
