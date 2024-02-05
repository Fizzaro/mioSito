// Ritorna il valore di un elemento, o falso se vuoto o indefinito
function raccogliDati(idTag) {
    var el = document.getElementById(idTag).value;
    if (el != undefined || el != null) {
        return el;
    } else {
        return false;
    }
}

// Crea e posiziona un attributo
function creaAttributo(id, att, value) {
    var posA = document.getElementById(id);
    posA.setAttribute(att, value);
}

// Verifica se nome/cognome è valido
function validazioneStringa(stringa) {
    if (stringa.match("^[A-Za-z]{1,20}")) {
        return true;
    } else {
        return false;
    }
}

// Verifica se indirizzo email è valido
function validazioneEmail(email) {
    // verifico se è un indirizzo valido
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mailformat)) {
        return true;
    } else {
        return false;
    }
}

// Verifica se è stata selezionata una select
function validazioneSel() {
    var sel = document.getElementsByTagName('select')[0].selectedIndex;
    console.log(sel);
    if (sel == 0) {
        return false;
    } else {
        return true;
    }

}

// Valida il form evidenziando i campi da inserire
function validator() {
    var complete = true;

    var nome = raccogliDati('nome');
    console.log(nome);
    if (!nome) {
        creaAttributo('lbnome', 'style', 'color:red');
        creaAttributo('nome', 'placeholder', 'Inserisci qui');
        complete = false;
    } else {
        if (!validazioneStringa(nome)) {
            console.log("Stringa non valida");
            creaAttributo('lbnome', 'style', 'color:red');
            complete = false;
        } else {
            document.getElementById('lbnome').removeAttribute('style');
        }
    }

    var cognome = raccogliDati('cognome');
    console.log(cognome);
    if (!cognome) {
        creaAttributo('lbcognome', 'style', 'color:red');
        creaAttributo('cognome', 'placeholder', 'Inserisci qui');
        complete = false;
    } else {
        if (!validazioneStringa(cognome)) {
            creaAttributo('lbcognome', 'style', 'color:red');
            complete = false;
        } else {
            document.getElementById('lbcognome').removeAttribute('style');
        }
    }

    var email = raccogliDati('email');
    console.log(email);
    if (!email) {
        creaAttributo('lbemail', 'style', 'color:red');
        creaAttributo('email', 'placeholder', 'Inserisci qui');
        complete = false;
    } else {
        if (!validazioneEmail(email)) {
            creaAttributo('lbemail', 'style', 'color:red');
            complete = false;
        } else {
            document.getElementById('lbemail').removeAttribute('style');
        }
    }

    if (!validazioneSel()) {
        creaAttributo('lbsel', 'style', 'color:red');
        complete = false;
    } else {
        document.getElementById('lbsel').removeAttribute('style');
    }

    var oggetto = raccogliDati('oggetto');
    console.log(oggetto);
    if (!oggetto) {
        creaAttributo('lboggetto', 'style', 'color:red');
        creaAttributo('oggetto', 'placeholder', 'Inserisci qui');
        complete = false;
    } else {
        if (!validazioneStringa(oggetto)) {
            creaAttributo('lboggetto', 'style', 'color:red');
            complete = false;
        } else {
            document.getElementById('lboggetto').removeAttribute('style');
        }
    }

    if (complete) {
        return true;
    } else {
        return false;
    }
}

// Mostra a video in tempo reale i caratteri a disposizione nei "commenti"
function conto() {
    var txt = document.getElementById('commenti').value.length;
    document.getElementById('output').innerHTML = 1000 - txt;
}

//Classe per i vari Carosello
class Carosello {
    corrente = 1;
    numeroImmagini = null;
    id = null;
    bottPrec = null;
    bottSucc = null;

    //costruttore
    constructor(id) {
        this.id = id;
        this.numeroImmagini = this.contaElementi();
        this.bottPrec = this.precedente();
        this.bottSucc = this.successivo();
        this.creaEventi();
    }

    //conta elementi del carosello
    contaElementi(){
        const a=document.querySelector("#"+this.id+" ul.cards");
        return a.childElementCount;
    }

     getCount(){
        return this.corrente;
    }
     setCount(a){
        this.corrente=a;
    }
     countPiu(){
        this.corrente++;
        return this.corrente;
    }
     countMeno(){
        this.corrente--;
        return this.corrente;
    }

    //Pulsante successivo
    successivo() {
        const c=document.querySelector("#"+this.id+" button.succ");
        return c;
    }

    static succ(evt) {
        let obj = evt.currentTarget.obj;
        let countP = obj.countPiu()
        const m = obj.numeroImmagini;
        let id = obj.id;

        if (countP > m) {
            countP=1;
            obj.setCount(countP);
        }
        for (let i = m; i > 0; i--) {
            document.querySelector("#"+id+" ul li:nth-child(" + i + ")").style.display = "none";
        }
        for (let i = m; i > 0; i--) {
            document.querySelector("#"+id+" ul li:nth-child(" + countP + ")").style.display = "block";
        }
    }

    //Pulsante precedente
    precedente() {
        const b=document.querySelector("#"+this.id+" button.prec");
        return b;
    }

    static prec(evt) {
        let obj = evt.currentTarget.obj;
        let countM = obj.countMeno()
        const n = obj.numeroImmagini;
        let id = obj.id;
        
        console.log("param ", id, countM, n);
        if (countM <= 0) {
            countM = n;
            obj.setCount(countM);
        }
        for (let i = n; i > 0; i--) {
            document.querySelector("#"+id+" ul li:nth-child(" + i + ")").style.display = "none";
        }
        for (let i = n; i > 0; i--) {
            document.querySelector("#"+id+" ul li:nth-child(" + countM + ")").style.display = "block";
        }

    }

    //Eventi pulsanti con parametro oggetto annesso
    creaEventi(){
        this.bottPrec.addEventListener('click', Carosello.prec);
        this.bottPrec.obj=this;

        this.bottSucc.addEventListener('click', Carosello.succ);
        this.bottSucc.obj=this;

    }

}


window.onload = function () {

    //Menu a scomparsa smartphone
    const menu = document.querySelector("#menu");
    const menuItems = document.querySelectorAll(".mm");
    const hamburger = document.querySelector("#logoImg");
    function toggleMenu() {
        if (menu.classList.contains("showMenu")) {
            menu.classList.remove("showMenu");
            menu.classList.add("mainmenu");
        } else {
            menu.classList.add("showMenu");
            menu.classList.remove("mainmenu");
        }
    }
    var smartphone = window.matchMedia('(max-width: 600px)');
    if (smartphone.matches) {
        menu.classList.remove("showMenu");
        menu.classList.add("mainmenu");
        hamburger.addEventListener("click", toggleMenu);
        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener("click", toggleMenu);
        });
    }

    //Carosello Portfolio
    var i = 1;
    var arrCaroselli = document.querySelectorAll('.portfolio');
    arrCaroselli.forEach((item) => {
        var id = "car" + i;
        new Carosello(id);
        i++;
    });

    // Mostro il carattere massimo della sezione "commenti" del form
    var txt = document.getElementById('commenti');
    var output = document.getElementById('output');
    if (output) {
        output.innerHTML = 1000;
    }

    // Mostro i caratteri ancora a disposizione della sezione "commenti" del form
    if (txt) {
        txt.addEventListener('keyup', conto);
    }

    // Imposto il validatore del form in modo da bloccare il caricamento della pagina se qualcosa non va
    var form = document.getElementsByTagName('form')[0];
    if (form) {
        form.addEventListener('submit', function (e) {
            if (!validator()) {
                e.preventDefault();
            }
        });
    }

    //Crediti
    document.getElementById('cred').addEventListener("click", function () {
        document.getElementById('crediti').className = 'show';
    });

    document.getElementById('chiudi').addEventListener("click", function () {
        document.getElementById('crediti').className = 'hidden';
    });

    //Privacy policy
    document.getElementById('pp').addEventListener("click", function () {
        document.getElementById('policy').className = 'show';
    });

    document.getElementById('ok').addEventListener("click", function () {
        document.getElementById('policy').className = 'hidden';
    });


}