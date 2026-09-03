-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 12:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`ID`, `Username`, `Password`) VALUES
(1, 'Admin', 'MediaClubAdmin'),
(2, 'SuAdmin', 'MCAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, '350933057_925613318530519_6598637018796655300_n.jpg'),
(2, '352515875_272649045167661_7551038877384910109_n.jpg'),
(3, '354225297_114024641723241_317198443096544794_n.png'),
(4, '356003665_121418887650483_5387362710037700489_n.jpg'),
(5, '357357540_129816126802854_1504834333077598304_n.jpg'),
(6, 'image_2024-04-10_141511644.png'),
(7, 'image_2024-04-10_142019365.png'),
(8, '367486212_306759615345929_574161946319819279_n.jpg'),
(9, 'image_2024-04-10_142423627.png'),
(10, 'image_2024-04-10_142914862.png'),
(11, '373604688_170494509401682_9078317389427682187_n.jpg'),
(12, 'image_2024-04-10_143214659.png'),
(13, '370364695_171419852642481_6078468908039538953_n.jpg'),
(14, '374262260_171505135967286_278944225384140682_n.jpg'),
(15, 'image_2024-04-10_143814258.png'),
(16, 'image_2024-04-10_143907701.png'),
(17, 'image_2024-04-10_144042273.png'),
(18, 'image_2024-04-10_144131476.png'),
(19, 'image_2024-04-10_144243621.png'),
(20, 'image_2024-04-10_144411722.png'),
(21, '378804015_179776081806858_2072710517285687922_n.jpg'),
(22, '378788345_182735084844291_6220143693325921697_n.jpg'),
(23, 'image_2024-04-10_145136950.png'),
(24, '381228617_187131701071296_3392110555025776342_n.jpg'),
(25, 'image_2024-04-10_145641446.png'),
(26, '387087464_191757770608689_1670917225415877606_n.jpg'),
(27, '395643505_203653736085759_5695316940389471600_n.jpg'),
(28, 'image_2024-04-10_150551075.png'),
(29, '404867553_220593804391752_914509594694739048_n.jpg'),
(30, 'image_2024-04-10_150851387.png'),
(31, '420233603_254006454383820_7995492321114725242_n.jpg'),
(32, '421018228_254632864321179_8947133606277940311_n.jpg'),
(33, '424835212_261397236978075_991475606216013303_n.jpg'),
(34, '425957104_263373803447085_5294632666384388921_n.jpg'),
(35, '426070472_264439370007195_4882608161853613738_n.jpg'),
(36, 'image_2024-04-10_151318617.png'),
(37, '426643270_266629433121522_948784154751948393_n.jpg'),
(38, '428603065_274173622367103_7710791339981205587_n.jpg'),
(39, '434213493_294248367026295_4947574874488654948_n.jpg'),
(40, '434360512_296599096791222_4784667728731334811_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Position` enum('Adviser','Officer','Assistant Officer','Member') NOT NULL,
  `Position_Title` varchar(40) NOT NULL,
  `Department` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `filename`, `First_Name`, `Last_Name`, `Position`, `Position_Title`, `Department`) VALUES
(1, 'Corpuz.jpg', 'Ma. Cristina', 'Corpuz', 'Adviser', '   ', '   '),
(2, 'Ibañez.jpg', 'Raffaele Jazmin', 'Ibañez', 'Adviser', '   ', '   '),
(3, 'Bienes.jpg', 'May Ann', 'Bienes', 'Adviser', '   ', '   '),
(4, 'Cruz.jpg', 'Jerome Carlos', 'Cruz', 'Adviser', '   ', '   '),
(5, 'Tandang.png', 'Shaina Rose ', 'Tandang', 'Officer', 'Club Manager', '   '),
(6, 'Garcia.png', 'Mart Xaviree', 'Garcia', 'Assistant Officer', 'Assistant Club Manag', '   '),
(7, 'Manilag.png', 'Lei Andrew', 'Manilag', 'Officer', 'Chief Broadcaster', 'Broadcasting'),
(8, 'Opulencia.jpg', 'Ailah Catrice', 'Opulencia', 'Officer', 'Chief Editor', 'Editorial'),
(9, 'Salen.png', 'Vic John', 'Salen', 'Officer', 'MultiMedia Manager', 'Multimedia'),
(10, 'REBOTON.png', 'Justin Adrian', 'Reboton', 'Officer', 'Social Media Manager', 'Social Media'),
(11, 'Aguilar.png', 'Jashley Anne', 'Aguilar', 'Assistant Officer', 'Assistant Chief Broadcaster', 'Broadcasting'),
(12, 'Ramos.png', 'Jewel May', 'Ramos', 'Assistant Officer', 'Assistant Chief Editor', 'Editorial'),
(13, 'Hernandez.png', 'Jose Rafael', 'Hernandez', 'Assistant Officer', 'Assitant Social Media Manager', 'Social Media'),
(14, 'Mapanao.png', 'Ferde', 'Mapanao', 'Assistant Officer', 'Assistant MultiMedia Manager', 'Multimedia'),
(16, 'Belmonte.png', 'Justin Andrei ', 'Belmonte', 'Member', '   ', 'Broadcasting'),
(17, 'Senosin.png', 'Diana Victoria', 'Senosin', 'Member', '   ', 'Broadcasting'),
(18, 'Herrera.png', 'Stephanie Beatriz', 'Herrera', 'Member', '   ', 'Broadcasting'),
(19, 'Pilante.png', 'Shahani', 'Pilante', 'Member', '   ', 'Broadcasting'),
(20, 'Sevilla.png', 'Hannah Mae', 'Sevilla', 'Member', '   ', 'Broadcasting'),
(21, 'Reyes.png', 'Christine Joyce', 'Reyes', 'Member', '   ', 'Broadcasting'),
(23, 'Surban.png', 'Rein Yzabelle ', 'Surban', 'Member', '   ', '   ');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ID` int(11) NOT NULL,
  `Headline` varchar(200) NOT NULL,
  `Author` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Category` enum('Acads','News','Sports','Events') NOT NULL,
  `Date_Published` date NOT NULL,
  `First_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Second_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Third_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fourth_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fifth_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sixth_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Seventh_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Eighth_Paragraph` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`ID`, `Headline`, `Author`, `Category`, `Date_Published`, `First_Paragraph`, `Second_Paragraph`, `Third_Paragraph`, `Fourth_Paragraph`, `Fifth_Paragraph`, `Sixth_Paragraph`, `Seventh_Paragraph`, `Eighth_Paragraph`, `filename`) VALUES
(1, 'Colegio de Los Baños to Launch Media Club and Digital Publication Next School Year', 'Tin Corpuz', 'News', '2023-06-03', 'Last Wednesday, May 31, selected senior highschool students from different strands attended an informal meeting of the Media Club, a media organization for Colegio de Los Baños. The club will be launched next school year with a digital school publication to follow suit. The students were oriented about plans for the club, trainings, launch of the school\'s digital publication as well as membership information. Most of the attendees have signified their intention to be official members of the aforementioned organization. The Media Club will have its first official meeting this coming Wednesday, June 7, 2023.', '', '', '', '', '', '', '', ''),
(2, 'Media Club at Colegio de Los Baños Holds Second Meeting to Plan Publication and Events', 'Tin Corpuz', 'Events', '2023-06-08', 'Another meeting held last Wednesday, June 7, 2023. It was presided by Julie Ann Reyes, Interim Club Manager for the Media Club. Members deliberated on the name of the publication, logo, tasks as well as the upcoming events hosting seminar.', '', '', '', '', '', '', '', ''),
(3, 'Grade 12 HUMSS Students Organize Successful Outreach Programs in Laguna', 'John Anthony Lim', 'Events', '2023-06-17', 'The Grade 12 - Humanities and Social Sciences Strand conducted a successful Outreach Program. Last June 3, Saturday, HUMSS 2 - Enthusiasm hosted their Outreach Program in Pinagpala Children\'s Home Inc., Lamot II, Calauan, Laguna. HUMSS 1 - Contentment, on the other hand, held their Outreach Program on June 4, Sunday at Makiling, Calamba City.', '', '', '', '', '', '', '', ''),
(4, 'Spiritual Development Seminar Focuses on Integrating Spirituality and Mental Well-being at Colegio de Los Baños', 'Abigail Abella Manza', 'Events', '2023-06-24', 'On the 21st of June 2023, a spiritual development seminar on \"Harmony Within: Integrating Spirituality and Mental Well-being\" was held in Colegio de Los Baños. Two honorable speakers were invited to the said seminar who shared their knowledge about mental well-being, Vice Mayor Hon. Josephine Sumangil Evangelista, and the school counselor and psychologist, Ms. Mayie Chuaquico Aragonn. According to Ms. Mayie, \"Ang mentalidad ng isang tao ang nagbibigay kakayahan sa pakikibuhay\". Ang mentalidad ang naglalayong tulungan ang isang tao na ma-adopt ang mga magagandang bagay sa paligid at ma-expand ang comfort zone.\" ', 'They also shared their experiences on how they overcame various difficulties. As a public servant, for Vice Mayor Hon. Josephine \"Baby\" Sumangil-Evangelista, a healthy mentality helps in fulfilling her role in her community. \r\n', 'The event was developed by Ms. Jacqueline Ferrer Ramos along with the help of HUMSS JUSTICE. HUMSS IDEALISM AND LIBERTY who were also present at the event.\r\n', '', '', '', '', '', ''),
(5, 'CDLB Media Club Members Gain Insights on Events Hosting from UPLB JOCKS Seminar', 'Tin Corpuz', 'Events', '2023-06-30', 'Selected members of the CDLB MEDIA CLUB attended a seminar conducted by Ms. Alex Peña and Mr. Julian Bonza of the UPLB JOCKS on Events Hosting. The mentors gave lectures on voice quality, adlib and how to conduct yourself on stage as well as shared their experiences on stage. More on this story later so stay tuned for updates. ', '', '', '', '', '', '', '', ''),
(6, 'Colegio de Los Baños Faculty Members Receive Orientation on School Mission and Vision', 'Tin Corpuz', 'Events', '2023-08-03', 'Faculty members of Colegio de Los Baños had a Faculty Orientation yesterday, August 2, 2023. The agenda was to orient new and seasoned faculty members with the mission, vision, and history of the school. The orientation was led by Ms. Chinky San Agustin (school director), Ms. Maimai Sasa (academic coordinator) and Ms. Amalia Abdurahman (principal).', '', '', '', '', '', '', '', ''),
(7, 'Halaga ng mobile phone bilang isang mamamahayag', 'Ailah Katrice Opulencia', 'News', '2023-08-11', 'Bilang isa sa mag-aaral na napabilang sa seminar na isinagawa noong July 28, naghahangad na maging mamamahayag sa hinaharap, malaki ang tulong ng telepono sa pangkasalukuyang panahon. Isa ito sa magagamit upang ang mga mamahayag ay makakalap nang mabilisang impormasyon sa tao.', 'Ayon kay G. Marco Rapsing, ang ating telepono ay ang pinakamahalagang kagamitan bilang isang mamahayag. Sa pamamagitan ng telepono pwede mo itong magamit upang kumuha ng mga litrato, mag record ng video, mag-ulat at magsulat.', 'Tunay na malaya at malawak ang pagsulat ng mga mamahayag sa tulong sa makabagong teknolohiya. Lalo na kung ikaw ay nasa lugar kung saan may mga bagay na hindi mo inaasahang may mangyari, upang makakalap ka ng mga detalye para ibalita, gamit ang mobile phone mabilis mong mapapadala ang mga impormasyon at maibabahagi sa mga tao.', 'Isa sa mga bagay na aking natutunan, hindi mo kailangan ng malalaki at mamahaling materyales upang maipahayag at maging mamahayag sa kasalukuyang pahanon.', '', '', '', '', ''),
(8, 'CDLB Launches Bayanihan 4.0 Program with Focus on School, Home, and Community Cleanliness', 'Unknown', 'News', '2023-08-15', 'On August 14th, the CDLB BAYANIHAN 4.0: PAARALAN KO, TAHANAN KO, LINIS KO for school year 2023-2024 was opened with a short mass led by Father. Diwane Cacao followed by a short message by CDLB School Director. Ms. Chinky San Agustin at the Angelo San Agustin Multi-Purpose Court. Grade 11 and 12 students then proceeded to their rooms with their respective class advisers for the arrangement and cleaning of each classroom for the General Assembly this Wednesday. ', '', '', '', '', '', '', '', ''),
(9, 'Crafting exeptional news writing', 'Unknown', 'Acads', '2023-08-19', 'CDC BUILDING, UPLB Campus - Mr. Mar Jhun Daniel, from Tanglaw, College of Development Communication (CDC) discussed the proper ways and important things to consider and ponder in News Writing. The training was held last July 27, 2023 at College of Development Communication Building in University of the Philippines Los Banos Campus (UPLB).', 'Here are some highlights during Mr. Mar Jhun\'s discussion prior to News Writing during the LB Times Journalism Training for CDLB Students.', 'Mr. Mar Jhun\'s discussion included the Basics of News Writing, News Value, Rules, and the 5W\'s and 1H and its importance prior to the topic.', 'During the training, he has given the students time to digest the knowledge they were given, later on they were given the opportunity to show and write their own articles with a given topic. Later on, each student who participated in the Journalism Training who performed in the journalism activities were given awards.', 'Students who participated with excellence in News Writing was group \"Darna\" included Trisha De Andres, Paulina Loraine Onquit and Christine Joyce Reyes, incoming Grade 12 students from Humanities and Social Sciences Strand (HUMSS).', '', '', '', ''),
(10, 'Filipino at Katutubong Wika para sa Kapayapaan at Katarungan\'', 'Ailah Katrice Opulencia, Jewel May Ramos', 'Acads', '2023-08-30', 'Ngayong araw, ika-30 ng Agosto ipinagdiriwang ng paaralang Colegio de Los Baños ang Buwan ng Wika na may temang  \"Filipino at Mga Katutubong Wika: Wika ng Kapayapaan, Seguridad at Ingklusibong Pagpapatupad ng Katarungang Panlipunan\"', 'Abangan natin ang mga estudyante sa kanilang pinaghandaang mga tradisyonal na suot na baro\'t saya, at ang pakikilahok sa iba\'t ibang larangan ng programa na magpapakita ng talino at talento ng mga mag-aaral mula sa iba\'t ibang departamento.', '', '', '', '', '', '', ''),
(11, 'CDLB Mag-aaral, Nakibahagi sa Buwan ng Wika sa Temang \'Filipino at Mga Katutubong Wika\'', 'Unknown', 'Acads', '2023-08-30', 'Ngayong umaga, naipamalas ng mga mag-aaral ng Colegio de Los Banos ang kanilang pakikiisa sa pagdiriwang ng Buwan ng Wika na may temang \"Filipino at Mga Katutubong Wika: Wika ng Kapayapaan, Seguridad, at Ingklusibong Pagpapatupad ng Karunungang Panlipunan\" sa pamamagitan nang pagsusuot ng katutubong kasuotan o mga tradisyonal na suot gaya ng barong at filipinana. ', '', '', '', '', '', '', '', ''),
(12, 'Tagumpay! Ang Baitang 12 Mula Sa Syensya, Teknolohiya, Enhinyero at Matematika (Stem) Sa Katutubong ', 'Lei Andrew Manilag', 'News', '2023-08-31', 'Mula sa selebrasyon ng Colegio de Los Baños: Buwan ng Wika 2023, nag wagi sa kompetisyong Katutubong Sayaw ang STEM 12 na ginanap sa San Agustin Multi- purpose court sa ika-30 ng Agosto.', 'Ang nasabing programa ay may temang \"Filipino at Mga Katutubong Wika: Wika ng Kapayapaan, Seguridad at Ingklusibong Pagpapatupad ng Katarungang Panlipunan\".', 'Itinanghal ng nag-waging grupo ang katutubong sayaw na Cariñosa na nagmula sa Panay Island.', 'Ani ni Edmark Mendoza. \"Inaasahan lang namin na makaka bilang kami sa mga mananalo ngunit hindi lang pala pang-una o pangalwa kundi kampeon ang nakamit namin kaya naman malaking tuwa ito sa aming mga mananayaw at sa aming strand.\"', 'Tunay ngang ang panalo ng isa ay panalo ng lahat. Nag bunga ang kanilang pagod sa pag-eensayo at nabigyan ng pinakamataas na parangal. Tunay ngang ang bawat panalo ay may kaakibat sakripisyo.', '', '', '', ''),
(13, 'STEM Humakot ng Kampeonato sa Quiz Bee', 'Abigail Manza', 'Sports', '2023-09-01', 'Bilang pagdiriwang sa buwan ng wika, nagkaroon ng iba’t-ibang patimpalak tulad ng quiz bee, panlasang pinoy, katutubong sayaw, at sabayang pag awit — kung saan naipamalas ng mga mag-aaral sa CDLB ang kanilang husay at kaalaman tungkol sa sariling wika at bansa.', 'Nag wagi sa Quiz Bee ang departamento ng STEM na s’yang sinundan ng ABM at GAS. Nanguna ang STEM sa patimpalak na may 55 na puntos, 44 na puntos naman sa ABM, at 35 na puntos para sa GAS.', 'Ilang araw bago pa lamang magsimula ang selebrasyon, makikita nang pinaghahandaan ito ng mga mag-aaral. Ayon sa isang kalahok mula sa departamento ng STEM na si Calvin Gibe, \"Hinati namin yung coverage ng quizbee para bawat isa samin may topic na pag-aaralan. Confident naman kami na may makakamit kami kahit papaano kasi na pag handaan namin pero hindi namin expected na kami yung mag chachampion.”', '', '', '', '', '', ''),
(14, 'Colegio de Los Baños Inaugurates Monthly Homily Mass Tradition, Emphasizing Spirituality and Gratitu', 'Thea Rallos', 'Events', '2023-09-01', 'Colegio de Los Baños held a Homily Mass which is going to be held every first Friday of the month, following the previous masses. It was held earlier today September 1st 2023, on Angelo San Agustin Multi-Purpose Court.', 'Led by Father Diwane Cacao the mass was started with an opening prayer and remarks for Ms. Chinky Aleli San Agustin  the school director of CDLB, with the theme “Mass of Spirit: to thank God for the gift of creation”. The mass was done in the morning with the Grade 12 and Junior Highschool students as the listeners of the sermon. Along with that,  students from different strands prepared an offering for this mass. The homily mass will proceed on become a tradition for the school, not only for the students but also for the faculty, admin and staff as well.', '', '', '', '', '', '', ''),
(15, 'Tagisan Ng Talino Ng Mga Mag-aaral Ng Junior High School', 'Jewel May Ramos', 'Acads', '2023-09-05', 'Noong nakaraang Miyerkules ginanap ang isang kompetisyon ng mga mag-aaral ng Colegio de Los Baños na nagmula sa baitang 7 hanggang 10 sa pinagdiriwang na Buwan ng Wika. Limang grupo na may apat na miyembro ang nagpakita ng kanilang talino at galing sa pagsagot ng mga katanungan na ibinigay ng mga guro.', 'Mayroong tatlong kategorya ang mga tanong na ibinigay sa kanila, una ay ang madaling lebel na mayroong pagpipiliang sagot na may katumbas na dalawang puntos, pangalawa ay ang katamtamang lebel na mayroon namang tatlong puntos, at ang mahirap na lebel ay walang pagpipilian ng sagot na may katumbas na limang puntos.', 'Itinanghal sa pangalawang pwesto ang pangkat 2 na nagkamit ng 49 puntos na sina Denice, Zeus, Kisha, Catherine. Pang-unang pwesto naman sa pangkat 4 na nagkamit ng 53 puntos na sina Jamila, James, Marigen, Precious L. at ang itinanghal na kampeon ay nagmula sa pangkat 5 na mayroong 55 na puntos na sina Rusty, Shanelle, Pia, Renzo.', '', '', '', '', '', ''),
(16, 'Labanan Ng Pagkamalikhain Ng Mga Mag-aaral Ng Junior High School.', 'Shaina Rose Tandang', 'Acads', '2023-09-07', 'Isa ang paligsahan ng paggawa ng poster na pasok sa temang \"Filipino at Mga Katutubong Wika: Wika ng Kapayapaan, Seguridad, at Inklusibong Pagpapatupad ng Katarungang Panlipunan\" sa mga programa na naganap nitong nakaraang\r\nMiyerkules, ika-30 ng Agosto 2023, bilang selebrasyon ng paaralan ng Colegio de Los Baños.', 'Mula sa piling mag-aaral ng iba\'- ibang baitang ng depertamento ng Junior High School ang siyang nagpamalas ng kanilang pagiging malikhain at pagiging mahusay sa paggawa ng isang sining. At base sa resulta na naisagawa ng mga kalahok sa paligsahan na ito, tunay nga namang kapansin- pansin ang husay at dedikasyon ng bawat miyembro na kalahok pagdating sa kanilang paglikha ng isang sining.', 'Iltinanghal sa ika-apat na parangal ang grupo nina James Clarence Estricomen, Catherine Fusana, Precious Dabu, Crishia Banasihan at Mark Ericson Angeles na nag mula sa baitang 10. Nasa ika- tatlong parangal naman ang grupo nina Lhian Balinong, Raziel Dalisay, Aliyah Castro at Lucas Miguel Tamayo na mga nag mula sa baitang 7. Sumunod naman na itinanghal ang grupo nina John Robert Balinong, Drew Marley Alcachupas, Alliah Olpot, Franchesca Alforja at Chris Jeiland Calasicas bilang pangalawa sa nanalo, mula sa baitang 8. At ang itinanghal na kampeon para sa paligsahan ng pagkamalikhain sa paggawa ng poster ay ang grupo nina Archielyn Deliupa, Jacob Nathanirl Senson, John Zachariah Ciceron, Rae Clydee Lanao at Ira Eunice Tuazon na nag mula sa baitang 9.', '', '', '', '', '', ''),
(17, '#WeAreASEAN Biodiversity', 'Raffaele Jasmin Ibanez', 'News', '0000-00-00', 'JHS students of CDLB as part of the Tree Planting activity for the 18th founding celebration of ASEAN Centre for Biodiversity (ACB) --- September 10', 'Colegio De Los Baños was invited to be part of the 18th celebration of the Association of Southeast Asian Nations (ASEAN) at the ASEAN Centre of Biodiversity (ACB) Headquarters, located in the University of the Philippines, Los Baños, Laguna.', 'This is to be a momentous event as General Dr. Secretary- Kao Kim Hourn marks his first-ever visit to ACB with the announcement of two new Heritage Parks listed in Thailand. ACB aims to sustain and conserve biodiversity --- species conservation, ecosystem restoration, ecosystem services and invasive alien species. This also includes their increasing number of ASEAN Heritage Parks with high conservation importance.', '', '', '', '', '', ''),
(18, 'Tagisanng Husay Sa Larangan Ng Badminton', 'Christine Joyce Garcia Reyes', 'Sports', '2023-09-11', 'Noong ika-6 ng Setyembre, ginanap ang isang Badminton tryouts para sa mga mag-aaral ng Colegio de Los Banos na nagmula sa baitang 11 hanggang 12 at ito\'y pinamunuan ni G. Richard Pascua.', 'Bawat kalahok ay nag pamalas nang kani-kanilang angking husay sa larangan ng sports, makikita mo sa kanilang mga kilos ang pagiging isang determinadong player sa kabila ng hirap, pagod, at pangamba. Lahat ay tiniis upang maipakita ang galing para sila ay mapabilang sa Badminton team, sabi nga ng karamihan sa kanila.', '\"Mahirap makapasa sa tryouts kase maraming magagaling pero, kahit ganito kahirap sulit padin kase masaya... nakakaaliw.\"', 'Ayon sa resulta ng Badminton tryouts marami ang nakapasok sa Badminton team A for ADVANCE at B for BEGINNERS.', 'Isa sa naging paalala ni G. Richard Pascua, na ang pagiging isang disiplinadong player ay nararapat lamang na makuhang grado ay hindi, \"line of 7 sa card\" dagdag pa niya. \"Automatic tanggal na once na magkaroon kayo ng line of 7 sa card ninyo, kahit isang beses man iyan, tanggal na kase dapat hinde n\'yo pabayaan ang inyong acads kahit na sa sports club kayo\"', '', '', '', ''),
(19, 'Arts and Crafts Club Hosts Vibrant Screening, Showcasing Student Talent and Innovation', 'Keziah Marie Daniel', 'Events', '2023-09-15', 'An artistic and colorful day was held on September 6th as the Arts and Crafts Club started their general screening at the Upper Library of the school.', 'It was led by Sir Jomar Soliman and Sir John Reno Miguel with a theme of \"Teachers: Leading in Innovation, Re-Imagining the Future,\" as the talented students showed off their artistic skills with different art styles on the impromptu poster-making prepared by the mentors. The screening paid off with a lot of enlightenment and advice as they learned the mantra of art and developed their artistry.', '', '', '', '', '', '', ''),
(20, 'Cdlb Senior High School Students Attend the 1st Laguna Youth and Volunteerism Summit 2023', 'Shaina Rose Tandang', 'Events', '2023-09-15', 'Selected participants from all five strands of the senior high school students of Colegio de Los Baños attended a two-day Youth and Volunteerism Summit themed \"Front, Line, and Center: Laguna Youth in Volunteerism\" that occured at the University of the Philippines Los Baños Baker Hall. The program started with a welcoming performance of the UPLB Ugnayan ng Pahingungod Volunteers followed by Ms. Kathe Lyn L. Tamisin for the Introduction and Overview of the Event.', 'The first day of the Laguna Youth and Volunteerism Summit that occured this September 08, 2023, started at 8:30am until 5:00pm. The participants from Colegio de Los Baños listened thoroughly from the speakers on the first day.', 'September 09, 2023, was the second day continuation of the summit that started at 8:30am until 12:30pm. The representative participants of CDLB had more fun on second day of the summit, to where they had an activity together with the other participant in the crowd from different municipality of Laguna.', 'Each guest speaker shared their own experiences and advices when it comes to volunteerism, to where the audience had a lot of realizations and take aways from the topics that was discussed. The participants also had fun activities to where they got to interact and socialize with the participants. As the summit ends, it left a heart felt message to the participants, \"Volunteerism should empower not only the receiver but also the giver\" - Mr. Donald James D. Gawe.', '', '', '', '', ''),
(21, 'Mag-aaral ng Colegio de Los Baños Nagpakitang-gilas sa Pag-awit at Pag-arte sa Kaganapang Pinaghanda', 'Jewel Magda Ramos', 'News', '2023-09-15', 'Noong Setyembre 6, 2023 ay nagkaroon ng isang kaganapan kung saan ang mga mag aaral ng Colegio de Los Baños ay nakilahok sa pagpapakita ng galing sa pag-awit at pagdudula na kanilang pinaghandaan. Sila Sir Karlo Sityar, Ms. May Ann Bienes at Ms.Norielyn Elec na gurong tagapamahala ng Likhayag ay dumalo rin upang tunghayan ang mga ito.', 'Ang samahang Likhayag ay nakatutok sa talento ng mga mag-aaral sa kanilang galing sa pagkanta at pag-arte na kanilang magagamit sa mga proyekto ng samahan.', '', '', '', '', '', '', ''),
(22, 'Aquila Sprites Kicks Off School Year with Club Orientation and Officer Assignments', 'Thea Rallos', 'Events', '2023-09-20', 'Aquila Sprites conducted their first club orientation of this school year last September 06, 2023. Purposely the orientation which was commenced by the two Org. Advisers Mr. Karlo Sityar and Mr. Levin Salud is to guide the new members about the rules and regulations in the club as well as teaching them to become a morally correct players on the playing ground. Aside from that, the club members also assigned their new club officers. Students from different strands and year levels have signed to join in Aquila Sprite from the previous club signing event that took placed on August 18, 2023.', '', '', '', '', '', '', '', ''),
(23, 'Students From Grade 12- Ict Attended a Seminar in Uplb In Syensaya Technofrum', 'Jewel Magda Ramos', 'Events', '2023-09-25', 'On September 18, 2023, Grade 12 ICT students with their adviser Mr. Jon Cruz attended a seminar in University of Los Baños (UPLB) in SEARCA Umali Auditorium called \"Coding Conscience: A Student\'s Guide to Al Ethics and Innovation\" as a part of the program of SYENSAYA TECHNOFRUM. In this seminar, the advantages and disadvantages of Al or Artificial Intelligence in our society have been discussed with the students. Assistant Professor Reginald Neil C. Recario from Institute of Computer Science in UPLB, Assistant Professor Jerard Ancel D. Eusebio as LITE Program Coordinator in UPLB College of Arts and Sciences, Mr. John Robertson C. Despi a BS Computer Science Student in UPLB CAS Institute of Computer Science and Mr. Jan Jacob Glenn M. Jansalin, an Information System Analyst II in UPLB Information Technology Center were the speakers of the seminar.', 'A lot of information has been discussed which could help students to gain knowledge about Al. The speakers also offered their personal expertise and experience that can assist the attendees understand how to utilize Al responsibly and how it affects us in a variety of ways. Additionally, they also had an open forum where they let the participants freely ask questions to be answered by them.', 'As they belonged to the ICT strand, technology is one of their areas of interest and focus so they participated in this conference. It is also included as part. of their work immersion. It will benefit them for the opportunity to hear and learn more about technology through this forum.', '', '', '', '', '', ''),
(24, 'Colegio de Los Baños Students Engage in Science Exploration at KaSYENSAYAhan sa CALABARZON Event', 'Jashley Anne Aguilar', 'Acads', '2023-09-27', 'Students from Colegio de Los Banos recently participated in an event held at the University of the Philippines Los Baños from September 18–22, 2023.', 'The 2023 Regional KaSYENSAYAhan sa CALABARZON Science, Technology, and Innovation Week, Los Baños SyenSaya Festival, gave students a fun way to explore the world of science they also exhibit the inventions of scientists and researchers in the different educational institutions.', 'The young brains of Colegio de Los Baños Learners certainly gained more understanding and value of the incredible realm of science as a part of this excellent educational experience. They explored many booths at this event, immersing themselves in many kinds of scientific information and experiences.', '', '', '', '', '', ''),
(25, 'Dost Syensaya Grand Tikme Sa Uplb.', 'Christine Joyce Garcia Reyes', 'Acads', '2023-09-27', 'Noong ika-19 ng Setyembre idinaos ng Department of Science and Technology (DOST) ang kanilang Exhibit Program sa Baker Hall, University of the Philippines Los Baños (UPLB) na may temang \"KaSYENSYAhan sa Calabarzon: 2023 Regional Science Technology and Innovation Week back-to-back with the 15th Los Baños Syensaya Festival.\" Bukod pa rito mayroon din silang Grand Tikme sa ELBI, Quiz Bee para sa mga mag-aaral mula sa Elementarya at ang on the spot Q&A para sa mga indibidwal na dumalo sa Exhibit.', 'Sa kalagitnaan nang aming paglilibot sa Grand Tikme Exhibit nakapanayam namin ang Paula\'s Candy Store, isa ang kanilang store sa may food tasting, tampok dito ang mga pinamamalaki nilang produkto gaya ng yema, gummies at ang pinaka patok na pastillas na mayroong tatlong flavor, ang milk, pandan at ube.', 'Base sa aming nakalap na impormasyon ang Paula\'s Candy ay nagsimula noong taong 2002, at ito\'y sinimulan sa pamamagitan ng pag aalok-alok sa mga kakilala, kapitbahay at sa mga tindahan hanggang sa naglaon pati na rin ang mga supermarkets ay kinilala na sila. Sweets ang napili nilang i-negosyo dahil ito raw ay patok sa lahat maalin man sa bata hanggang sa matanda. Dagdag pa nila, sumali sila rito sa Grand Tikme Exhibit upang suportahan ang DOST Program at higit sa lahat ay upang ipakita at irekomenda ang kanilang produkto.', '', '', '', '', '', ''),
(26, 'Miting de Avance: A.G.I.L.A at Eagles Partylist Nagpakilala ng Plataporma sa Colegio de Los Baños', 'John Benedict Revilleza', 'Events', '2023-10-05', 'Noong Ika-27 ng Setyembre ay nagkaroon ng miting de avance sa San Agustin covered court ang dalawang partido na nag hahangad ng posisyon sa Student Body Organization (SBO) na A.G.I.L.A at Eagles partylist, kung saan nagpakilala ang bawat miyembro at inilahad ang kani-kaniyang plataporma para sa kanilang kapwa estudyante ng Colegio De Los Baños.', '', '', '', '', '', '', '', ''),
(27, 'Bonggang Kasiyahan: Espesyal na Pagtitipon ng mga Estudyante ng Junior High School sa Colegio de Los', 'Ailah Katrice Opulencia', 'News', '2023-10-25', 'Noong ika-18 ng Oktubre, nagkaroon ng espesyal at bonggang kasiyahan ang mga estudyante ng Junior High School sa Colegio de Los Baños San Agustin covered court, ito ay pinangunahan ng mga JHS Student Body Organization. Pinakita ng mga estudyante mula sa baitang 7-10 ang kanilang nagkikinangan at nag gagandahang kasuotan. Layunin ng kanilang espesyal na kasiyahan ay magkaroon ng pagkakataong makilala ng bawat isa ang kanilang mga bagong mga makakasama ngayong taon ng panuruan. ', '', '', '', '', '', '', '', ''),
(28, 'Colegio De Los Banos Nagpakitang-gilas sa \'Denim and Pearls\' Acquaintance Party', 'Kimberly Villaver', 'Events', '2023-10-27', 'Noong nakaraang biyernes, ika- 12 ng Oktubre naganap ang Acquaintance Party sa Colegio De Los Banos kung saan naipamalas ng mga estudyante ang kanilang magagandang kasuotan na naguugnay sa tema na \"Denim and Pearls: A day of Elegance, Glamour, and Camaraderie Celebrating The Spirit of Togetherness\". Ginanap ang nasabing Acquaintance Party sa Angelo San Agustin Multi-purpose Covered Court sa itinakdang oras 1:00 pm - 6:00 pm ng gabi. ', 'Ang bawat estudyante na kabilang sa mga clubs tulad ng Eagles Dance Company (EDC) at Likhayag Club ay may kani kanilang partisipasyon patungkol sa programa. Ang bawat strands tulad na lamang ng ABM, HUMSS, GAS at STEM ay nagkaroon ng intermission number kung saan naipamalas nila ang kanilang talento sa pagsasayaw. Hindi rin magpapahuli sina Angelly Cordova at Zyrus Sanchez na tinanghal bilang Mr. and Ms. Acquaintance 2023. Sina Lhara Mae Bruzula at Dustin Maningas na nanalo bilang Mr. and Ms. Face of the Night. At sina Fatima Mhay Cruzana at Justine Mhervy Tonga na tinanghal bilang Best in Denim Attire. Bumida ang kanilang nag gagandahang suot sa mata ng maraming tao na naging susi upang sila ay manalo bilang isa sa mga star of the night ng acquaintance party. ', 'Sa naganap na Acquaintance Party, tatatak sa puso\'t isipan ng bawat estudyante na lumahok dito ang saya na nadala nito sa bawat indibidwal. Lalo itong pinasaya noong inanunsyo ng assistant principal na si Sir. Pascua ang pageextend ng oras hanggang 8:00 pm nang gabi na inaprubahan ng school director na si Ms. Aleli San Agustin. Sa tulong ng Student Body Organization (SBO) at mga guro, naging maayos ang takbo ng Acquaintance Party. Ang ilang araw na pinaghandaan ay hindi nauwi sa wala, ang bawat estudyante ay umuwing may mga ngiti sa kanilang labi at masasabing ito ang isa sa mga masasayang okasyon sa paaralan na hindi nila kailanman makakalimutan. ', '', '', '', '', '', ''),
(29, 'Eagles Show Spirit Despite Scores', 'Keziah Marie Daniel', 'News', '2023-11-25', 'Looking back at the game highlights of the Women\'s and Men\'s Volleyball play during the District Meet season that was held yesterday (November 24) at San Agustin Covered Court in Colegio de Los Baños.', 'The Eagles witnessed and watched an intense game play on every set from the different schools in Los Baños. Our players from the Colegio de Los Baños women\'s and men\'s volleyball teams took part in it also.\r\n', 'The game was wrapped in fulfillment and enjoyment for every player, and they truly did their best with their hustle spirit. \r\n', 'CDLB Men\'s Volleyball with a final score of 22-25.\r\nCDLB Women\'s Volleyball with a final score of 0-25.\r\n', 'We congratulate you all on your outstanding game play!\r\n', '', '', '', ''),
(30, 'Exploring New Worlds: CDLB Book Week Celebration Transports Students into the Realm of Literature', 'Shaina Rose Tandang', 'Events', '2023-11-27', 'It was truly a journey through the pages as we take a peek into a whole new world of the Book Week celebration of Colegio de Los Baños.', 'Last November 22, 2023, Wednesday, at the San Agustin Multipurpose Covered Court is where we saw some glamorous, splendid, and delightful characters that was cosplayed by the Junior High School Students during the book week celebration themed: \"????, ??????, ??????\". And where we\'ve witnessed the creative and mind-blowing one act play by the students from the Humanities and Social Sciences strand. Let\'s all take our time to reminisce the tail of captivating chapters. ', '', '', '', '', '', '', ''),
(31, 'CDLB and St. Jude Family Hospital Join Forces in School Fire Drill with BFP-LB', 'Shaina Rose Tandang', 'Events', '2024-01-20', 'This January 19, 2024, Friday at 9:00am inside the San Agustin Multipurpose Covered Court the students, and staff of Colegio de Los Baños and St. Jude Family hospital participated actively in the school fire drill. The Bureau of Fire Protection - Los Baños (BFP - LB) educated and demonstrated the students and the staff on the ways how to prevent fire-risks.', '', '', '', '', '', '', '', ''),
(32, 'Another chapter done, Eagles! ', 'Hannah Mae Sevilla', 'News', '2024-01-21', 'We have completed the first semester with flying colours and overcome many adversities. Are you eady to conquer endless opportunities and explore new begining in second semester? Let\'s do our best and make this semester even more successful! Let\'s do this, Colegio de Los Baños!', '', '', '', '', '', '', '', ''),
(33, 'Kudos, Eagles!', 'Shaina Rose Tandang', 'News', '2024-02-01', 'The Student Body Organization together with the General Academic Strand and Humanities and Social Sciences strand, conducted their first ever clean up drive this 31st of January in the year 2024, at Mayondon, Los Baños, Laguna.', 'This clean up drive project has been one of the Student Body Organization\'s advocacy, and with the looks of it they totally achieved their success on their first day of clean up drive.', '', '', '', '', '', '', ''),
(34, 'Ginoo at Binibining CDLB 2023 Screening Unveils Glamour and Talent', 'Shaina Rose Tandang', 'Events', '2024-02-04', 'Take a closer look at the behind the scenes of the Ginoo at Binibining CDLB 2023 Screening that was held this January 31st, 2024.', 'We can all see the glamour and splendid faces of our participants who joined and registered for the screening. The Student Body Organization was behind the great success of this event, with Mr. Alvin L. Montalla LPT, MaEd, screening our beloved participants. Kudos, SBO and to all the participants!', 'We can\'t wait to see the faces of our Ginoo at Binibining CDLB 2023 Candidates!', '', '', '', '', '', ''),
(35, 'Eagles in the Cmdi Cup Inter School Competition', 'John Benedict Revilleza', 'Events', '2024-02-06', 'On February 3 2024— The CMDI cup commenced again this year with a theme of \"Gear up! Igniting Competencies: Celebrating Skills and Knowledge\" \r\nThe chosen Senior High School and Junior High School students of Colegio de Los Baños joined and competed in the said event last Saturday. The CMDI cup had 5 events that are open for different schools to join, leading up to a total of 22 schools who participated in the Competition. ', 'The 3x3 Basketball (boys) won 3rd place in over 16 schools to compete with, whilst the Mural Painting contestants who had their beautiful piece won the 1st place of over 12 schools to compete with. The Quiz bee, both JHS and SHS category along with Madulang sabayang pagbigkas and E-sports players may not have had their luck this year, but their efforts weren\'t in vain. hence we should still congratulate these wonderful students who competed with over 22 schools around the CMDI Main campus. These Talented and Intelligent students surely did their best and we should be proud of them for taking this opportunity to represent their beloved school Colegio de Los Baños.\r\n', '', '', '', '', '', '', ''),
(36, 'Eagles Woman Basketball', 'Jewel May Ramos', 'Sports', '2024-02-07', 'The CLDB Women\'s Basketball won as the champion for the Unit meet at the game held in CMDI Tranca Bay, Laguna on February 4, 2024. The players are Kristine Dalguntas, Francine Palmones,\r\nKrystal Leviste, Bianca Delos Santos, Jannelle Barcebal, Chrisha Banasihan, Janice Magda, Thea Rallos, Kazandra Ramirez, Lyndsey Ann Educado, and Princess Shaira Quitay with their Coach Hekel and  Coach Raph.', 'Before they got to play for the final game, they won the first game on Paciano Laguna with the score 19-9 and second game on Bay Laguna with the score 34-35 on February 3, 2024. The score on semi-final was 48-38 and the Final game was 26-46 in favor of CDLB. According to one of the player they had a training every saturday as their preparation for the competion. This event was part of the CMDI Inter School competition that was participated by different schools. Once more, they are required to partake in the provincial competition as they move forward to the next phase of their journey.\r\n', '', '', '', '', '', '', ''),
(37, 'Fostering Unity and Teamwork for Sportsfest', 'John Benedict Revilleza', 'Events', '2024-02-09', 'On February 7, 2024— The STEM day of the Ka-Tangkays in Colegio De Los Baños, was held in the San Agustin Covered Court. The STEM day is a tradition of their strand as  preparation and team building gathering in order to achieve the unity and teamwork for the upcoming sportsfest this year. They are thrilled and happy to join as they participated and get to know each other from different sections and grade levels of the STEM strand. The stem day was prepared and organized by their Stem advisers and stem class presidents.', '', '', '', '', '', '', '', ''),
(38, 'People Initiative Nga Ba Nino?... Natin!', 'Ailah Katrice Opulencia', 'News', '2024-02-22', 'Kahapon ika-21 ng Pebrero ginanap ang isang seminar na may temang, \"P.I (People Initiative) Nino? Niya? Mo? Natin?\" na binahagi ng dating mag-aaral ng Colegio de Los Baños na si Dr. Ande M. Luna, Mat, Phd. At ito ay  dinaluhan ng iba\'t ibang mga estudyante mula sa iba\'t ibang departamento ng Senior High School, at iba\'t ibang kurso ng Kolehiyo. ', 'Ito ay upang hindi himukin ang mga estudyante ngunit upang bigyang kaalaman patungkol sa isyu ng Constitutional 1987 o tinatawag na Anti Marcos Constitution. Layunin din ng seminar na ito na magbukas nang kaisipan ng mga kabataan ukol sa layunin na ginagampanan ng isyung ito sa ating bansa.', '', '', '', '', '', '', ''),
(39, 'Umbrellas up, Eagles!', 'Shaina Rose Tandang', 'News', '2024-03-29', 'Rain or shine, the parade must go on! Here are some of the wholesome photos taken during this year\'s parade. For this year\'s Sports Fest celebration our Eagles truly never let a little rain dampen their fighting spirit.', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
