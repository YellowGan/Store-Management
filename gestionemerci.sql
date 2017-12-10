-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2016 alle 18:45
-- Versione del server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestionemerci`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `acquistare`
--

CREATE TABLE IF NOT EXISTS `acquistare` (
`id` int(5) NOT NULL,
  `id_p` int(5) NOT NULL,
  `id_a` int(5) NOT NULL,
  `quantita_p` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`id_c` int(5) NOT NULL,
  `nome_c` varchar(25) DEFAULT NULL,
  `cognome_c` varchar(25) DEFAULT NULL,
  `telefono_c` varchar(20) DEFAULT NULL,
  `indirizzo_c` varchar(30) DEFAULT NULL,
  `mail_c` varchar(30) DEFAULT NULL,
  `stato_c` varchar(7) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `fornitore`
--

CREATE TABLE IF NOT EXISTS `fornitore` (
`id_f` int(5) NOT NULL,
  `nome_f` varchar(20) DEFAULT NULL,
  `telefono_f` varchar(20) DEFAULT NULL,
  `indirizzo_f` varchar(20) DEFAULT NULL,
  `mail_f` varchar(25) DEFAULT NULL,
  `pi_f` varchar(25) DEFAULT NULL,
  `stato_f` varchar(7) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `magazzino`
--

CREATE TABLE IF NOT EXISTS `magazzino` (
`id_p` int(5) NOT NULL,
  `nome_p` varchar(15) DEFAULT NULL,
  `quantita_p` int(5) DEFAULT NULL,
  `costo_p` float DEFAULT NULL,
  `misura_p` varchar(15) DEFAULT NULL,
  `colore_p` varchar(15) DEFAULT NULL,
  `descrizione` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine_acquisto`
--

CREATE TABLE IF NOT EXISTS `ordine_acquisto` (
`id_a` int(5) NOT NULL,
  `data_a` date DEFAULT NULL,
  `fattura_a` varchar(2) DEFAULT NULL,
  `data_fattura_a` date DEFAULT NULL,
  `id_f` int(5) DEFAULT NULL,
  `totale_a` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine_vendita`
--

CREATE TABLE IF NOT EXISTS `ordine_vendita` (
`id_v` int(5) NOT NULL,
  `quantita_v` int(5) DEFAULT NULL,
  `data_v` date DEFAULT NULL,
  `fattura_v` varchar(2) DEFAULT NULL,
  `data_fattura_v` date DEFAULT NULL,
  `id_c` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `vendere`
--

CREATE TABLE IF NOT EXISTS `vendere` (
`id` int(5) NOT NULL,
  `id_p` int(5) NOT NULL,
  `id_v` int(5) NOT NULL,
  `quantita_p` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acquistare`
--
ALTER TABLE `acquistare`
 ADD PRIMARY KEY (`id`), ADD KEY `id_p` (`id_p`), ADD KEY `id_a` (`id_a`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `fornitore`
--
ALTER TABLE `fornitore`
 ADD PRIMARY KEY (`id_f`);

--
-- Indexes for table `magazzino`
--
ALTER TABLE `magazzino`
 ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `ordine_acquisto`
--
ALTER TABLE `ordine_acquisto`
 ADD PRIMARY KEY (`id_a`), ADD KEY `id_f` (`id_f`);

--
-- Indexes for table `ordine_vendita`
--
ALTER TABLE `ordine_vendita`
 ADD PRIMARY KEY (`id_v`), ADD KEY `id_c` (`id_c`);

--
-- Indexes for table `vendere`
--
ALTER TABLE `vendere`
 ADD PRIMARY KEY (`id`), ADD KEY `id_p` (`id_p`), ADD KEY `id_v` (`id_v`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acquistare`
--
ALTER TABLE `acquistare`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
MODIFY `id_c` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fornitore`
--
ALTER TABLE `fornitore`
MODIFY `id_f` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `magazzino`
--
ALTER TABLE `magazzino`
MODIFY `id_p` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ordine_acquisto`
--
ALTER TABLE `ordine_acquisto`
MODIFY `id_a` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ordine_vendita`
--
ALTER TABLE `ordine_vendita`
MODIFY `id_v` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `vendere`
--
ALTER TABLE `vendere`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `acquistare`
--
ALTER TABLE `acquistare`
ADD CONSTRAINT `acquistare_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `magazzino` (`id_p`),
ADD CONSTRAINT `acquistare_ibfk_2` FOREIGN KEY (`id_a`) REFERENCES `ordine_acquisto` (`id_a`);

--
-- Limiti per la tabella `ordine_acquisto`
--
ALTER TABLE `ordine_acquisto`
ADD CONSTRAINT `ordine_acquisto_ibfk_1` FOREIGN KEY (`id_f`) REFERENCES `fornitore` (`id_f`);

--
-- Limiti per la tabella `ordine_vendita`
--
ALTER TABLE `ordine_vendita`
ADD CONSTRAINT `ordine_vendita_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `cliente` (`id_c`);

--
-- Limiti per la tabella `vendere`
--
ALTER TABLE `vendere`
ADD CONSTRAINT `vendere_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `magazzino` (`id_p`),
ADD CONSTRAINT `vendere_ibfk_2` FOREIGN KEY (`id_v`) REFERENCES `ordine_vendita` (`id_v`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
