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
        
        <script type="text/javascript">
var collapseDivs, collapseLinks;

function createDocumentStructure (tagName) {
  if (document.getElementsByTagName) {
    var elements = document.getElementsByTagName(tagName);
    collapseDivs = new Array(elements.length);
    collapseLinks = new Array(elements.length);
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var siblingContainer;
      if (document.createElement && 
          (siblingContainer = document.createElement('div')) &&
          siblingContainer.style) 
      {
        var nextSibling = element.nextSibling;
        element.parentNode.insertBefore(siblingContainer, nextSibling);
        var nextElement = elements[i + 1];
        while (nextSibling != nextElement && nextSibling != null) {
          var toMove = nextSibling;
          nextSibling = nextSibling.nextSibling;
          siblingContainer.appendChild(toMove);
        }
        siblingContainer.style.display = 'none';
        
        collapseDivs[i] = siblingContainer;
        
        createCollapseLink(element, siblingContainer, i);
      }
      else {
        // no dynamic creation of elements possible
        return;
      }
    }
    createCollapseExpandAll(elements[0]);
  }
}

function createCollapseLink (element, siblingContainer, index) {
  var span;
  if (document.createElement && (span = document.createElement('span'))) {
    span.appendChild(document.createTextNode(String.fromCharCode(160)));
    var link = document.createElement('a');
    link.collapseDiv = siblingContainer;
    link.href = '#';
    link.appendChild(document.createTextNode('Over mij'));
    link.onclick = collapseExpandLink;
    collapseLinks[index] = link;
    span.appendChild(link);
    element.appendChild(span);
  }
}

function collapseExpandLink (evt) {
  if (this.collapseDiv.style.display == '') {
    this.parentNode.parentNode.nextSibling.style.display = 'none';
    this.firstChild.nodeValue = 'Over mij';
  }
  else {
    this.parentNode.parentNode.nextSibling.style.display = '';
    this.firstChild.nodeValue = 'Over mij';
  }

  if (evt && evt.preventDefault) {
    evt.preventDefault();
  }
  return false;
}

function createCollapseExpandAll (firstElement) {
  var div;
  if (document.createElement && (div = document.createElement('div'))) {
    var link = document.createElement('a');
    link.href = '#';
    /*link.appendChild(document.createTextNode('expand all'));*/
    link.onclick = expandAll;
    div.appendChild(link);
    div.appendChild(document.createTextNode(' '));
    link = document.createElement('a');
    link.href = '#';
    /*link.appendChild(document.createTextNode('collapse all'));*/
    link.onclick = collapseAll;
    div.appendChild(link);
    firstElement.parentNode.insertBefore(div, firstElement);
  }
}

function expandAll (evt) {
  for (var i = 0; i < collapseDivs.length; i++) {
    collapseDivs[i].style.display = '';
    collapseLinks[i].firstChild.nodeValue = 'collapse';
  }
  
  if (evt && evt.preventDefault) {
    evt.preventDefault();
  }
  return false;
}

function collapseAll (evt) {
  for (var i = 0; i < collapseDivs.length; i++) {
    collapseDivs[i].style.display = 'none';
    collapseLinks[i].firstChild.nodeValue = 'expand';
  }
  
  if (evt && evt.preventDefault) {
    evt.preventDefault();
  }
  return false;
}
</script>
<script type="text/javascript">
window.onload = function (evt) {
  createDocumentStructure('h1');
}
</script>

 
        
        
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

                        <div id="about"><h1 id="over_mij"><br></h1><img class="image" src="Images/Menu/CV.png" align="right"><p>Mijn naam is Erik Miltenburg. Ik zit momenteel op de Haagse hogeschool in Delft waar ik werktuigbouwkunde studeer.<br>Hiervoor heb ik informatica gestudeerd in Amsterdam. Maar tijdens die studie ben ik erachter gekomen dat werktuigbouwkunde mij veel meer boeit.<br>Als ik klaar ben met deze studie wil ik graag in de energiesector gaan werken.</p><br><h2>Mijn hobbies:</h2><p>In mijn vrije tijd rij ik graag motor. Ik heb al meerdere mooie vakanties met de motor achter de rug.<br>Hiernaast heb ik ook een passie voor oude machines, en dan vooral stoommachines. Ik probeer zo veel mogelijk stoomgemalen in nederland te bezoeken wanneer deze op stoom zijn. <br>Naast stoomgemalen bezoek ik ook graag andere industriële gebouwen, zoals moderne energiecentrales.<br>Ookal ben ik gestopt met informatica, ik vind het wel erg leuk om te programmeren, waar ik dus ook nog steeds veel tijd aan besteed.</p></div>

                        <p>&nbsp<br></p>


                        <a href="CV.php"><div class="workshop"><div class="innerWorkshop"><h2>CV</h2><img class="image" src="Images/Menu/CV.png"></div></div></a>

                        <a href="COVA.php"><div class="workshop"><div class="innerWorkshop"><h2>Bedrijfscommunicatie</h2><p>
                                    &nbsp &nbsp &nbsp Blok 1<br>
                                    &nbsp &nbsp &nbsp Blok 2<br>
                                    &nbsp &nbsp &nbsp Blok 3<br>
                                    </p></div></div></a>
                        <a href="SLB.php"><div class="workshop"><div class="innerWorkshop"><h2>SLB</h2>
                                    <p>&nbsp &nbsp &nbsp Blok 1<br>
                                        &nbsp &nbsp &nbsp Blok 2<br>
                                    &nbsp &nbsp &nbsp Blok 3<br></p></div></div></a>
                        <a href=""><div class="workshop"><div class="innerWorkshop"><h2>Social media</h2></div></div></a>
                        <a href="orientatie.php"> <div class="workshop"><div class="innerWorkshop"><h2>Projecten</h2></div></div></a>
                        <a target="blank" href=""><div class="workshop"><div class="innerWorkshop"><h2></h2></div></div></a>

                    </article>
                </section>
            </div>
            <footer id="the_footer"><?php include 'PHP/Footer.php' ?></footer>
        </div>
    </body>
</html>
