<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Seminar</title>
    <link rel="stylesheet" href="indexstyle.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Habibi&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b05e340512.js"crossorigin="anonymous"></script>
</head>
<body>

    <header> <br />
        <?php
	    $xml=simplexml_load_file("korisnici.xml");
        $user = $xml->user;
        $usrn = $user->username;
        echo "<p>Prijavljeni ste kao $usrn</p>";
        ?>
        <h1>XML Projektni rad</h1>
        <hr style="width: 100%;">
    </header>
    <nav>
        <ul>
            <li><a href="index.html"><i class="fas fa-user"></i> Home</a></li>
            <li><a href="login.php"><i class="fas fa-exclamation-circle"></i> Odjava</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <div>
                <h3>
                    <i class="fas fa-user-graduate"></i> O nama <i class="fas fa-user-graduate"></i>
                </h3><hr>
                <p class="text">
                    Tehničko veleučilište u Zagrebu (TVZ) je politehničko učilište koje pruža izobrazbu iz različitih struka, što daje priliku za vrlo precizno pozicioniranje prema zahtjevima tržišta rada. TVZ obrazuje inženjere i specijaliste iz područja elektrotehnike, graditeljstva, informatike, računarstva, strojarstva, mehatronike te protetike i ortotike.

 

Na Tehničkom veleučilištu u Zagrebu stalno je zaposleno oko 150 profesora i asistenata, a više od 100, što predavača s drugih visokoškolskih ustanova, što priznatih stručnjaka iz prakse honorarno sudjeluje u nastavi i radu. Iako je TVZ primarno okrenuto izobrazbi struke, nastavno osoblje predvodi više od 20 stalno zaposlenih doktora znanosti s velikim i dokazanim znanstvenim i stručnim potencijalom.

 

Svake akademske godine bogatiji smo za više od 1.000 mladih i perspektivnih studenta koji se s uspjehom pridružuju velikoj alumni zajednici koja oblikuje inženjere više od 50 godina. Na stručne se studije svake godine upisuje preko 800, a na specijalističke oko 300 novih studenata, tako da ih trenutno aktivno studira više od 4.300. Svi se obrazuju za što konkretnija inženjerska zanimanja, uz izvrsno opremljenu računalno-laboratorisku infrastrukturu koju danas čini preko 600 računala, u više od 40 računalno opremljenih kabineta/učionica i 17 vrhunski opremljenih specijaliziranih laboratorija.

 

Vrlo ambicioznim planovima za obzor 2020/25, neprestanim usavršavanje postojećih i pokretanjem novih studijskih programa, sigurni smo da predstavljamo daleko najbolje i najveće hrvatsko veleučilište.
                </p>
                
            </div>

            <div class="drugi">
                <h3>
                    <i class="fas fa-book"></i> Povijest <i class="fas fa-book"></i>
                </h3><hr>

                <p class="text">
                    Tehničko veleučilište u Zagrebu osnovano je 1998. godine, a odjeli su se razvili iz stručnih studija koji su se izvodili na matičnim visokim učilištima – fakultetima i višim školama.

 

Tako se Elektrotehnički odjel razvio iz VTŠZ, utemeljene 1961. pod nazivom Viša tehnička škola »Rade Končar«, koja je djelovala u sklopu Sveučilišta u Zagrebu. Stručni dodiplomski studij informatike je nastavak studija koji je pokrenut 1994. kao dvogodišnji sveučilišni dodiplomski studij za hrvatske ratne vojne invalide, te za sveučilištarce koji studiraju po osobnim potrebama u okvirima Studija poslovne informatike Sveučilišta u Zagrebu, a graditeljski je odjel dio bivše Više građevinske škole u Zagrebu.

 

Veleučilište je 2004. godine upisano u Upisnik znanstvenih organizacija i od te godine samostalno provodi stručne studije elektrotehnike, graditeljstva, informatike i računarstva, te mehatronike, sa 154 zaposlenika (19 profesora visoke škole, 28 viših predavača, 26 predavača, 33 asistenta, 15 laboranata i 33 stručna suradnika, administrativna zaposlenika i pomoćno-tehničkog osoblja) i s preko 150 vanjskih suradnika, iz redova priznatih stručnjaka iz prakse i nastavnika više fakulteta Sveučilišta u Zagrebu.
                </p>
            </div>

        </article>

        

        <aside>
            <div class="podaci">
                <h3><i class="fas fa-user-friends"></i> Osnovni podaci <i class="fas fa-user-friends"></i></h3>
                <hr>
                <p class="text">Naziv: Tehničko veleučilište u Zagrebu <br />
                    Sjedište: Vrbik 8, 10.000 Zagreb, Hrvatska<br />
                    Skraćeni naziv: TVZ<br />
                    Naziv na engleskom: Zagreb University of Applied Sciences<br />
                    Naziv na latinskom: Polytechnicum Zagrabiense<br />
                    Matični broj: 1398270<br />
                    OIB: 08814003451</p>
            </div>
        <img src="images/tvz.jpg" class="image">
        </aside>
    <div class="ispod"><iframe src="https://www.google.com/maps/d/embed?mid=1RojzDU4QwN6OZhS3Ei3PDkpIKI8"></iframe></div>

    <div class="youtube"><iframe src="https://www.youtube.com/embed/RF3o4fQE48s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>


</main>
    <footer>Hrvoje Čaldarević <br />Informatički dizajn</footer>
</body>
</html>