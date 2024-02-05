<?php

class paginaHTML{

    /** Costruttore
     * @param string $sito Titolo del sito
     * @param string $css Path del file css
     * @param string $js Path del file js
    */

    public function __construct ($sito, $css, $js) {
        printf ('<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
                <head><title>'. $sito .'</title></head>
                <link rel="stylesheet" href="'. $css .'">
                <script src="'. $js .'"></script>
                
                <script type="text/javascript">
                var _iub = _iub || [];
                _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"floatingPreferencesButtonDisplay":"bottom-right","perPurposeConsent":true,"siteId":3416651,"whitelabel":false,"cookiePolicyId":44880914,"lang":"it", "banner":{ "acceptButtonDisplay":true,"brandBackgroundColor":"#070A5B","closeButtonRejects":true,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"logo":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4UAAALvCAYAAADSyGAoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFyWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4yLWMwMDAgNzkuMWI2NWE3OSwgMjAyMi8wNi8xMy0xNzo0NjoxNCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjUgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMC0yNVQxODoxNjowMSswMjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTAtMjVUMjM6MTI6NDYrMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTAtMjVUMjM6MTI6NDYrMDI6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY5YjYwZGE3LTc5NjItOTk0Yy04MTUxLTZmODcyMjAyNWU4YSIgeG1wTU06RG9jdW1lbnRJRD0i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","position":"float-top-center","showTitle":false }};</script>
                <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3416651.js"></script>
                <script type="text/javascript" src="//cdn.iubenda.com/cs/beta/iubenda_cs.js" charset="UTF-8" async></script>');
    }

   
    /** Funzione per controllare i valori del form di contatto
     * @param string $var Variabile da testare
     * @param string $filter tipo di filtro da applicare
     * @param int $valido 1 se la variabile non passa il test
    */

    function testvar ($var, $filter, $valido) {
        if (isset($var)) {
            if (filter_var($var, $filter)) {
                $exitvar=$var;
                return array ($exitvar, $valido, $style='');
            } else {
                $exitvar="VALORE NON VALIDO";
                return array ($exitvar, $valido=1, $style='color:red');
            }
        }
    }


    // Sezione header

    /** Funzione per generare il menu, l'intestazione e il div con sfondo
     * @param string $intestazione
     * @param array $datiDB array associativo con i dati
     * @param array $array array associativo con path del logo e degli sfondi
    */

    public function creaIntro ($intestazione, $datiDB, $array){

        $logo=$array[0]['path'];
        $sfondo=$array[1]['path'];
        printf ('<div id="intro">
                    <div id=absolute>
                        <nav id="mmenu">
                            <div id="logo"><button id="logoImg" style="background-image: url(\'./elementi_grafici/'. $logo .'\')"></div>
                            <ul class="showMenu" id="menu">');
                            // ciclo i dati dell'array associativo per creare le singole voci di menu
                            for ($i=0; $i<count($datiDB); $i++) {
                                $row=$datiDB[$i];
                                printf ('<li class="mm"><a class="mame" href="%s" title="%s">%s</a></li>', $row['link'], $row['name'], $row['title']);
                            }
                            printf('</ul>
                        </nav>
                        <div id="text">
                            <div id="intestazione">
                                <h1>'. $intestazione .'</h1>
                            </div>
                            <div id="titoli">
                                <h2 id="full">Full stack</h2>
                                <h2 id="developer">Developer</h2>
                            </div>
                        </div>
                    </div>
                    <div id="imgs" style="background-image: url(\'./elementi_grafici/'. $sfondo .'\')">
                    </div>
                </div>');
    }

        
    // Sections

    /** Funzione per creare le sezioni di Chi sono
    * @param array $datiDB array associativo con i dati
    */

    public function creaSectionChiSono ($datiDB) {
        // ciclo i dati dell'array associativo per creare le singole sections
        for ($i=0; $i<count($datiDB); $i++) {
            $row=$datiDB[$i];
            printf ('<section id="n'. $row['idChiSono']. '" class="nAll">
                        <div class="paragrafi">
                            <h3 id="'. $row['h3id'] .'">'. $row['h3title'] .'</h3>
                            <p>'. $row['paragrafi'] .'</p>
                        </div>
                        <div class="interno">
                            <div class="intImg" style="background-image: url(\'./elementi_grafici/'. $row['img1'] .'\')">'
                        .'</div></div>
                    </section>');
        }
    }

    
    /** Funzione per creare le sezioni Categorie del Portfolio
    * @param array $datiDB array associativo con i dati
    * @param string $titPortfolio Titolo della categoria del progetto
    * @param int $cat categoria del progetto
    */

    public function creaCategoriePortfolio ($datiDB, $cat, $titPortfolio) {
        printf ('<div id="cat'. $cat .'">
                    <div class="titCat"><h3>'. $titPortfolio .'</h3></div>
                        <div class="portfolio" id="car'. $cat .'">
                        <button class="prec" id="prec'. $cat .'"><</button>
                        <ul class="cards" id="prj'. $cat .'">');

        // ciclo i dati dell'array associativo per creare i singoli progetti
        for ($i=0; $i<count($datiDB); $i++) {
            $row=$datiDB[$i];
            if ($row['categoria']==$cat) {
                $minDesc=substr($row['descrizione'], 0, 100);

                printf ('<li class="single_prj">
                            <div class="single_card">
                                <img src="./elementi_grafici/'. $row['sfondo'] .'">
                                <h4>Progetto '. $row['titolo'] .'</h4>
                                <p>'. $minDesc .'...</p>
                                <a href="'. $row['href'] .'" title="Esplora">Altro</a>
                            </div>
                        </li>');
            }
        }
            printf ('</ul>
                    <button class="succ">></button>
                </div>
            </div>');
    }


    /** Funzione per creare le sezioni Progetti delle Categorie del Portfolio
    * @param array $datiDB array associativo con i dati
    * @param int $nProgetto numero del progetto
    * @param int $cat categoria del progetto
    */

    public function creaProgettiPortfolio ($datiDB, $nProgetto, $cat) {
        print '<div id="cat'. $cat .'">';
        $row=$datiDB[$nProgetto];
        if ($row['categoria'] == $cat) {
            printf ('<div class="titCat"><h3>'.$row['titPortfolio'].'</h3></div>
                        <ul class="card1">
                            <li id="first">
                                <div id="immagine"><img src="./elementi_grafici/'. $row['sfondo'] .'" alt="sfondo"></div>
                                <div class="riga">
                                    <h4>Altri progetti</h4>
                                    <div class="infoextra">
                                        <a href="" title="Esplora"><h5>Progetto 2</h5></a>
                                        <a href="" title="Esplora"><h5>Progetto 3</h5></a>
                                        <a href="./index.php#cat'. $cat .'" title="Torna al portfolio"><h4 id="back">BACK</h4></a>
                                    </div>
                                </div>
                            </li>
                            <li id="second">
                                <div class="infoprogetto">
                                    <h4>'. $row['titolo'] .'</h4>
                                    <p>"'. $row['descrizione'] .'"</p>
                                </div>
                                <div class="infoextra">
                                    <div class="riga">
                                        <h4>Data</h4>
                                        <p>'. $row['data'] .'</p>
                                    </div>
                                    <div class="riga">
                                        <h4>Luogo</h4>
                                        <p>'. $row['luogo'] .'</p>
                                    </div>
                                    <div class="riga">
                                        <h4>Cliente</h4>
                                        <p>'. $row['cliente'] .'</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>');
            }
    }


    /** Funzione per creare la sezione "Il mio percorso"
    * @param array $datiPercorso array associativo con i dati del percorso
    * @param array $datiIcons array associativo con le icone del percorso
    */

    public function creaSectionPercorso ($datiPercorso, $datiIcons) {
        printf('<section id="miopercorso">
                    <h3>Il mio percorso</h3>
                    <div id="percorso">');
        
            // ciclo i dati del primo array associativo per creare il mio percorso
            for ($i=0; $i<count($datiPercorso); $i++) {
                $rowPercorso=$datiPercorso[$i];
                printf ('<div class="stepercorso">
                            <h4 id="'. $rowPercorso['idPercorso'] .'">'. $rowPercorso['descrizione'] .'</h4>'
                            .'<div class="icons">');

                    // ciclo i dati del secondo array associativo per le icone
                    for ($n=0; $n<count($datiIcons); $n++) {
                        $rowIcons=$datiIcons[$n];
                        if ($rowPercorso['idPercorso'] == $rowIcons['idPercorso']) {
                            printf('<img src="./elementi_grafici/'. $rowIcons['icons'] .'">');
                        }
                    }
                    printf ('</div></div>');
            }
        printf ('</div>
            </section>');
    }


    /** Funzione per generare il form di contatto
     * @param array $array array associativo con path dello sfondo
    */

    public function creaForm ($array) {

        $sfondo=$array[2]['path'];

        isset($_POST['inserito']) ? $inserito=$_POST['inserito'] : $inserito=false;
        $valido=null;
            if (isset($inserito) && ($inserito==1)) {
                $arraynome=self::testvar($_POST['nome'], FILTER_UNSAFE_RAW, $valido);
                $nome=$arraynome[0];
                $valido=$arraynome[1];
                $stylenome=$arraynome[2];

                $arraycognome=self::testvar($_POST['cognome'], FILTER_UNSAFE_RAW, $valido);
                $cognome=$arraycognome[0];
                $valido=$arraycognome[1];
                $stylecognome=$arraycognome[2];
                
                $arrayemail=self::testvar($_POST['email'], FILTER_VALIDATE_EMAIL, $valido);
                $email=$arrayemail[0];
                $valido=$arrayemail[1];
                $stylemail=$arrayemail[2];

                $arrayoggetto=self::testvar($_POST['oggetto'], FILTER_UNSAFE_RAW, $valido);
                $oggetto=$arrayoggetto[0];
                $valido=$arrayoggetto[1];
                $styleoggetto=$arrayoggetto[2];

                if ($_POST['seleziona']) {
                    $profilo=$_POST['seleziona'];
                    $styleprofilo='';
                    if ($profilo=='Preventivo') {
                        $profilo1="selected";
                        $profilo2="";
                        $profilo3="";
                    } else if ($profilo=='Assistenza') {
                        $profilo2="selected";
                        $profilo1="";
                        $profilo3="";
                    } else if ($profilo=='Consulenza') {
                        $profilo3="selected";
                        $profilo1="";
                        $profilo2="";
                    }
                } else {
                    $profilo1="";
                    $profilo2="";
                    $profilo3="";
                    $valido=1;
                    $styleprofilo='color:yellow';
                }

                if ($_POST['telefono']) {
                    $telefono=$_POST['telefono'];
                } else {
                    $telefono="";
                }

                if ($_POST['commenti']) {
                    $comments=$_POST['commenti'];
                } else {
                    $comments="";
                }

                if ($valido!=1) {
                    $arrayform=['nome' => $nome, 'cognome' => $cognome, 'email' => $email, 'telefono' => $telefono, 'oggetto' => $oggetto, 'profilo' => $profilo, 'commenti' => $comments];
                    return $arrayform;
                }

            } else {
                $nome="";
                $stylenome="";
                $cognome="";
                $stylecognome="";
                $email="";
                $stylemail="";
                $telefono="";
                $profilo1="";
                $profilo2="";
                $profilo3="";
                $styleprofilo="";
                $oggetto="";
                $styleoggetto="";
                $comments="";
            }

            if ($inserito == false || ($inserito == 1 && $valido != null)) {
                printf('<section id="form" style="background-image: url(\'./elementi_grafici/'. $sfondo .'\')">
                        <form action="#form" name="modulo" method="post">
                            <legend>Compila il form</legend>
                            <div class="corpo">
                                <fieldset class="colonna" id="prima">
                                    <label for="nome" id="lbnome" alt="obbligatorio" style="'.$stylenome.'">NOME:*</label>
                                    <input type="text" id="nome" name="nome" maxlength="25" value="'.$nome.'" /><br>
                                    <label for="cognome" id="lbcognome" style="'.$stylecognome.'">COGNOME:*</label>
                                    <input type="text" id="cognome" name="cognome" maxlength="20" value="'.$cognome.'" /><br>
                                    <label for="email" id="lbemail" style="'.$stylemail.'">EMAIL:*</label>
                                    <input type="email" id="email" name="email" minlength="8" maxlength="40" value="'.$email.'"/><br>
                                    <label for="telefono" id="lbtel">TELEFONO:</label>
                                    <input type="number" id="telefono" name="telefono" maxlength="12" value="'.$telefono.'"/><br>
                                    <div id="spunta">
                                        <label for="privacy">Ho preso visione della privacy policy e acconsento al trattamento dei miei dati personali</label>
                                        <input type="checkbox" id="privacy" name="privacy" value="val1" required>
                                    </div>
                                </fieldset>
                                <fieldset class="colonna" id="seconda">
                                    <label for="seleziona" id="lbsel" style="'.$styleprofilo.'">SERVIZI*</label>
                                    <select id="seleziona" name="seleziona" >
                                        <option value="" selected>seleziona</option>
                                        <option value="Preventivo"'.$profilo1.'>Preventivo</option>
                                        <option value="Assistenza"'.$profilo2.'>Assistenza</option>
                                        <option value="Consulenza"'.$profilo3.'>Consulenza</option>
                                    </select><br>
                                    <label for="oggetto" id="lboggetto" style="'.$styleoggetto.'">OGGETTO:*</label>
                                    <input type="text" id="oggetto" name="oggetto" maxlength="25" value="'.$oggetto.'" /><br>
                                    <div id="conta">
                                        <label for="commenti" id="lbcommenti">COMMENTI</label><p id="output"></p>
                                    </div>
                                    <textarea name="commenti" id="commenti" cols="20" rows="5" minlength="10" maxlength="1000" placeholder="Enter your comments...">'.$comments.'</textarea>
                                    <div id="tasti">
                                        <input type="reset" value="RESET">
                                        <input type="submit" id="invia" value="INSERISCI">
                                    </div>
                                    <input type="hidden" name="inserito" value="1">
                                </fieldset>
                            </div>
                        </form>
                    </section>');
            } 
    }   
  
    /** Funzione per form correttamente inserito
     * @param array $array array associativo con path dello sfondo
     * @param bool $esito False se c'è un errore di invio
    */

    public function creaEsitoForm ($array, $esito) {
        
        $sfondo=$array[2]['path'];

        if ($esito) {
            printf('<section id="form" style="background-image: url(\'./elementi_grafici/'. $sfondo .'\')">
                        <h2 id="formok">Form <br>
                        correttamente <br>
                        inviato</h2>
                    </section>');
        } else {
            printf('<section id="form" style="background-image: url(\'./elementi_grafici/'. $sfondo .'\')">
                        <h2 id="formok">Errore <br>
                        invio <br>
                        form</h2>
                    </section>');
                    }
    }


    // Footer

    /** Funzione per generare il footer
    * @param array $datiDB array associativo con i dati
    * @param string $autore
    */

    public function creaFooter ($datiDB, $autore) {
        $year=date("Y");
        printf ('<footer>
                    <div class="pie">
                        <p>Copyright © '. $year .'</p>
                        <p>by '. $autore .'</p>
                    </div>
                    <ul id="links">');

        // ciclo i dati dell'array associativo per i social
        for ($i=0; $i<count($datiDB); $i++) {
            $row=$datiDB[$i];

            if (filter_var($row['link'], FILTER_VALIDATE_EMAIL)) {
                printf('<li><a href="mailto:'. $row['link'] .'" title="Scrivimi"><img src="./elementi_grafici/'. $row['imgText'] .'" alt="email"></a></li>');
            } else {
                printf ('<li><a href="'. $row['link'] .'" title="Visita" target="_blank"><img src="./elementi_grafici/'. $row['imgText'] .'" alt="social"></a></li>');
            }
        }
        
        printf('</ul>
                <div class="pie">
                    <p id="pp">Privacy e Cookie policy</p>
                    <div id="policy" class="hidden">
                        <div><h2 id="titolo">Leggi l\'informativa</h2></div>
                        <div id="info">
                            <p>Consulta la <a href="https://www.iubenda.com/privacy-policy/44880914" target="_blank">PRIVACY POLICY</a></p>
                            <p>Consulta la <a href="https://www.iubenda.com/privacy-policy/44880914/cookie-policy" target="_blank">COOKIE POLICY</a></p>
                        </div>
                        <div><button id="ok">Ho capito</botton></div>
                    </div>
                    <p id="cred">Crediti</p>
                    <div id="crediti" class="hidden">
                        <div><h2 id="titolo">Crediti foto e icone</h2></div>
                        <div id="info">
                        <p>Immagine blu-scuro1
                        <a href="https://it.freepik.com/vettori-gratuito/sfondo-blu-sfumato_24750118.htm" target="_blank">Immagine di pikisuperstar</a> su Freepik
                        <br>
                        Immagine blu-scuro2
                        Immagine di <a href="https://it.freepik.com/vettori-gratuito/sfondo-blu-sfumato_24236116.htm" target="_blank">Freepik</a>
                        <br>
                        Web design icon by Icons8
                        </p></div>
                        <div><button id="chiudi">Chiudi</botton></div>
                    </div>
                </div>
            </footer>');
    
    }


}