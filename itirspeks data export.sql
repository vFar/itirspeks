-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 12:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itirspeks`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktualitates`
--

CREATE TABLE `aktualitates` (
  `aktualitate_id` int(11) NOT NULL,
  `virsraksts` varchar(255) DEFAULT NULL,
  `apraksts` text DEFAULT NULL,
  `autors` varchar(50) DEFAULT NULL,
  `datums` date DEFAULT NULL,
  `id_lietotajs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktualitates`
--

INSERT INTO `aktualitates` (`aktualitate_id`, `virsraksts`, `apraksts`, `autors`, `datums`, `id_lietotajs`) VALUES
(1, 'LVT bitcoin miner', 'Bitcoin kalnračs ir specializēta datora vai aparatūras ierīce, kas paredzēta sarežģītu matemātisko algoritmu risināšanai un darījumu apstiprināšanai Bitcoin blokķēdē. Šie kalnrači sacenšas savā starpā, lai pirmais atrisinātu algoritmu un nopelnītu bloka atlīdzību, kas sastāv no noteikta skaita jaunizveidotu bitkoinu.\r\n\r\nBitcoin ieguves process ietver specializētas programmatūras izmantošanu, kas ir izstrādāta, lai atrisinātu sarežģītus matemātiskos vienādojumus, kas ir daļa no Bitcoin blokķēdes. Šie vienādojumi ir izstrādāti tā, lai tos būtu grūti atrisināt, un to pabeigšanai ir nepieciešama ievērojama skaitļošanas jauda. Lai veiksmīgi atrisinātu vienādojumus, kalnračiem ir jābūt pieejamai ievērojamai skaitļošanas jaudai, kā arī piekļuvei specializētai aparatūrai, kas īpaši izstrādāta Bitcoin ieguvei.\r\n\r\nBitcoin kalnrači tiek atalgoti par viņu pūlēm ar bloka atlīdzību, kas sastāv no jaunizveidotiem bitkoiniem. Šī atlīdzība ir paredzēta, lai mudinātu kalnračus turpināt darbu pie blokķēdes un saglabātu tīkla drošību, pārbaudot darījumus.\r\n\r\nLai gan Bitcoin ieguve var būt ienesīgs pasākums, tas ir arī ļoti konkurētspējīgs. Tā kā tīklā ienāk arvien vairāk kalnraču, vienādojumu risināšanas grūtības palielinās, un algoritmu veiksmīgai atrisināšanai ir nepieciešama arvien lielāka skaitļošanas jauda. Tas nozīmē, ka kalnračiem ir pastāvīgi jāatjaunina sava aparatūra un programmatūra, lai saglabātu konkurētspēju un turpinātu pelnīt atlīdzības.\r\n\r\nNeskatoties uz izaicinājumiem, kas saistīti ar Bitcoin ieguvi, tā joprojām ir populāra un ienesīga darbība daudzām personām un uzņēmumiem visā pasaulē. Turpinot pieaugt pieprasījumam pēc bitkoiniem, pieaugs arī pieprasījums pēc kalnračiem, kuri var palīdzēt nodrošināt tīkla drošību un pārbaudīt darījumus. Izmantojot pareizo aparatūru un programmatūru, ikviens var kļūt par Bitcoin kalnraču un, iespējams, šajā procesā nopelnīt ievērojamu naudas summu.', 'Aleksis Daugats', '2023-03-02', 1),
(2, 'Bizness', 'Uzņēmējdarbības iespējas ir visur, un tās var būt ļoti ienesīgas tiem, kas ir gatavi uzņemties risku, kas saistīts ar jauna uzņēmuma uzsākšanu. Sākot ar maza uzņēmuma dibināšanu un beidzot ar ieguldījumiem akcijās un nekustamajā īpašumā, ir daudz dažādu veidu, kā iesaistīties biznesa pasaulē.\r\n\r\nViena no populārākajām biznesa iespējām mūsdienās ir e-komercija. Pieaugot iepirkšanās apjomam tiešsaistē, arvien vairāk cilvēku pievēršas internetam, lai iegādātos visu, sākot no pārtikas precēm līdz apģērbam un beidzot ar elektroniku. E-komercijas biznesa uzsākšana var būt salīdzinoši vienkārša un lēta, un to var izdarīt no jebkuras vietas pasaulē. Viss, kas jums nepieciešams, ir vietne un produkts, ko pārdot, un jūs varat sākt veidot savu tiešsaistes veikalu.\r\n\r\nVēl viena populāra biznesa iespēja ir ieguldījumi nekustamajā īpašumā. Ieguldījumi nekustamajā īpašumā var būt ļoti ienesīgi, it īpaši, ja iegādājaties īpašumus topošos rajonos vai rajonos, kas piedzīvo strauju izaugsmi. Varat iegādāties īpašumus, lai tos pārvērstu, izīrētu vai paturētu kā ilgtermiņa ieguldījumus, un ir pieejamas daudzas dažādas finansēšanas iespējas, lai palīdzētu jums sākt darbu.\r\n\r\nFranšīze ir vēl viena uzņēmējdarbības iespēja, kas ir populāra uzņēmēju vidū. Pērkot franšīzi, jūs būtībā iegādājaties pārbaudītu biznesa modeli, kas jau ir izveidots un pārbaudīts. Tas var būt lielisks risinājums tiem, kas ir jauni uzņēmējdarbības jomā un vēlas samazināt savus riskus.\r\n\r\nTehnoloģiju pasaulē ir arī daudz iespēju, sākot no programmatūras uzņēmuma dibināšanas līdz jaunas lietotnes vai produkta izstrādei. Ja jums ir pieredze tehnoloģiju jomā vai vēlaties mācīties, varat sākt savu tehnoloģiju biznesu un, iespējams, nopelnīt daudz naudas.\r\n\r\nCitas biznesa iespējas ietver konsultāciju uzņēmuma dibināšanu, restorāna vai bāra atvēršanu vai esoša uzņēmuma iegādi. Neatkarīgi no tā, kāda veida uzņēmējdarbību izvēlaties veikt, vienmēr ir saistīti riski, taču ar smagu darbu, centību un nelielu veiksmi jūs varat sasniegt lielus panākumus un finansiālu neatkarību.', '123', '2023-02-28', 3),
(3, 'Renars pardod golf4', 'IT prakse ir lielisks veids, kā studentiem vai nesenajiem absolventiem iegūt vērtīgu pieredzi tehnoloģiju nozarē. Šīs prakses vietas parasti piedāvā uzņēmumi, kas vēlas pieņemt darbā talantīgus cilvēkus, lai strādātu viņu labā nākotnē. To ilgums var būt no dažām nedēļām līdz vairākiem mēnešiem, un tos var apmaksāt vai bez atlīdzības.\n\nPrakse nodrošina praktisku mācību pieredzi, ko bieži ir grūti iegūt klasē. Praktikantiem tiek dota iespēja strādāt pie reāliem projektiem līdzās nozares profesionāļiem, ļaujot pielietot savas teorētiskās zināšanas praktiskās situācijās. Tas var palīdzēt viņiem izveidot darba portfeli un iegūt vērtīgas prasmes, ko var izmantot, lai turpinātu savu karjeru.\n\nIr pieejamas daudz dažādu IT prakses veidu, sākot no programmatūras izstrādes līdz kiberdrošībai. Dažas prakses var koncentrēties uz noteiktu programmēšanas valodu vai tehnoloģiju, savukārt citas var piedāvāt vispārīgāku nozares pārskatu. Praktikantiem ir svarīgi izvēlēties praksi, kas atbilst viņu interesēm un karjeras mērķiem.\n\nStažieriem var būt arī iespēja sazināties ar nozares profesionāļiem. Tas var būt nenovērtējams resurss darba iespējām nākotnē. Daudziem praktikantiem tiek piedāvātas pilnas slodzes pozīcijas uzņēmumos, kuros viņi ir stažējušies, vai arī viņi var izmantot savus sakarus, lai atrastu citas darba iespējas šajā nozarē.\n\nKopumā IT prakse ir lielisks veids, kā studentiem un nesenajiem absolventiem iegūt praktisku pieredzi un veidot sakaru tīklu tehnoloģiju nozarē. Tas var būt atspēriena punkts veiksmīgai karjerai strauji augošā un pastāvīgi mainīgā jomā.', 'Renārs Puļķis', '2023-01-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `lietotaji_id` int(11) NOT NULL,
  `lietotajvards` varchar(80) DEFAULT NULL,
  `parole` varchar(73) DEFAULT NULL,
  `vards` varchar(40) DEFAULT NULL,
  `uzvards` varchar(40) DEFAULT NULL,
  `talrunis` int(8) NOT NULL,
  `epasts` varchar(50) NOT NULL,
  `id_tiesibas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`lietotaji_id`, `lietotajvards`, `parole`, `vards`, `uzvards`, `talrunis`, `epasts`, `id_tiesibas`) VALUES
(1, 'admin', '$2y$10$092s1Rjr4jefm5ln259IjeWUXrN5M6O8vd4mNBflWcj4vpeILlK0i', 'Renārs', 'Puļķis', 20643494, 'renaritis@gmail.com', 1),
(2, 'mod1', '$2y$10$/OCaC7A0CTPtc4MgHo14F.vw.S53pLGffKr5OCX1SY/txgjxUGD0.', 'Markuss', 'Balodis', 24999123, 'markuss@gmail.com', 2),
(3, 'mod2', '$2y$10$Fe9XvBrH5nGrXNgZ3fWU7O4Mz6gk00gGD7BcLrPWM.IGm0Uk9Ts4u', 'test', 'test', 26999456, 'testeris@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pieteiktavakance`
--

CREATE TABLE `pieteiktavakance` (
  `pieteikuma_id` int(11) NOT NULL,
  `vards` varchar(20) DEFAULT NULL,
  `uzvards` varchar(40) DEFAULT NULL,
  `epasts` varchar(50) DEFAULT NULL,
  `talrunis` int(8) DEFAULT NULL,
  `adrese` varchar(80) NOT NULL,
  `vak_cv` blob NOT NULL,
  `statuss` varchar(20) DEFAULT NULL,
  `id_vakance` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pieteiktavakance`
--

INSERT INTO `pieteiktavakance` (`pieteikuma_id`, `vards`, `uzvards`, `epasts`, `talrunis`, `adrese`, `vak_cv`, `statuss`, `id_vakance`) VALUES
(1, 'Renārs', 'Puļķis', 'renaritisss123@gmail.com', 29765123, 'Tāši, Puļķi', '', 'Nepieņemts', 1),
(2, 'Mareks', 'Poriņš', 'mareks.porins@inbox.lv', 29765123, '', '', 'Skatīts', 2),
(3, 'Ainārs', 'Družins', 'druzinss@gmail.com', 24123445, 'Liepāja, Ķoniņu iela 4', '', 'Pieņemts', 3),
(4, 'Markuss', 'Balodis', 'markuss.balodis@inbox.lv', 29123123, '', 0x42697a6e657361506c616e7344657369676e4d652e646f6378, 'Neapskatīts', 5),
(5, 'Andris', 'Južnijs', 'Andris@gmail.com', 24231231, 'Ķoniņu iela 4', '', 'Neapskatīts', 5),
(6, 'Marta', 'Ozoliņa', 'ozolina.marta@inbox.lv', 26765666, '', '', 'Neapskatīts', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tiesibas`
--

CREATE TABLE `tiesibas` (
  `tiesibas_id` int(11) NOT NULL,
  `tiesiba` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiesibas`
--

INSERT INTO `tiesibas` (`tiesibas_id`, `tiesiba`) VALUES
(1, 'ADMINISTRATOR'),
(2, 'MODERATOR');

-- --------------------------------------------------------

--
-- Table structure for table `vakances`
--

CREATE TABLE `vakances` (
  `vakance_id` int(11) NOT NULL,
  `virsraksts` varchar(255) DEFAULT NULL,
  `apraksts` longtext DEFAULT NULL,
  `kontakti` varchar(60) DEFAULT NULL,
  `datums` date DEFAULT NULL,
  `id_lietotajs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vakances`
--

INSERT INTO `vakances` (`vakance_id`, `virsraksts`, `apraksts`, `kontakti`, `datums`, `id_lietotajs`) VALUES
(1, 'Rimi Latvia meklē programmētājus!!', 'Rimi Latvia ir viens no vadošajiem mazumtirgotājiem Latvijā. Mēs esam daļa no „ICA Gruppen”, kas ir vadošā mazumtirdzniecības organizācija Ziemeļvalstu reģionā.\r\n\r\nŠobrīd pircējiem ir atvērti vairāk nekā 130 Rimi veikali visā Latvijā, kas darbojas vienotā Rimi Baltic veikalu grupā. Rimi Latvia šobrīd strādā vairāk nekā pieci tūkstoši darbinieku.\r\n\r\nEsam uzticīgi trīs kopīgām vērtībām:\r\n\r\nVienkāršība – tiecies pēc vienkāršības!\r\n\r\nUzņēmība – esi saimnieks savā darba vietā!\r\n\r\nAizrautība – dari no sirds!\r\n\r\nJa tās ir arī Tavas vērtības, Tu šeit sastapsi daudz līdzīgi domājošu un draudzīgu kolēģu!\r\n\r\nKARJERA UZŅĒMUMĀ\r\nRimi darbinieku karjera ir cieši saistīta ar personīgo ieguldījumu, ar vēlmi attīstīties un attieksmi pret darbu. Mēs vēlamies, lai mūsu darbinieki augtu kopā ar kompāniju, lai tie dalītos savās zināšanās un pieredzē.\r\n\r\nIkgadējās novērtēšanas ietvaros katrs Rimi darbinieks tiek uzklausīts par to, kā viņš gribētu attīstīties un veidot savu turpmāko karjeru mūsu uzņēmumā. Tiek sastādīts individuālais attīstības plāns, norādot nepieciešamās apmācības un zināšanas, kas darbiniekam jāapgūst, lai kāroto mērķi sasniegtu.\r\n\r\nMēs augstu vērtējam zināšanas, tādēļ piedāvājam darbiniekiem atbalstu izaugsmei, organizējot dažādas apmācības. Rimi saviem darbiniekiem nodrošina un piedāvā gan korporatīvās apmācības (pārdošanas prasmes, klientu apkalpošana, vadītprasmes utt.), gan arī apmācību, kas ir orientēta uz tiešā amata pienākumu izpildes pilnveidošanu.\r\n\r\nVEIKSMES STĀSTS\r\n\"Rimi man tika piedāvāts darbs uz mēnesi saspringtajā Ziemassvētku laikā. Darīju darbu ar lielu rūpību, izrādīju iniciatīvu, tāpēc man piedāvāja darbu veikalā turpināt. Es nešauboties piekritu. Lai paplašinātu savas zināšanas, paralēli darbam mācījos augstskolā. Mana vēlme izglītoties tika atbalstīta – varēju saplānot grafiku tā, lai būtu laiks gan mācībām, gan ģimenei. Mana vēlme uzzināt un darīt vairāk tiek pamanīta un novērtēta.\r\n\r\nNo pārdevējas kasē esmu kļuvusi par servisa vadītāju citā Rimi veikalā. Liels paldies man jāsaka Rimi ieguldījumam manā apmācībā – apmeklēju vadītprasmju mācības, kas tika organizētas vairākas dienas ilgākā laika periodā. Tas man ļāva iegūt padziļinātas zināšanas manai darba ikdienai, izmantot darba situācijās un pēcāk mācībās atkal atkārtot un pilnveidot. Vēlos turpināt savu karjeras izaugsmi Rimi!\"\r\n\r\nPie mums vairāki darbinieki no pārdevēja - kasiera amata veikalā vai asistenta amata birojā kļuvuši par vadošiem darbiniekiem uzņēmumā.\r\n\r\nIepazīsties ar citiem Rimi darbinieku veiksmes stāstiem mūsu mājas lapā!', 'rimiITdala@inbox.lv', '2023-12-25', 1),
(2, 'SIA Kecom Risina meklē praktikantus', 'Tiek meklēti praktikanti no visas Latvijas - uzņēmuma auto un dzīvošana tiek garantēta', 'kecomrisina@kecom.lv', '2023-03-03', 2),
(3, 'AS Swedbank', 'Tiek meklēti sistēmas uzturētāji - jāpārzina angļu valoda un React', 'Swedbanklv@inbox.lv', '2023-04-04', 2),
(4, 'AS Swedbank', 'Tiek meklēti IT datu analītiķi - jāpārzina Python', 'Swedbanklv@inbox.lv', '2023-04-04', 2),
(5, 'SIA Dantes', 'Vakance derīga līdz 12. aprīlim - tiek meklēti programmētāji elektroiekārtu uzstādīšanā!', 'martins@dantes.lv', '2022-12-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktualitates`
--
ALTER TABLE `aktualitates`
  ADD PRIMARY KEY (`aktualitate_id`);

--
-- Indexes for table `lietotaji`
--
ALTER TABLE `lietotaji`
  ADD PRIMARY KEY (`lietotaji_id`);

--
-- Indexes for table `pieteiktavakance`
--
ALTER TABLE `pieteiktavakance`
  ADD PRIMARY KEY (`pieteikuma_id`);

--
-- Indexes for table `tiesibas`
--
ALTER TABLE `tiesibas`
  ADD PRIMARY KEY (`tiesibas_id`);

--
-- Indexes for table `vakances`
--
ALTER TABLE `vakances`
  ADD PRIMARY KEY (`vakance_id`),
  ADD KEY `id_lietotajs` (`id_lietotajs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktualitates`
--
ALTER TABLE `aktualitates`
  MODIFY `aktualitate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `lietotaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pieteiktavakance`
--
ALTER TABLE `pieteiktavakance`
  MODIFY `pieteikuma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tiesibas`
--
ALTER TABLE `tiesibas`
  MODIFY `tiesibas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vakances`
--
ALTER TABLE `vakances`
  MODIFY `vakance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
