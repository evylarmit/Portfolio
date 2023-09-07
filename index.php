<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/weather.js" defer></script>
    <script src="javascript/clock.js" defer></script>
    <script src="javascript/script.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/section1.css">
    <link rel="stylesheet" href="css/section2.css">
    <link rel="stylesheet" href="css/section3.css">
    <link rel="stylesheet" href="css/section4.css">
    <link rel="stylesheet" href="css/section5.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body onload="startTime()">
    <header>
        <div class="navbar">
            <ul class="header-links">
                <li><a href="#section1">About Me</a></li>
                <li><p>-</p></li>
                <li><a href="#section2">Mijn Projecten</a></li>
                <li><p>-</p></li>
                <li><a href="#section4">Mijn CV</a></li>
                <li><p>-</p></li>
                <li><a href="#section5">Contact Me</a></li>
            </ul>
        </div>
        <div class="logo">
        <h1>EL</h1>     
        </div>
        <h1 class="header-text">Evy Larmit</h1>
        <h2 class="header-bottomtext">Front-end Developer</h2>
        <button class="header-button"><a href="">Contact Me!</a></button>
    </header>
    <section id="section1">
        <img src="img/me.jpg" alt="" class="section1-img1">
        <h1 class="section1-title">ABOUT ME</h1>
        <p class="section1-text"> 
            "Hi, ik ben Evy Larmit, 
                ik ben nu bezig met een opleiding op het Grafisch Lyceum Rotterdam. 
                Ook heb ik inspiratie om in Berlijn een master opleiding te doen. 
                Dit is een van mijn main goals, ook wil ik graag door studeren naar een HBO.
                De HBO wil ik het liefst versneld doen en dan is het plan om naar Berlijn te gaan.
                Ook ben ik erg geinspireerd door Creative Coding. En wil ik graag veel weten over coderen.
                Ik ben een echte go getter en ben een harde werker"
        </p>
    </section>
    <section id="section2">
        <h1 class="section2-title">MIJN PROJECTEN</h1>
        <div class="section2-links">
            <button class="tablinks" onclick="openTabs(event, 'Project 1')">Bestel je maaltijd  -</button>
            <button class="tablinks" onclick="openTabs(event, 'Project 2')">Build your Zoo  -</button>
            <button class="tablinks" onclick="openTabs(event, 'Project 3')">Formule 1</button>
        </div>
        <div id="Project 1" class="tabcontent">
            <img src="img/besteljemaaltijd.png" alt="" class="section2-video1">
            <button class="section2-btn"><a target="_blank" href="https://89612.stu.sd-lab.nl/beroeps/besteljemaaltijd/index.html">Bezoek de site!</a></button>
            <p class="section2-text"> "In dit project werd er samengewerkt met Yvanka, Dima en Shainy. Ik heb met dit projcet best veel geleerd over samen werken en goed communcatie. Zoals je kan zien aan de pagina kun je merken dat de home pagina en de rest van de paginas iets anders eruit zien. Dit komt vooral door slechte communcatie. Iemand was al begonnen aan de homepagina zonder dat we een design hadden en uiteindelijk was de code zo laat gestuurd dat we het niet meer konden veranderen. Volgende keer moeten we meer met elkaar praten en een beter plan van aanpak vormen. Ik ben wel erg blij det het uiteindelijk af is gekomen maar ik vind dat het beter had kunnen zijn."</p> 
        </div>
        <div id="Project 2" class="tabcontent">
            <img src="img/buildyourzoo.png" alt="" class="section2-video1">
            <button class="section2-btn"><a target="_blank" href="https://89612.stu.sd-lab.nl/beroeps/Build%20your%20zoo/Home/home.html">Bezoek de site!</a></button>
            <p class="section2-text"> "Dit project was ons eerste project ooit voor het vak beroeps. Dit project is gemaakt met Yvanka en Anne. Dit hebben we samengedaan in de loop van 5 weken. We hebben veel gewerkt met het design. Als ik op dit project terug kijk vond ik het heel leuk om samen te doen. We werken goed samen omdat we al vrienden waren. Toch denk ik als ik nu de kans had het design zeker anders gedaan. We wouden het erg kinderlijk houden maar ik denk dat de kleuren niet zo mooi zijn. Toch een mooi project en een goede eerste kans om samen te coderen."</p> 
        </div>
        <div id="Project 3" class="tabcontent">
            <div class="section2-video1"> </div>
            <button class="section2-btn"><a target="_blank" href="#">Bezoek de site!</a></button>
            <p class="section2-text"> "Ik heb dit project voor het eerste keer alleen moeten doen. En ik vondt het geweldig om zelf alle desingen te doen. Ik had een richtlijn voor wat het moest worden en het was super leuk om het te doen hoe ik dat wou. Ik heb veel plezier gehad in het coderen. Ik kwam er wel achter in dit project dat ik nog veel moet leren. Ik liep zelf vaak tegen dingen aan en had een beetje moeiten met javascript stukjes. Toch ben ik erg trots op wat ik heb gemaakt en ik zou het graag opnieuw doen en kijken hoeveel ik ben gegroeit en wat ik nu beter kan."</p> 
        </div>
    </section>
    <section id="section3">
        <!--Weer applicatie met temp en locatie en conditie-->
        <div class="section3_container">
            <div class="weer-applicatie">
                <h2 id="location"> </h2>
                <p id="condition"> </p>
                <p id="temperature"> </p>
            </div>
            <img id="weather-img" src="">
            <!--Dag applicatie met tijd een begroeting en datum-->
            <div class="day-applicatie">
                <h2 id="timeOfDay"> </h2>
                <p id="clock"> </p>
                <p id="date"> </p>
            </div>
            <input type="text" placeholder="Voer een locatie in" id="search-bar">
            <button id="search-btn">Zoek</button>
        </div>
    </section>
    <section id="section4">
        <h1 class="section4-title">MIJN CV</h1>
        <p class="section4-text"> "Hier naast in mijn CV te zien. Ik heb deze zelf gemaakt en er staan verschillende dingen op. Er staad een werkverleden. Ik hab namelijk in 2023 een stage gedaan bij de nationale bibliotheek ik denk dat ik echt een kijkje in het werkleven heb gekregen. Ik zat niet echt in de afdeling IT maar ik heb wel een paar intervieuws gehad met de afdelingen en verschillende werknemers. Daarvan heb ik vooral veel geleerd over hoe ze hun software gebruiken. Maar denk ik dat ik niet echt een goede werkdag heb meegemaakt als je dat zelf had moeten doen. Toch was het erg intersant te leren over Digitalisering. </p>
        <p class="section4-text">Ook heb ik mijn skills staan ik denk dat deze wel bij mij passen. en het is eigenlijk een inkijkje om te zien wat ik denk dat mijn sterken en zwakeren punten zijn. Voor de rest heb ik ook mijn school verleden neer gezet. "</p> 
        <img src="img/InfograficCV.jpg" alt="" class="section4-img-cv">
    </section>
    <section id="section5">
        <h1 class="section5-title">CONTACT</h1>
        <p><span class="error" id="error-txt">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <p class="name-title">Name: <span class="error">* <?php echo $nameErr;?></span> </p>  
            <input class="name-txt" type="text" name="name" value="<?php echo $name;?>">
            <br><br>
            <p class="email-title">E-mail: <span class="error">* <?php echo $emailErr;?></span></p> 
            <input class="email-txt" type="text" name="email" value="<?php echo $email;?>">
            <br><br>
            <p class="comment-title">Comment:</p> 
            <textarea class="comment-txt" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>
            <input class="submit-btn" type="submit" name="submit" value="Submit">  
        </form>
    </section>
    <footer> 
        <div class="footer">
             <h1 class="footer-title">SOCIAL MEDIA</h1>
             <a href="https://github.com/evylarmit" class="github-text">Github</a>
             <a href="https://www.linkedin.com/in/evy-larmit-22441a28b/" class="linkedin-text">Linkedin</a>
        </div>
    </footer>
</body>
</html>