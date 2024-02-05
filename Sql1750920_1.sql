-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.137:3306
-- Creato il: Feb 05, 2024 alle 22:50
-- Versione del server: 5.7.43-47-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1750920_1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `barnav`
--

CREATE TABLE `barnav` (
  `idNav` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL DEFAULT '0',
  `link` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `barnav`
--

INSERT INTO `barnav` (`idNav`, `title`, `name`, `link`) VALUES
(1, 'chi sono', 'CHI SONO', '#'),
(2, 'portfolio', 'PORTFOLIO', '#cat1'),
(3, 'percorso', 'PERCORSO', '#miopercorso'),
(4, 'contact', 'CONTACT', '#form');

-- --------------------------------------------------------

--
-- Struttura della tabella `footer`
--

CREATE TABLE `footer` (
  `idFooter` int(10) NOT NULL,
  `imgText` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `footer`
--

INSERT INTO `footer` (`idFooter`, `imgText`, `link`) VALUES
(1, 'instagram-logo.png', 'http://www.instagram.com'),
(2, 'gmail-logo.png', 'luigifizzarotti@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `form`
--

CREATE TABLE `form` (
  `idForm` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `cognome` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `telefono` varchar(50) NOT NULL DEFAULT '0',
  `oggetto` varchar(50) DEFAULT '0',
  `profilo` varchar(50) NOT NULL DEFAULT '0',
  `commenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `form`
--

INSERT INTO `form` (`idForm`, `nome`, `cognome`, `email`, `telefono`, `oggetto`, `profilo`, `commenti`) VALUES
(1, 'Mario', 'Rossi', 'mariorossi@gmail.com', '3491234567', 'Sito internet', 'Preventivo', 'Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.'),
(2, 'Enzo', 'Bianchi', 'enzobianchi@gmail.com', '3499876543', 'Gestionale', 'Consulenza', 'Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.');

-- --------------------------------------------------------

--
-- Struttura della tabella `images`
--

CREATE TABLE `images` (
  `idImg` int(10) NOT NULL,
  `path` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `images`
--

INSERT INTO `images` (`idImg`, `path`) VALUES
(1, 'logo.png'),
(2, 'blu-scuro2.jpg'),
(3, 'blu-scuro1.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `sectChiSono`
--

CREATE TABLE `sectChiSono` (
  `idChiSono` int(10) UNSIGNED NOT NULL,
  `h3id` varchar(45) NOT NULL DEFAULT '0',
  `h3title` varchar(45) NOT NULL DEFAULT '0',
  `paragrafi` text,
  `img1` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sectChiSono`
--

INSERT INTO `sectChiSono` (`idChiSono`, `h3id`, `h3title`, `paragrafi`, `img1`) VALUES
(1, 'design', 'web design', 'Progetto e sviluppo siti web, portali e web applications, curandone l\'aspetto grafico, la semplicitÃ  di navigazione e la compatibilitÃ  con i vari dispositivi con l\'obiettivo di ottimizzare la User Experience, ovvero l\'esperienza dell\'utente all\'interno del sito.', 'web_design.png'),
(2, 'back', 'back end', 'Viene definito back end tutto ci&ograve; che opera dietro le quinte di una pagina web. Come programmatore back end sono in grado di usare i linguaggi di programmazione per codificare l\'architettura dei siti web, le API e gli script, e in generale l\'integrazione tra le richieste del front end e i dati contenuti nel database.', 'back_end.png'),
(3, 'front', 'front end', 'Mi occupo anche del lato utente delle pagine web, sia dell\'aspetto estetico che della parte funzionale. In altre parole il mio principale obiettivo &egrave quello di creare una user experience ottima applicando strumenti e metodi che rendono i siti facilmente navigabili da qualsiasi dispositivo e da qualunque utente.', 'front_end.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `sectPercorso`
--

CREATE TABLE `sectPercorso` (
  `idPercorso` int(10) UNSIGNED NOT NULL,
  `descrizione` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sectPercorso`
--

INSERT INTO `sectPercorso` (`idPercorso`, `descrizione`) VALUES
(1, 'Ho cominciato con gli strumenti base per la prototipazione dell\'interfaccia grafica'),
(2, 'Ho imparato i linguaggi fondamentali per la composizione del front-end'),
(3, 'Ho completato la conoscenza dei linguaggi base per la realizzazione del back-end'),
(4, 'Ho infine aggiunto frameworks e librerie importanti per la creazione di siti web avanzati');

-- --------------------------------------------------------

--
-- Struttura della tabella `sectPercorsoIcons`
--

CREATE TABLE `sectPercorsoIcons` (
  `idIcons` int(11) NOT NULL,
  `icons` varchar(45) NOT NULL DEFAULT '0',
  `idPercorso` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sectPercorsoIcons`
--

INSERT INTO `sectPercorsoIcons` (`idIcons`, `icons`, `idPercorso`) VALUES
(1, 'ps-logo.png', 1),
(2, 'figma-logo.png', 1),
(3, 'html5-logo.png', 2),
(4, 'css-logo.png', 2),
(6, 'javascript-logo.png', 2),
(7, 'php-logo.png', 3),
(8, 'mysql-logo.png', 3),
(9, 'bootstrap-logo.png', 4),
(10, 'laravel-logo.png', 4),
(11, 'typescript-logo.png', 4),
(12, 'rxjs-logo.png', 4),
(13, 'angular-logo.png', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `sectPortfolio`
--

CREATE TABLE `sectPortfolio` (
  `idProject` int(10) UNSIGNED NOT NULL,
  `titPortfolio` varchar(50) NOT NULL DEFAULT '0',
  `titolo` varchar(50) NOT NULL DEFAULT '0',
  `descrizione` text,
  `sfondo` varchar(45) NOT NULL DEFAULT '0',
  `href` varchar(45) NOT NULL DEFAULT '0',
  `data` date DEFAULT NULL,
  `luogo` varchar(45) NOT NULL DEFAULT '0',
  `cliente` varchar(45) NOT NULL DEFAULT '0',
  `categoria` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sectPortfolio`
--

INSERT INTO `sectPortfolio` (`idProject`, `titPortfolio`, `titolo`, `descrizione`, `sfondo`, `href`, `data`, `luogo`, `cliente`, `categoria`) VALUES
(1, 'Siti web', 'Il mio sito', 'Questo Ã¨ il mio primo progetto, il mio primo lavoro completo e funzionante, un sito ideato e sviluppato da me durante il percorso intrapreso con Accademia Code, curando sia la parte front-end che back-end. Ho usato php, mysql, html, sass e un po\' di javascript. Il sito Ã¨ responsive, perciÃ² si adatta allo smartphone, al tablet e al pc.', 'project1.gif', '?sub=1.1#cat1', '2023-11-30', 'Napoli', 'Accademia CODE', '1'),
(2, 'Siti web', 'prova 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'project2.gif', '?sub=1.2#cat1', '2023-11-01', 'Salerno', 'Privato', '1'),
(3, 'Siti web', 'prova 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'project7.gif', '?sub=1.3#cat1', '2023-11-01', 'Caserta', 'Privato', '1'),
(4, 'Collaborazioni', 'demo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'project5.gif', '?sub=2.4#cat2', '2023-11-01', 'Benevento', 'Privato', '2'),
(5, 'Collaborazioni', 'demo 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 'project6.gif', '?sub=2.5#cat2', '2023-11-30', 'Avellino', 'Privato', '2');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `idUser` int(10) NOT NULL,
  `nameUser` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `catUser` varchar(10) NOT NULL DEFAULT 'altro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idUser`, `nameUser`, `password`, `catUser`) VALUES
(1, 'luigifizzarotti@gmail.com', 'AccademiaCODE!', 'admin'),
(4, 'utente1@gmail.com', 'UtenteCODE?', 'utente');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `barnav`
--
ALTER TABLE `barnav`
  ADD PRIMARY KEY (`idNav`);

--
-- Indici per le tabelle `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`idFooter`);

--
-- Indici per le tabelle `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idForm`);

--
-- Indici per le tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idImg`);

--
-- Indici per le tabelle `sectChiSono`
--
ALTER TABLE `sectChiSono`
  ADD PRIMARY KEY (`idChiSono`);

--
-- Indici per le tabelle `sectPercorso`
--
ALTER TABLE `sectPercorso`
  ADD PRIMARY KEY (`idPercorso`);

--
-- Indici per le tabelle `sectPercorsoIcons`
--
ALTER TABLE `sectPercorsoIcons`
  ADD PRIMARY KEY (`idIcons`),
  ADD KEY `idPercorso` (`idPercorso`) USING BTREE;

--
-- Indici per le tabelle `sectPortfolio`
--
ALTER TABLE `sectPortfolio`
  ADD PRIMARY KEY (`idProject`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `barnav`
--
ALTER TABLE `barnav`
  MODIFY `idNav` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `footer`
--
ALTER TABLE `footer`
  MODIFY `idFooter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `form`
--
ALTER TABLE `form`
  MODIFY `idForm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `images`
--
ALTER TABLE `images`
  MODIFY `idImg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `sectChiSono`
--
ALTER TABLE `sectChiSono`
  MODIFY `idChiSono` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `sectPercorso`
--
ALTER TABLE `sectPercorso`
  MODIFY `idPercorso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `sectPercorsoIcons`
--
ALTER TABLE `sectPercorsoIcons`
  MODIFY `idIcons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `sectPortfolio`
--
ALTER TABLE `sectPortfolio`
  MODIFY `idProject` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `sectPercorsoIcons`
--
ALTER TABLE `sectPercorsoIcons`
  ADD CONSTRAINT `sectPercorsoIcons_ibfk_1` FOREIGN KEY (`idPercorso`) REFERENCES `sectPercorso` (`idPercorso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
