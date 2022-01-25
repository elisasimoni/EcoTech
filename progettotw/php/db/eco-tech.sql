-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 25, 2022 alle 22:38
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco-tech`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `idCARRELLO` int(11) NOT NULL,
  `nomeProdotto` varchar(45) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `valuta` varchar(45) NOT NULL,
  `quantità` varchar(45) NOT NULL,
  `punti_eco` int(11) NOT NULL,
  `idPRODOTTO` int(11) NOT NULL,
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `catalogo`
--

CREATE TABLE `catalogo` (
  `idCATALOGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `catalogo`
--

INSERT INTO `catalogo` (`idCATALOGO`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `idCATEGORIA` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descrizione` varchar(45) NOT NULL,
  `idCATALOGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`idCATEGORIA`, `nome`, `descrizione`, `idCATALOGO`) VALUES
(123, 'Musica', 'Oggetti tech musicali ecosostenibili', 1),
(456, 'Casa', 'Oggetti eco-tecnologici per la casa', 1),
(789, 'Telefonia', 'Accessori eco-sostenibili per la telefonia', 1),
(1011, 'Accessori Computer', 'Accessori tecnologici per il computer', 1),
(1213, 'Cover', 'Cover ecosostenibli', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE `cliente` (
  `idCLIENTE` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `cf` varchar(16) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(445) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `salt` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`idCLIENTE`, `nome`, `cognome`, `cf`, `email`, `password`, `telefono`, `salt`) VALUES
(99, 'Yuri', 'Collini', 'CODICEFIS1C12432', 'yuricollini36@gmail.com', 'bda/lI6CG3NG6', '34805250630', 'bddcc0d9c4f8c6a43c3d225dda61f70863755a93824bb'),
(100, 'Monica', 'Biguzzi', 'BGGMNO67B89C573J', 'monica.biguzzi@gmail.com', '57/XbkgrjwBOA', '3477962555', '575d37a8c1589b90a189e7c2adc432fd728905ff26f54'),
(101, 'Sofia', 'Bagagli', 'BGGSFO99A63C573J', 'sofia.bagagli@outlook.it', '6aTwEWGn/qJvo', '3206392944', '6a237ed9329d76496c259c9180aa54652e438a415f4e7'),
(104, 'profilo', 'prova', 'BGGSFO99A63C573J', 'profiloprova@gmail.com', '46Y2G5jMdtrKo', '1234567891', '462f79ac39dc6bf3d2f1612468efd1803cfeb564a6fb2'),
(105, 'Pino', 'Pini', 'smnsfn65r04d403o', 's.sim@libero.it', 'daljz6tUcj3NA', '3405824231', 'da4e65c0bd71833da76291f44133a1926ce58c0b19d35');

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE `immagine` (
  `idIMMAGINE` int(11) NOT NULL,
  `url` varchar(45) NOT NULL,
  `titolo` varchar(45) NOT NULL,
  `alt` varchar(45) NOT NULL,
  `descrizione` varchar(455) NOT NULL,
  `idPRODOTTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`idIMMAGINE`, `url`, `titolo`, `alt`, `descrizione`, `idPRODOTTO`) VALUES
(1, 'cassa.jpg', 'Cassa bluetooth legno', 'Cassa bluetooth legno', 'Cassa bluetooth legno chiaro', 3192),
(2, 'solare.jpg', 'Caricatore Solare', 'Caricatore Solare', 'caricatore solare portatile', 3178),
(7, 'tastiera.jpg', 'tastiera in legno', 'tastiera in legno', 'tastiera in legno', 4798),
(16, 'fairphone.jpg', 'FairPhone', 'FairPhone', 'Telefono Sostenibile', 4561),
(20, 'orolo.png', 'Sveglia Ad Acqua', 'Sveglia Ad Acqua', 'Sveglia Ad Acqua', 1313),
(21, 'usb.png', 'Chiavetta Usb ', 'Chiavetta Usb ', 'Chiavetta Usb', 7945),
(22, 'borraccia.png', 'Borraccia Tech', 'Borraccia Tech', 'Borraccia Tech', 4597);

-- --------------------------------------------------------

--
-- Struttura della tabella `magazzino`
--

CREATE TABLE `magazzino` (
  `idMAGAZZINO` int(11) NOT NULL,
  `quantità` varchar(45) NOT NULL,
  `stato` varchar(45) DEFAULT 'Disponibile',
  `idPRODOTTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `magazzino`
--

INSERT INTO `magazzino` (`idMAGAZZINO`, `quantità`, `stato`, `idPRODOTTO`) VALUES
(1002, '36', 'Disponibile', 3178),
(1003, '39', 'Disponibile', 3192),
(1004, '36', 'Disponibile', 4798),
(1012, '32', 'Disponibile', 4561),
(1015, '47', 'Disponibile', 1313),
(1016, '39', 'Disponibile', 7945),
(1017, '48', 'Disponibile', 4597),
(1021, '0', 'Esaurito', 15249);

-- --------------------------------------------------------

--
-- Struttura della tabella `notifiche`
--

CREATE TABLE `notifiche` (
  `idNOTIFICHE` int(11) NOT NULL,
  `testo` varchar(445) NOT NULL,
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `notifiche`
--

INSERT INTO `notifiche` (`idNOTIFICHE`, `testo`, `idCLIENTE`) VALUES
(1, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\nIn data e ora: 2022-01-21 02:26:52\nil suo codice identificativo dell\'ordine:\n7tsORQJH8HR', 100),
(2, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine! \nIn data e ora: 2022-01-24 01:10:49\nil suo codice identificativo dell\'ordine:\neP0ATJW6xC', 100),
(3, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\nIn data e ora: 2022-01-24 01:56:38\nil suo codice identificativo dell\'ordine:\nIaMCcj8gZh', 100),
(4, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\nIn data e ora: 2022-01-24 01:57:33\nil suo codice identificativo dell\'ordine:\nE7uYI0A0by', 100),
(5, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 02:03:40\r\nil suo codice identificativo dell\'ordine:\r\n6QhnkgQXFk', 100),
(6, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:00:24\r\nil suo codice identificativo dell\'ordine:\r\nI2D8Xyrja0', 100),
(7, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:37:59\r\nil suo codice identificativo dell\'ordine:\r\nGPMxzfRjgR', 100),
(8, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:39:21\r\nil suo codice identificativo dell\'ordine:\r\nqb4tNFpdug', 100),
(9, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:41:59\r\nil suo codice identificativo dell\'ordine:\r\nej1APppSPj', 100),
(10, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:43:29\r\nil suo codice identificativo dell\'ordine:\r\nDZe1KCdbEp', 100),
(11, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:46:36\r\nil suo codice identificativo dell\'ordine:\r\nMNrRG4EcNj', 100),
(12, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:46:36\r\nil suo codice identificativo dell\'ordine:\r\nMNrRG4EcNj', 100),
(13, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:57:03\r\nil suo codice identificativo dell\'ordine:\r\nqFFaRCcO2Y', 100),
(14, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\nIn data e ora: 2022-01-24 03:57:03\r\nil suo codice identificativo dell\'ordine:\r\nqFFaRCcO2Y', 100),
(15, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:45:17\r\n          il suo codice identificativo dell\'ordine:\r\n          bOGj6sVCOx', 100),
(16, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:45:17\r\n          il suo codice identificativo dell\'ordine:\r\n          bOGj6sVCOx', 100),
(17, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:48:11\r\n          il suo codice identificativo dell\'ordine:\r\n          rwojMyK8o9', 100),
(18, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:48:11\r\n          il suo codice identificativo dell\'ordine:\r\n          rwojMyK8o9', 100),
(19, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:55:39\r\n          il suo codice identificativo dell\'ordine:\r\n          kLjtUljp2x', 100),
(20, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:56:23\r\n          il suo codice identificativo dell\'ordine:\r\n          66HNfvo5TB', 100),
(21, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:59:13\r\n          il suo codice identificativo dell\'ordine:\r\n          789nMEYCma', 100),
(22, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:59:52\r\n          il suo codice identificativo dell\'ordine:\r\n          xXRs2aGEZl', 100),
(23, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:59:52\r\n          il suo codice identificativo dell\'ordine:\r\n          xXRs2aGEZl', 100),
(24, 'Gentile Monica Biguzzi, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 05:59:52\r\n          il suo codice identificativo dell\'ordine:\r\n          xXRs2aGEZl', 100),
(25, 'Gentile Sofia Bagagli, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 06:53:30\r\n          il suo codice identificativo dell\'ordine:\r\n          2UwlFqxLnM', 101),
(26, 'Gentile Sofia Bagagli, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 06:53:30\r\n          il suo codice identificativo dell\'ordine:\r\n          2UwlFqxLnM', 101),
(27, 'Gentile Sofia Bagagli, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 07:19:56\r\n          il suo codice identificativo dell\'ordine:\r\n          ZJhGdHk0fI', 101),
(28, 'Gentile profilo prova, l\'odrine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-24 07:25:00\r\n          il suo codice identificativo dell\'ordine:\r\n          l6iXRuZV0F', 102),
(29, 'Gentile Yuri Collini, l\'ordine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-25 03:00:22\r\n          il suo codice identificativo dell\'ordine:\r\n          sOTYEr2yJU', 99),
(30, 'Il cliente, Yuri Collini, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 03:00:22\r\n            codice ordine:\r\n            sOTYEr2yJU', 0),
(31, 'Gentile Yuri Collini, l\'ordine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-25 04:17:19\r\n          il suo codice identificativo dell\'ordine:\r\n          IBDOQ6a4WP', 99),
(32, 'Il cliente, Yuri Collini, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 04:17:19\r\n            codice ordine:\r\n            IBDOQ6a4WP', 0),
(33, 'Gentile Yuri Collini, l\'ordine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-25 04:18:15\r\n          il suo codice identificativo dell\'ordine:\r\n          Xg1z6Du3Ea', 99),
(34, 'Il cliente, Yuri Collini, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 04:18:15\r\n            codice ordine:\r\n            Xg1z6Du3Ea', 0),
(35, 'Gentile Yuri Collini, l\'ordine da lei effettuato è andato a buon fine!\r\n          In data e ora: 2022-01-25 04:21:19\r\n          il suo codice identificativo dell\'ordine:\r\n          Nx4Gj8u7qJ', 99),
(36, 'Gentile Yuri Collini, il suo ordine , è stato spedizione.', 99),
(37, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(38, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(39, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(40, 'Gentile Sofia Bagagli, il suo ordine , è stato spedito.', 101),
(41, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(42, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(43, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(44, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(45, 'Gentile Yuri Collini, il suo ordine , è stato spedito.', 99),
(46, 'Gentile Yuri Collini, il suo ordine sOTYEr2yJU, è stato spedito.', 99),
(47, 'Gentile Yuri Collini, il suo ordine IBDOQ6a4WP, è stato spedito.', 99),
(48, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(49, 'Gentile Yuri Collini, il suo ordine Nx4Gj8u7qJ, è stato spedito.', 99),
(50, 'Gentile Yuri Collini, il suo ordine sOTYEr2yJU, è stato spedito.', 99),
(51, 'Gentile Sofia Bagagli, l\'ordine da lei effettuato è andato a buon fine!\r\n            In data e ora: 2022-01-25 06:13:11\r\n            il suo codice identificativo dell\'ordine:\r\n            w9ArwopocY.', 101),
(52, 'Gentile Sofia Bagagli, il suo ordine w9ArwopocY, è stato spedito.', 101),
(53, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(54, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(55, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(56, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(57, 'Gentile Yuri Collini, il suo ordine Nx4Gj8u7qJ, è stato spedito.', 99),
(58, 'Gentile Sofia Bagagli, il suo ordine w9ArwopocY, è stato spedito.', 101),
(59, 'Gentile Sofia Bagagli, il suo ordine w9ArwopocY, è stato spedito.', 101),
(60, 'Gentile Yuri Collini, il suo ordine Nx4Gj8u7qJ, è stato spedito.', 99),
(61, 'Gentile Yuri Collini, il suo ordine Nx4Gj8u7qJ, è stato spedito.', 99),
(62, 'Gentile Yuri Collini, il suo ordine Nx4Gj8u7qJ, è stato spedito.', 99),
(63, 'Gentile Yuri Collini, il suo ordine Xg1z6Du3Ea, è stato spedito.', 99),
(64, 'Gentile Pino Pasqualini, l\'ordine da lei effettuato è andato a buon fine!\r\n            In data e ora: 2022-01-25 08:44:15\r\n            il suo codice identificativo dell\'ordine:\r\n            hL4cLjVmFf.', 105),
(65, 'Gentile Monica Biguzzi, l\'ordine da lei effettuato è andato a buon fine!\r\n            In data e ora: 2022-01-25 08:57:31\r\n            il suo codice identificativo dell\'ordine:\r\n            YqDazCj1nF.', 100),
(66, 'Gentile Pino Pasqualini, l\'ordine da lei effettuato è andato a buon fine!\r\n            In data e ora: 2022-01-25 09:21:55\r\n            il suo codice identificativo dell\'ordine:\r\n            CwPkDnsnFI.', 105),
(67, 'Gentile Pino Pasqualini, il suo ordine CwPkDnsnFI, è stato spedito.', 105),
(68, 'Gentile Monica Biguzzi, l\'ordine da lei effettuato è andato a buon fine!\r\n            In data e ora: 2022-01-25 10:15:20\r\n            il suo codice identificativo dell\'ordine:\r\n            RFEv0Cakld.', 100);

-- --------------------------------------------------------

--
-- Struttura della tabella `notifichevenditore`
--

CREATE TABLE `notifichevenditore` (
  `idNOTIFICHEVEND` int(11) NOT NULL,
  `testo` varchar(445) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `notifichevenditore`
--

INSERT INTO `notifichevenditore` (`idNOTIFICHEVEND`, `testo`) VALUES
(1, 'Il cliente, Yuri Collini, ha effettuato un ordine!\n            In data e ora: 2022-01-25 04:21:19\n            codice ordine:\n            Nx4Gj8u7qJ'),
(2, 'Il cliente, Sofia Bagagli, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 06:13:11\r\n            codice ordine:\r\n            w9ArwopocY.'),
(3, 'Il cliente, Pino Pasqualini, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 08:44:15\r\n            codice ordine:\r\n            hL4cLjVmFf.'),
(4, 'il prodotto, Babbo Natale, è esaurito! Affrettati a ricaricare il magazzino! '),
(5, 'Il cliente, Monica Biguzzi, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 08:57:31\r\n            codice ordine:\r\n            YqDazCj1nF.'),
(6, 'Il cliente, Pino Pasqualini, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 09:21:55\r\n            codice ordine:\r\n            CwPkDnsnFI.'),
(7, 'Il cliente, Monica Biguzzi, ha effettuato un ordine!\r\n            In data e ora: 2022-01-25 10:15:20\r\n            codice ordine:\r\n            RFEv0Cakld.');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE `ordine` (
  `idORDINE` int(11) NOT NULL,
  `dataOra` datetime NOT NULL,
  `codice` varchar(45) NOT NULL,
  `stato` varchar(445) NOT NULL,
  `importo` int(11) NOT NULL,
  `tipologia_pagamento` varchar(45) NOT NULL,
  `idVENDITORE` int(11) NOT NULL,
  `idCLIENTE` int(11) NOT NULL,
  `idPAGAMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`idORDINE`, `dataOra`, `codice`, `stato`, `importo`, `tipologia_pagamento`, `idVENDITORE`, `idCLIENTE`, `idPAGAMENTO`) VALUES
(21, '2022-01-21 02:26:52', '7tsORQJH8HR', 'in elaborazione', 30, 'Carta di Credito', 1, 100, 36),
(22, '2022-01-24 01:10:49', 'eP0ATJW6xC', 'in elaborazione', 30, 'Carta di Credito', 1, 100, 37),
(23, '2022-01-24 01:38:15', 'Y3pILUg3oh', 'in elaborazione', 31, 'Carta di Credito', 1, 100, 38),
(24, '2022-01-24 01:41:01', '8ag1zdiQj4', 'in elaborazione', 24, 'Carta di Credito', 1, 100, 39),
(25, '2022-01-24 01:56:38', 'IaMCcj8gZh', 'in elaborazione', 24, 'Carta di Credito', 1, 100, 40),
(26, '2022-01-24 01:57:33', 'E7uYI0A0by', 'in elaborazione', 579, 'Carta di Credito', 1, 100, 41),
(27, '2022-01-24 02:03:40', '6QhnkgQXFk', 'in elaborazione', 24, 'Carta di Credito', 1, 100, 42),
(28, '2022-01-24 03:00:24', 'I2D8Xyrja0', 'in elaborazione', 579, 'PayPal', 1, 100, 43),
(29, '2022-01-24 03:39:21', 'qb4tNFpdug', 'in elaborazione', 30, 'Googlepay', 1, 100, 45),
(30, '2022-01-24 03:41:59', 'ej1APppSPj', 'in elaborazione', 31, 'Googlepay', 1, 100, 46),
(31, '2022-01-24 03:43:29', 'DZe1KCdbEp', 'in elaborazione', 30, 'Googlepay', 1, 100, 47),
(32, '2022-01-24 03:46:36', 'MNrRG4EcNj', 'in elaborazione', 47, 'Carta di Credito', 1, 100, 48),
(35, '2022-01-24 03:57:03', 'qFFaRCcO2Y', 'in elaborazione', 47, 'PayPal', 1, 100, 50),
(38, '2022-01-24 05:56:23', '66HNfvo5TB', 'in elaborazione', 30, 'Carta di Credito', 1, 100, 55),
(39, '2022-01-24 05:59:13', '789nMEYCma', 'in elaborazione', 17, 'Googlepay', 1, 100, 56),
(40, '2022-01-24 05:59:52', 'xXRs2aGEZl', 'in elaborazione', 78, 'Googlepay', 1, 100, 57),
(43, '2022-01-24 06:53:30', '2UwlFqxLnM', 'in elaborazione', 603, 'PayPal', 1, 101, 58),
(44, '2022-01-24 07:19:56', 'ZJhGdHk0fI', 'in elaborazione', 72, 'Googlepay', 1, 101, 59),
(46, '2022-01-25 03:00:22', 'sOTYEr2yJU', 'in elaborazione', 30, 'Googlepay', 1, 99, 61),
(47, '2022-01-25 04:17:19', 'IBDOQ6a4WP', 'in elaborazione', 30, 'PayPal', 1, 99, 62),
(48, '2022-01-25 04:18:15', 'Xg1z6Du3Ea', 'spedito', 54, 'Carta di Credito', 1, 99, 63),
(49, '2022-01-25 04:21:19', 'Nx4Gj8u7qJ', 'spedito', 30, 'Carta di Credito', 1, 99, 64),
(50, '2022-01-25 06:13:11', 'w9ArwopocY', 'spedito', 30, 'Carta di Credito', 1, 101, 65),
(51, '2022-01-25 08:44:15', 'hL4cLjVmFf', 'in elaborazione', 596, 'Carta di Credito', 1, 105, 66),
(52, '2022-01-25 08:57:31', 'YqDazCj1nF', 'in elaborazione', 650, 'Googlepay', 1, 100, 67),
(53, '2022-01-25 09:21:55', 'CwPkDnsnFI', 'spedito', 79, 'Carta di Credito', 1, 105, 68),
(54, '2022-01-25 10:15:20', 'RFEv0Cakld', 'in elaborazione', 119, 'Carta di Credito', 1, 100, 69);

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamento`
--

CREATE TABLE `pagamento` (
  `idPAGAMENTO` int(11) NOT NULL,
  `tipologia_pagamento` varchar(445) NOT NULL,
  `importo` int(11) NOT NULL,
  `dataOra` datetime NOT NULL,
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `pagamento`
--

INSERT INTO `pagamento` (`idPAGAMENTO`, `tipologia_pagamento`, `importo`, `dataOra`, `idCLIENTE`) VALUES
(36, 'Carta di Credito', 30, '2022-01-21 02:26:52', 100),
(37, 'Carta di Credito', 30, '2022-01-24 01:10:49', 100),
(38, 'Carta di Credito', 31, '2022-01-24 01:38:15', 100),
(39, 'Carta di Credito', 24, '2022-01-24 01:41:01', 100),
(40, 'Carta di Credito', 24, '2022-01-24 01:56:38', 100),
(41, 'Carta di Credito', 579, '2022-01-24 01:57:33', 100),
(42, 'Carta di Credito', 24, '2022-01-24 02:03:40', 100),
(43, 'PayPal', 579, '2022-01-24 03:00:24', 100),
(44, 'Googlepay', 24, '2022-01-24 03:37:59', 100),
(45, 'Googlepay', 30, '2022-01-24 03:39:21', 100),
(46, 'Googlepay', 31, '2022-01-24 03:41:59', 100),
(47, 'Googlepay', 30, '2022-01-24 03:43:29', 100),
(48, 'Carta di Credito', 47, '2022-01-24 03:46:36', 100),
(49, 'Carta di Credito', 47, '2022-01-24 03:46:36', 100),
(50, 'PayPal', 47, '2022-01-24 03:57:03', 100),
(51, 'PayPal', 47, '2022-01-24 03:57:03', 100),
(52, 'Googlepay', 47, '2022-01-24 05:45:17', 100),
(53, 'PayPal', 47, '2022-01-24 05:48:11', 100),
(54, 'Carta di Credito', 579, '2022-01-24 05:55:39', 100),
(55, 'Carta di Credito', 30, '2022-01-24 05:56:23', 100),
(56, 'Googlepay', 17, '2022-01-24 05:59:13', 100),
(57, 'Googlepay', 78, '2022-01-24 05:59:52', 100),
(58, 'PayPal', 603, '2022-01-24 06:53:30', 101),
(59, 'Googlepay', 72, '2022-01-24 07:19:56', 101),
(60, 'Googlepay', 30, '2022-01-24 07:25:00', 102),
(61, 'Googlepay', 30, '2022-01-25 03:00:22', 99),
(62, 'PayPal', 30, '2022-01-25 04:17:19', 99),
(63, 'Carta di Credito', 54, '2022-01-25 04:18:15', 99),
(64, 'Carta di Credito', 30, '2022-01-25 04:21:19', 99),
(65, 'Carta di Credito', 30, '2022-01-25 06:13:11', 101),
(66, 'Carta di Credito', 596, '2022-01-25 08:44:15', 105),
(67, 'Googlepay', 650, '2022-01-25 08:57:31', 100),
(68, 'Carta di Credito', 79, '2022-01-25 09:21:55', 105),
(69, 'Carta di Credito', 119, '2022-01-25 10:15:20', 100);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `idPRODOTTO` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descrizione_breve` varchar(45) NOT NULL,
  `descrizione_completa` varchar(455) NOT NULL,
  `prezzo` varchar(45) NOT NULL,
  `valuta` varchar(45) NOT NULL DEFAULT '€',
  `punti_eco` int(10) NOT NULL,
  `idCATEGORIA` int(11) NOT NULL,
  `idVENDITORE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`idPRODOTTO`, `nome`, `descrizione_breve`, `descrizione_completa`, `prezzo`, `valuta`, `punti_eco`, `idCATEGORIA`, `idVENDITORE`) VALUES
(1313, 'Sveglia Ad Acqua', 'Orologio digitale da tavolo', 'Orologio digitale da tavolo con display LCD alimentato ad acqua o da qualsiasi altro liquido.', '21,00', '€', 6, 456, 0),
(3178, 'Caricatore Solare', 'Caricatore solare portatile', 'Caricatore solare in alluminio, con pannello solare al Litio 3000mAh, ingresso DC 5.0V/1A, uscita DC (USB-L), 5V/800mA, uscita DC (USB-H); 5.0V/1.2 a, contiene cavo 3 funzioni, adatto per la maggior parte dei cellulare', '30,00', '€', 6, 789, 1),
(3192, 'Cassa bluetooth', 'Cassa bluetooth in legno', 'Cassa bluetooth con amplificatore interno.\r\nBatteria ricaricabile agli ioni di litio da 400 mAh. Include cavetto USB per la ricarica.', '17,00', '€', 2, 123, 1),
(4561, 'Fairphone4', 'Telefono Sostenibile. Durevole. Equo.', 'Uno smartphone di qualità incentrato sulla sostenibilità\r\nLa sostenibilità non è mai stata così importante. Progettato per durare a lungo, con materiali sostenibili e riciclati, Fairphone 4 ti offre la velocità 5G, con un&#039;ottima durata della batteria e una doppia fotocamera di altissima qualità, il tutto supportato da una garanzia di 5 anni.', '579,00', '€', 5, 789, 1),
(4597, 'Borraccia Tech', 'Borraccia Tech', 'Borraccia Tech', '30,00', '€', 5, 456, 0),
(4798, 'Tastiera in Legno', 'Tastiera in legno chiaro ', 'Tastiera in legno chiaro con tasti in plastica colorati. \r\nTastiera meccanica', '24,00', '€', 3, 1011, 1),
(7945, 'Chiavetta Usb 64gb', 'Chiavetta in legno, con capacità 64 gb.', 'Chiavetta USB type A, realizzata con legno riciclato, capacità 64GB.', '30,00', '€', 3, 1011, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `rubrica_indirizzi`
--

CREATE TABLE `rubrica_indirizzi` (
  `idRUBRICAINDIRIZZI` int(11) NOT NULL,
  `stato` varchar(45) NOT NULL,
  `regione` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `città` varchar(45) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `via` varchar(455) NOT NULL,
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `rubrica_indirizzi`
--

INSERT INTO `rubrica_indirizzi` (`idRUBRICAINDIRIZZI`, `stato`, `regione`, `provincia`, `città`, `cap`, `via`, `idCLIENTE`) VALUES
(4, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Villamarina', '0', 'Via Acquario, 48', 99),
(5, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Villamarina', '', 'Via Acquario, 48', 99),
(6, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Villamarina', '', 'Via Acquario, 48', 99),
(7, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Villamarina', '', 'Via Acquario, 48', 99),
(8, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Forlimpopoli', '', 'via bruno buozzi', 101),
(9, 'italia', 'Emilia-Romagna', 'Forlì-Cesena', 'Forli', '', 'Via Pippo 3', 105),
(10, 'italia', 'Piemonte', 'Napoli', 'Forli', '', 'Via Cervese 130', 100),
(11, 'italia', 'Emilia-Romagna', 'Napoli', 'Forli', '', 'Via Cervese 130', 105),
(12, 'italia', 'Lombardia', 'Roma', 'Padova', '', 'Via Cervese 130', 100);

-- --------------------------------------------------------

--
-- Struttura della tabella `spedizione`
--

CREATE TABLE `spedizione` (
  `idSPEDIZIONE` int(11) NOT NULL,
  `stato` enum('in elaborazione','elaborato','in spedizione','spedito','consegnato') NOT NULL,
  `idTARIFFA` int(11) NOT NULL,
  `idORDINE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `storicoacquisti`
--

CREATE TABLE `storicoacquisti` (
  `idACQUISTI` int(11) NOT NULL,
  `dataOra` datetime NOT NULL,
  `idPRODOTTO` int(11) NOT NULL,
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `storicoacquisti`
--

INSERT INTO `storicoacquisti` (`idACQUISTI`, `dataOra`, `idPRODOTTO`, `idCLIENTE`) VALUES
(6, '2022-01-21 02:26:52', 3178, 100),
(7, '2022-01-24 01:10:49', 3178, 100),
(8, '2022-01-24 01:38:15', 1311, 100),
(9, '2022-01-24 01:41:01', 4798, 100),
(10, '2022-01-24 01:51:44', 4798, 100),
(11, '2022-01-24 01:56:38', 4798, 100),
(12, '2022-01-24 01:57:33', 4561, 100),
(13, '2022-01-24 02:03:40', 4798, 100),
(14, '2022-01-24 03:00:24', 4561, 100),
(15, '2022-01-24 03:37:59', 4798, 100),
(16, '2022-01-24 03:39:21', 3178, 100),
(17, '2022-01-24 03:41:59', 1311, 100),
(18, '2022-01-24 03:43:29', 3178, 100),
(19, '2022-01-24 03:46:36', 3192, 100),
(20, '2022-01-24 03:46:36', 3178, 100),
(21, '2022-01-24 03:57:03', 3178, 100),
(22, '2022-01-24 03:57:03', 3192, 100),
(23, '2022-01-24 05:45:17', 0, 100),
(24, '2022-01-24 05:45:17', 0, 100),
(25, '2022-01-24 05:48:11', 0, 100),
(26, '2022-01-24 05:48:11', 0, 100),
(27, '2022-01-24 05:55:39', 0, 100),
(28, '2022-01-24 05:56:23', 0, 100),
(29, '2022-01-24 05:59:13', 0, 100),
(30, '2022-01-24 05:59:52', 0, 100),
(31, '2022-01-24 05:59:52', 0, 100),
(32, '2022-01-24 05:59:52', 0, 100),
(33, '2022-01-24 06:53:30', 4561, 101),
(34, '2022-01-24 06:53:30', 4798, 101),
(35, '2022-01-24 07:19:56', 1311, 101),
(36, '2022-01-24 07:19:56', 3192, 101),
(37, '2022-01-24 07:19:56', 4798, 101),
(38, '2022-01-24 07:25:00', 3178, 102),
(39, '2022-01-25 03:00:22', 3178, 99),
(40, '2022-01-25 04:17:19', 7945, 99),
(41, '2022-01-25 04:18:15', 4798, 99),
(42, '2022-01-25 04:18:15', 4597, 99),
(43, '2022-01-25 04:21:19', 3178, 99),
(44, '2022-01-25 06:13:11', 4597, 101),
(45, '2022-01-25 08:44:15', 3192, 105),
(46, '2022-01-25 08:44:15', 4561, 105),
(47, '2022-01-25 08:57:31', 15249, 100),
(48, '2022-01-25 09:21:55', 4798, 105),
(49, '2022-01-25 09:21:55', 3192, 105),
(50, '2022-01-25 09:21:55', 1313, 105),
(51, '2022-01-25 10:15:20', 3178, 100),
(52, '2022-01-25 10:15:20', 1313, 100),
(53, '2022-01-25 10:15:20', 3192, 100);

-- --------------------------------------------------------

--
-- Struttura della tabella `tariffa`
--

CREATE TABLE `tariffa` (
  `idTARIFFA` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valore` int(11) NOT NULL,
  `valuta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tariffa`
--

INSERT INTO `tariffa` (`idTARIFFA`, `nome`, `valore`, `valuta`) VALUES
(1, 'Italia', 5, '€');

-- --------------------------------------------------------

--
-- Struttura della tabella `tessera`
--

CREATE TABLE `tessera` (
  `idTESSERA` int(11) NOT NULL,
  `punteggio` varchar(45) NOT NULL DEFAULT '0',
  `idCLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tessera`
--

INSERT INTO `tessera` (`idTESSERA`, `punteggio`, `idCLIENTE`) VALUES
(1, '91', 100),
(3, '19', 101),
(6, '17', 99),
(7, '0', 104),
(8, '18', 105);

-- --------------------------------------------------------

--
-- Struttura della tabella `venditore`
--

CREATE TABLE `venditore` (
  `idVENDITORE` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cognome` varchar(45) DEFAULT NULL,
  `nomeAzienda` varchar(45) DEFAULT NULL,
  `cf` varchar(16) DEFAULT NULL,
  `p.iva` varchar(13) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(16) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `venditore`
--

INSERT INTO `venditore` (`idVENDITORE`, `nome`, `cognome`, `nomeAzienda`, `cf`, `p.iva`, `email`, `password`, `telefono`) VALUES
(1, NULL, NULL, 'La Bottega Grafica', '/', 'IT08501511219', 'info@labottegrafica.com', '78940', 2147483647);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCARRELLO`),
  ADD KEY `idPRODOTTO` (`idPRODOTTO`),
  ADD KEY `idcliente1` (`idCLIENTE`);

--
-- Indici per le tabelle `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idCATALOGO`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCATEGORIA`),
  ADD KEY `idCATALOGO` (`idCATALOGO`);

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCLIENTE`);

--
-- Indici per le tabelle `immagine`
--
ALTER TABLE `immagine`
  ADD PRIMARY KEY (`idIMMAGINE`),
  ADD KEY `prodotto` (`idPRODOTTO`);

--
-- Indici per le tabelle `magazzino`
--
ALTER TABLE `magazzino`
  ADD PRIMARY KEY (`idMAGAZZINO`),
  ADD KEY `id_prodotto` (`idPRODOTTO`);

--
-- Indici per le tabelle `notifiche`
--
ALTER TABLE `notifiche`
  ADD PRIMARY KEY (`idNOTIFICHE`);

--
-- Indici per le tabelle `notifichevenditore`
--
ALTER TABLE `notifichevenditore`
  ADD PRIMARY KEY (`idNOTIFICHEVEND`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`idORDINE`),
  ADD KEY `cliente1` (`idCLIENTE`),
  ADD KEY `idVENDITORE` (`idVENDITORE`),
  ADD KEY `idPAGAMENTO` (`idPAGAMENTO`);

--
-- Indici per le tabelle `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idPAGAMENTO`),
  ADD KEY `idCARRELLO` (`idCLIENTE`);

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`idPRODOTTO`),
  ADD KEY `idCATEGORIA` (`idCATEGORIA`);

--
-- Indici per le tabelle `rubrica_indirizzi`
--
ALTER TABLE `rubrica_indirizzi`
  ADD PRIMARY KEY (`idRUBRICAINDIRIZZI`),
  ADD KEY `idCLIENTE` (`idCLIENTE`);

--
-- Indici per le tabelle `spedizione`
--
ALTER TABLE `spedizione`
  ADD PRIMARY KEY (`idSPEDIZIONE`),
  ADD KEY `idTARIFFA` (`idTARIFFA`),
  ADD KEY `idORDINE` (`idORDINE`);

--
-- Indici per le tabelle `storicoacquisti`
--
ALTER TABLE `storicoacquisti`
  ADD PRIMARY KEY (`idACQUISTI`),
  ADD KEY `idpr` (`idPRODOTTO`),
  ADD KEY `idcli` (`idCLIENTE`);

--
-- Indici per le tabelle `tariffa`
--
ALTER TABLE `tariffa`
  ADD PRIMARY KEY (`idTARIFFA`);

--
-- Indici per le tabelle `tessera`
--
ALTER TABLE `tessera`
  ADD PRIMARY KEY (`idTESSERA`),
  ADD KEY `cliente` (`idCLIENTE`);

--
-- Indici per le tabelle `venditore`
--
ALTER TABLE `venditore`
  ADD PRIMARY KEY (`idVENDITORE`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCARRELLO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT per la tabella `immagine`
--
ALTER TABLE `immagine`
  MODIFY `idIMMAGINE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT per la tabella `magazzino`
--
ALTER TABLE `magazzino`
  MODIFY `idMAGAZZINO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

--
-- AUTO_INCREMENT per la tabella `notifiche`
--
ALTER TABLE `notifiche`
  MODIFY `idNOTIFICHE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT per la tabella `notifichevenditore`
--
ALTER TABLE `notifichevenditore`
  MODIFY `idNOTIFICHEVEND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `idORDINE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT per la tabella `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idPAGAMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT per la tabella `rubrica_indirizzi`
--
ALTER TABLE `rubrica_indirizzi`
  MODIFY `idRUBRICAINDIRIZZI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `spedizione`
--
ALTER TABLE `spedizione`
  MODIFY `idSPEDIZIONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `storicoacquisti`
--
ALTER TABLE `storicoacquisti`
  MODIFY `idACQUISTI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT per la tabella `tariffa`
--
ALTER TABLE `tariffa`
  MODIFY `idTARIFFA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `tessera`
--
ALTER TABLE `tessera`
  MODIFY `idTESSERA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `venditore`
--
ALTER TABLE `venditore`
  MODIFY `idVENDITORE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `idPRODOTTO` FOREIGN KEY (`idPRODOTTO`) REFERENCES `prodotto` (`idPRODOTTO`),
  ADD CONSTRAINT `idcliente1` FOREIGN KEY (`idCLIENTE`) REFERENCES `cliente` (`idCLIENTE`);

--
-- Limiti per la tabella `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `idCATALOGO` FOREIGN KEY (`idCATALOGO`) REFERENCES `catalogo` (`idCATALOGO`);

--
-- Limiti per la tabella `immagine`
--
ALTER TABLE `immagine`
  ADD CONSTRAINT `prodotto` FOREIGN KEY (`idPRODOTTO`) REFERENCES `prodotto` (`idPRODOTTO`);

--
-- Limiti per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  ADD CONSTRAINT `idCATEGORIA` FOREIGN KEY (`idCATEGORIA`) REFERENCES `categoria` (`idCATEGORIA`);

--
-- Limiti per la tabella `rubrica_indirizzi`
--
ALTER TABLE `rubrica_indirizzi`
  ADD CONSTRAINT `idCLIENTE` FOREIGN KEY (`idCLIENTE`) REFERENCES `cliente` (`idCLIENTE`);

--
-- Limiti per la tabella `spedizione`
--
ALTER TABLE `spedizione`
  ADD CONSTRAINT `idORDINE` FOREIGN KEY (`idORDINE`) REFERENCES `ordine` (`idORDINE`),
  ADD CONSTRAINT `idTARIFFA` FOREIGN KEY (`idTARIFFA`) REFERENCES `tariffa` (`idTARIFFA`);

--
-- Limiti per la tabella `tessera`
--
ALTER TABLE `tessera`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`idCLIENTE`) REFERENCES `cliente` (`idCLIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
