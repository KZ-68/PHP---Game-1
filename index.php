<?php
    
    // Etape 1
    $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    count($alphabet);
    var_dump($alphabet);
    echo "<p>La date de naissance de Victor Hugo est le 26 Février 1802<br/>
        La date de décès de Victor Hugo est le 22 Mai 1885</p>";

    $birthVictor = new DateTime("26-02-1802");
    $deathVictor = new DateTime("22-05-1885");

    $interval = date_diff($birthVictor, $deathVictor);
    $yearInterval = $interval->y;
    echo $yearInterval;

    echo "<p>L'intervale entre la date de naissance et la date de décès de Victor Hugo est de 83,<br/>
        donc l'âge de Victor Hugo est de $yearInterval ans</p>";

    $additionner = 8 + 3;
    echo $alphabet[$additionner];
    $firstLetter = $alphabet[$additionner - 6];
    $mystere = array();
    array_push($mystere, $firstLetter);
    echo "<br/>";
    echo $mystere[0];
    echo "<br/>";

    // Etape 2
    
    $colonel = $alphabet[$additionner];
    echo "<p>Thomas Mars est marié à Sophia Coppola<br>
    Sophia Coppola est la fille de Francis Ford Coppola<br>
    Francis Ford Coppola à réalisé en 1979 le film : Appocalypse Now<br>
    Harrison Ford à incarné le Colonel Lucas dans ce film</p>
    La seconde lettre est donc H<br/>";
    $secondLetter = $alphabet[7];
    array_push($mystere, $secondLetter);
    echo $mystere[1];
    
    // Etape 3

    echo "<p>La coupe du monde au Qatar a eu lieu en 2022</p>";
    $yearQatar = [2,0,2,2];
    $total = array_sum($yearQatar);
    $thirdLetter = $alphabet[$total];
    array_push($mystere, $thirdLetter);
    echo $mystere[2];

    // Etape 4

    $pseudo = strtoupper("bono");
    echo "<p>Le pseudonyme de Paul David Hewson est $pseudo</p>";
    $pseudoArray = str_split($pseudo);
    $fourthLetter = $pseudo[0];
    array_push($mystere, $fourthLetter);
    echo $mystere[3];

    // Etape 5

    echo "<p>Paul David Hewson est le chanteur du groupe U2<br/>
    La cinquième lettre est donc u</p>";
    $fithLetter = $alphabet[20];
    array_push($mystere, $fithLetter);
    echo $mystere[4];

    // Etape 6

    echo "<p>Ayrton Senna a été sacré champion du monde de formule 1 à 3 reprises<br/>";
    $champion = 3;
    echo "En retirant 1 de la valeur 3, on tombe sur la lettre c</p>";
    $sixLetter = $alphabet[$champion - 1];
    array_push($mystere, $sixLetter);
    echo $mystere[5];

    // Etape 7 et 8

    echo "<p>La rue la plus chère d'un Monopoly Français est la Rue de la Paix</p>";
    $rue = "RUE DE LA PAIX";
    $rue = str_replace(' ', '', $rue);
    $rue = strrev($rue);
    echo $rue;
    echo "<br/>";
    $seventhLetter = substr($rue, 1, 1);
    $eighthLetter = substr($rue, 5, 1);
    array_push($mystere, $seventhLetter);
    array_push($mystere, $eighthLetter);
    echo $mystere[6];
    echo "<br/>";
    echo $mystere[7];

    // Etape 9

    echo "<p>La réplique 'Je veux tes vêtements, tes bottes et ta moto...' vient du film Terminator 2";
    $film = "Terminator 2";
    echo "<p>".$film."</p>";
    $film = strtoupper($film);
    $film = str_replace(' ', '', $film);
    $film = str_replace('R', '', $film);
    echo "<p>".$film."</p>";
    
    foreach (count_chars($film, 1) as $chr => $val) {
        echo chr($chr). "$val<br/>";
    }
    
    echo "<p>La lettre la plus présente dans la chaîne de caractère est la lettre T</p>";
    $ninthLetter = substr($film, 0, 1);
    array_push($mystere, $ninthLetter);
    echo "<p>".$mystere[8]."</p>";

    // ULTIME ETAPE 

    $secretKey = [0, 6, 2, 1, 8, 5, 7, 4, 3];
    "<p>".var_dump($mystere)."</p>";
    echo "<br/>";
    
    foreach ($secretKey as $index) {
        echo $mystere[$index];
    }
    
    echo "<p>Le mot mystere est fIghT cLuB, le pseudo de la personne qui a modifié la page wikipédia en anglais<br/> 
    le 30 Décembre 2022 à 22h50 est Jean-de-Nivelle</p>";

