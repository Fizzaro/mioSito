<?php

    //variabili x connessione DB
    $indirizzo = "31.11.39.137";
    $db = "Sql1750920_1";
    $utente = "Sql1750920";
    $password = "Grazia10606!";

    //connessione a mysql tramite PDO
    try {
        $pdo = new PDO("mysql:host=$indirizzo;dbname=$db", $utente, $password);
        //echo ("<br><br>Connesso con le PDO a MySQL<br>");
    } catch (PDOException $e){
        echo"<br><br>Errore PDO: ". $e->getMessage();
        die();
    }

    require_once ("classPaginaHTML.php");
    use paginaHTML as HTML;

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "<body>"."<header>";

    //costruttore
    $nomeSito="sito Luigi Fizzarotti";
    $pathCss="./SASS/mio_sito.min.css";
    $pathJs="./js/mio_sito.js";
    $mio_sito= new HTML ($nomeSito, $pathCss, $pathJs);

    //lettura dati nav
    $sql1 = "SELECT * FROM barnav";
    $query1 = $pdo->prepare($sql1);
    $query1->execute();
    if ($query1->rowCount() > 0) {
        $datiDB=$query1->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //lettura logo e sfondi
    $sql2 = "SELECT * FROM images";
    $query2 = $pdo->prepare($sql2);
    $query2->execute();
    if ($query2->rowCount() > 0) {
        $logoSfondi=$query2->fetchAll(PDO::FETCH_ASSOC);
    }

    //Nav e Sfondo
    $mio_sito->creaIntro("Luigi Fizzarotti", $datiDB, $logoSfondi);
    echo "</header>"."<main>";


    //lettura dati section Chi sono
    $sql = "SELECT * FROM sectChiSono";
    $query = $pdo->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $datiDB=$query->fetchAll(PDO::FETCH_ASSOC);
    }

    //section Chi sono
    $mio_sito->creaSectionChiSono($datiDB);


    //lettura dati section Portfolio
    echo '<section id="portfolio">';
    $sql = "SELECT * FROM sectPortfolio
            ORDER BY categoria";
    $query = $pdo->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $datiDB=$query->fetchAll(PDO::FETCH_ASSOC);
    }

    //verifico il numero di categorie del portfolio
    $nCatBase=0;
    foreach ($datiDB as $row) {
        $nCategoria=$row['categoria'];
        if ($nCategoria>$nCatBase) {
            $nCatBase=$nCategoria;
            $titPortfolio[$nCatBase]=$row['titPortfolio'];
        }
    }

    //sections Portfolio
    for ($i=1; $i<=$nCatBase; $i++) {
        if (isset($_GET['sub'])) {
            $nProgetto=substr($_GET['sub'], -1, 1);
            $nCat=substr($_GET['sub'], 0, 1);
            $mio_sito->creaProgettiPortfolio($datiDB, $nProgetto-1, $nCat);
            $i=$nCatBase;
        } else {
            $mio_sito->creaCategoriePortfolio($datiDB, $i, $titPortfolio[$i]);
        }
        echo '';
    }
    echo '</section>';


    //lettura dati section Percorso
    $sqlPercorso = "SELECT * FROM sectPercorso";
    $query1 = $pdo->prepare($sqlPercorso);
    $query1->execute();
    if ($query1->rowCount() > 0) {
        $datiPercorso=$query1->fetchAll(PDO::FETCH_ASSOC);
    }
    $sqlIcons = "SELECT * FROM sectPercorsoIcons";
    $query2 = $pdo->prepare($sqlIcons);
    $query2->execute();
    if ($query2->rowCount() > 0) {
        $datiIcons=$query2->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //section Percorso
    $mio_sito->creaSectionPercorso($datiPercorso, $datiIcons);

    
    //Form di contatto
    $form=$mio_sito->creaForm($logoSfondi);
    if (isset($form)) {
        $nome=$form['nome'];
        $cognome=$form['cognome'];
        $email=$form['email'];
        $telefono=$form['telefono'];
        $oggetto=$form['oggetto'];
        $profilo=$form['profilo'];
        $commenti=$form['commenti']; 
            //creo query di inserimento
            $sql = "INSERT INTO form (nome, cognome, email, telefono, oggetto, profilo, commenti)
                    VALUES (:nome, :cognome, :email, :telefono, :oggetto, :profilo, :commenti)";   
            $query = $pdo->prepare($sql);
            $query->bindParam(':nome', $nome, PDO::PARAM_STR);
            $query->bindParam(':cognome', $cognome, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $query->bindParam(':oggetto', $oggetto, PDO::PARAM_STR);
            $query->bindParam(':profilo', $profilo, PDO::PARAM_STR);
            $query->bindParam(':commenti', $commenti, PDO::PARAM_STR);
            if ($result = $query->execute()) {
                $form=$mio_sito->creaEsitoForm($logoSfondi, true);
            } else {
                $form=$mio_sito->creaEsitoForm($logoSfondi, false);
            }
    }

    echo '</main>';
    
    //Lettura dati footer
    $sqlIcons = "SELECT * FROM footer";
    $query = $pdo->prepare($sqlIcons);
    $query->execute();
    if ($query->rowCount() > 0) {
        $datiDB=$query->fetchAll(PDO::FETCH_ASSOC);
    }

    //Footer
    $mio_sito->creaFooter($datiDB, 'Luigi Fizzarotti');

?>