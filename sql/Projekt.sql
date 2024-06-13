-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2024 at 09:29 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Projekt`
--
CREATE DATABASE IF NOT EXISTS `Projekt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Projekt`;

-- --------------------------------------------------------

--
-- Table structure for table `Clanci`
--

CREATE TABLE `Clanci` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Clanci`
--

INSERT INTO `Clanci` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(20, '13-06-2024 19:04:39', 'PROLJETNI UMOR', 'Neki stručnjaci krivnju za proljetni umor pripisuju zatopljenju', 'Od sredine ožujka do sredine travnja, pa i dulje, mnogi se građani osjećaju umornije i bezvoljnije nego inače. Iako su dani dulji, vrijeme ljepše, a priroda zelenija, neki se ne uspijevaju riješiti umora i uklopiti se u sve veću živost koja ih okružuje. Ako vas ovo godišnje doba ne osnažuje, moguće je da patite od proljetnog umora. Najviše tegoba imaju stariji ljudi, zatim oni s kroničnim srčanožilnim smetnjama i oni koji se bave mentalnim radom.', 'umor.jpeg', 'zdravlje', 0),
(21, '13-06-2024 19:12:03', 'Dijetetičar otkriva', 'Veza između prehrane i općeg blagostanja neporeciva je.', 'Veza između prehrane i općeg blagostanja neporeciva je. Iako je uloga prehrane u tjelesnom zdravlju dobro poznata, važna je i za mentalno zdravlje te zdravlje mozga. Mozak ovisi o stalnoj opskrbi hranjivim tvarima kako bi optimalno funkcionirao. Hrana koju jedemo igra ključnu ulogu u poboljšanju kognitivnih funkcija i smanjenju rizika od neurodegenerativnih bolesti.\r\n\r\nIako postoje neke ultraprerađene namirnice koje treba izbjegavati, postoji i mnoštvo sjajnih namirnica koje možemo dodati u svoju prehranu za zdraviji mozak. Dijetetičar Jesse Feder otkrio je tri takve namirnice koje su odlične za zdravlje mozga, a čak mogu smanjiti i rizik od upale.', 'Health-Care-VS-Healthcare-Whats-the-difference.jpg', 'Zdravlje', 0),
(22, '13-06-2024 19:24:26', 'Kora od naranče', 'Neka istraživanja sugeriraju da je kora naranče zapravo najzdraviji dio ploda', 'Iako je jedno od najpopularnijih voća na svijetu, sočno meso naranče uvijek će biti pojedeno dok koru najčešće bacamo, evo zašto je to možda velika greška. Naime, narančina kora sadrži bioaktivan spoj nazvan feruloilputrescin (FP) koji, vjeruje se, puno može pridonijeti zdravlju srca.', 'naranca.jpeg', 'Zdravlje', 0),
(25, '13-06-2024 20:23:12', 'Zdravlje u obrađivanju vrta', 'I briga i veselje: sreća (i zdravlje) leži u obrađivanju vlastitog vrta', 'Dobrobiti rada u vrtu su višestruke. Prvo, vi uzgajate vlastitu hranu, koja je već okusom i mirisom drugačija od one koju kupujete u trgovačkim centrima jer dobiva više minerala. A takva hrana je odlična za jačanje imuniteta. Naime, naš probavni trakt bolje apsorbira domaće uzgojeno voće i povrće, nego ono iz masovne proizvodnje za koje ni ne znamo odakle potječe i kako je uzgojeno. A probavni je trakt centar za imunitet, što se bolje za njega brinete, to vam je imunitet jači.\r\n', 'vrt.jpeg', 'Zdravlje', 0),
(27, '13-06-2024 20:25:07', 'Biobaza predstavlja novu kolekciju', 'Biobaza Riviera kolekcije za njegu tijela i usana, donose mirise Kvarnera', 'Biobaza, domaći brend prirodne kozmetike farmaceutske kvalitete, predstavlja Rivieru - svoju najluksuzniju kolekciju nadahnutu Kvarnerom i njegovom autentično, aromatičnom prirodom. Koktel pažljivo odabranih sastojaka, nježnog lavandina, odrješitog bergamota, zavodljive mandarine i svježeg bosiljka stvara olfaktivnu čaroliju koja dolazi u proizvodima za njegu tijela i usana. Posebno osmišljena za ljetne mjesece, česta tuširanja i pažljivu njegu kože, Biobaza Riviera donosi kompleksnu kolekciju koja svakodnevnu njegu pretvara u luksuzno SPA iskustvo.', 'biobaza.jpeg', 'Ljepota', 0),
(28, '13-06-2024 20:25:41', 'Beauty novitet', 'Hibrid olovke i sjenila za oči koji ne isušuje kožu', 'Beauty brend Jane Iredale 30 je godina besprijekoran u prikrivanju nedostataka i beskompromisan kad je riječ o zdravlju kože. Dobiveni iz čistih minerala, snažni pigmenti ovih olovaka nisu štetni za sluznicu oka, a birane, oftalmološki testirane formule na najdelikatnije područje djeluju njegujuće.', 'sjenilo.jpg', 'Ljepota', 0),
(29, '13-06-2024 20:28:56', 'LOccitane i Citronovac', 'Otkrij novi zamaman miris idealan za ljeto', 'Ljetno vrijeme i produženi vikendi su nam sve bliže. Kada razmišljamo o toplijem vremenu, žudimo za svježijim i laganijim mirisima koji obavijaju sva naša osjetila i potiču na razmišljanje o lijepim trenucima uz plažu. Baš kada pomislimo da smo isprobali sve, LOccitane nas iznenadi nekom novom kombinacijom koja nam uskoro postane i omiljena. Svježina, vitalnost i razbuđivanje svih osjetila, glavne su karakteristike nove Citronovac Geranij limitirane kolekcije. Svaki proizvod formuliran je kako bi vaše tijelo nahranio, opustio i revitalizirao te ostavio osjećaj mekane, glatke i mirisne kože.', 'loccitane.jpeg', 'Ljepota', 0),
(30, '13-06-2024 20:29:40', 'Nježna manikura', 'Nježna manikura bit će najveći hit ovog ljeta, a još i naglašava preplanuli ten', 'Trendovi u manikurama mijenjaju se velikom brzinom, a u današnje vrijeme nastaju na društvenim mrežama. Već kratkim pogledom na trendove u manikurama, možemo primijetiti da će jedna bolja biti glavni hit ovog ljeta. Radi se o takozvanoj peach fuzz boji, koju je Institut za boje Pantone proglasio bojom godine. To je nježna i mirna nijansa boje pijeska ili bež s primjetnim tonovima marelice, naranče i breskve. U proteklih šest mjeseci polako se uvukla u naše domove, a ovog ćemo je ljeta gledati i na noktima. Ona je savršen izbor za sve žene koje biraju jednostavne nijanse i koje se ne žele pretjerano isticati, a istovremeno žele sofisticiran, ljetni i vrckavi look na svojim noktima. Bez obzira na to birate li inače manikure s upečatljivim motivima ili volite jednostavnost - boju godine vrlo lako možete uklopiti u vaš stil.', 'nokti.jpeg', 'Ljepota', 0),
(33, '13-06-2024 21:18:16', 'Pivski spa', 'Pivski spa je novi trend u svijetu lječilišnog turizma: \"Kupanje u hmelju? Dobrobiti su ogromne\"', 'Pivo se sastoji od tri komponente koje su blagotvorne za kožu - slada, kvasca i hmelja. \"I žitarice slada i kvasac sadrže vitamin B koji pojačava hidrataciju i elastičnost kože, te smanjuje hiperpigmentaciju. Hmelj je uz to bogat antioksidansima koji imaju antikancerogena i protuupalna svojstva, a također i pomažu zacjeljivanju kože. Studije su također otkrile da ekstrakti hmelja mogu smanjiti tjeskobu, blagu depresiju i stres. Dugu povijest hmelja u narodnoj medicini kao lijeka za nesanicu podupire i znanost\", tumači biokemičarka, dr. Cindy Jones. Navodi i kako hmelj povećava proizvodnju kolagena koja pomaže smanjivanju bora. Zbog svih ovih dobrobiti na tržištu je u zadnjem desetljeću sve više kozmetičkih preparata na bazi piva. Carlsberg je još 2015. lansirao liniju Beer Beauty, a češka kozmetička tvrtka Manufaktura otvorila je diljem zemlje niz trgovina u kojima prodaje soli za kupanje na bazi hmelja i ječma te druge slične proizvode.\r\n', 'pivo.jpeg', 'zdravlje', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Korisnici`
--

CREATE TABLE `Korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `korisnicko_ime` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Korisnici`
--

INSERT INTO `Korisnici` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Marija', 'Badelj', 'mbadelj', '$2y$10$pHut8K6g1q4iw7rCHjIseeAQE3yH8eMFNNlIUxvl11scMG9hSa3DC', 1),
(2, 'Ivana', 'Horvat', 'ihorvat', '$2y$10$xWJ3ldo/tgL5KoIvZAYbGOU672MIXq9p2bE5Kl0bbodBdqDCMJulG', 0),
(3, 'Vesna', 'Wolf', 'vwolf', '$2y$10$sOk0GM3bHO11da2o2NWk6eohO3j346JUoVUlsgS4mesozmoRW6F0e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clanci`
--
ALTER TABLE `Clanci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Korisnici`
--
ALTER TABLE `Korisnici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clanci`
--
ALTER TABLE `Clanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `Korisnici`
--
ALTER TABLE `Korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
