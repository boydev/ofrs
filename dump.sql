/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intvw`
--

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `is_band`) VALUES
(1, 'DJ Bobo', 0),
(2, 'System of a dawn', 1),
(3, 'Kiesza', 0);


--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220604184927', '2022-06-04 19:43:53', 108);


--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `title`, `lyrics`) VALUES
(1, 'B.Y.O.B', 'Why do they always send the poor?\r\n\r\nBarbarisms by Barbaras\r\nWith pointed heels\r\nVictorious, victories kneel\r\nFor brand new spankin\' deals\r\nMarching forward hypocritic\r\nAnd hypnotic computers\r\n\r\nYou depend on our protection\r\nYet you feed us lies from the table cloth\r\n\r\nLa, la la, la la, la la, la la\r\n\r\nEverybody\'s going to the party, have a real good time\r\nDancing in the desert, blowing up the sunshine\r\n\r\nKneeling roses disappearing\r\nInto Moses\' dry mouth\r\nBreaking into Fort Knox\r\nStealing our intentions\r\nHangars sitting dripped in oil\r\nCrying, \"Freedom!\"\r\n\r\nHanded to obsoletion\r\nStill you feed us lies from the table cloth\r\n\r\nLa, la la, la la, la la, la la\r\n\r\nEverybody\'s going to the party, have a real good time\r\nDancing in the desert, blowing up the sunshine\r\n\r\nEverybody\'s going to the party, have a real good time\r\nDancing in the desert, blowing up the sunshine\r\n\r\nBlast off. It\'s party time\r\nAnd we don\'t live in a Fascist nation\r\nBlast off. It\'s party time\r\nAnd where the fuck are you?\r\nWhere the fuck are you?\r\nWhere the fuck are you?\r\n\r\nWhy don\'t presidents fight the war?\r\nWhy do they always send the poor?\r\nWhy don\'t presidents fight the war?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\n\r\nKneeling roses disappearing\r\nInto Moses\' dry mouth\r\nBreaking into Fort Knox\r\nStealing our intentions\r\nHangars sitting dripped in oil\r\nCrying, \"Freedom!\"\r\n\r\nHanded to obsoletion\r\nStill you feed us lies from the tablecloth\r\n\r\nLa, la la, la la, la la, la la\r\n\r\nEverybody\'s going to the party, have a real good time\r\nDancing in the desert, blowing up the sunshine\r\n\r\nEverybody\'s going to the party, have a real good time\r\nDancing in the desert, blowing up the sun\r\n\r\nWhere the fuck are you?\r\nWhere the fuck are you?\r\nWhy don\'t presidents fight the war?\r\nWhy do they always send the poor?\r\nWhy don\'t presidents fight the war?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\n\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\nWhy do they always send the poor?\r\nThey always send the poor\r\nThey always send the poor'),
(2, 'Somebody Dance With Me', 'I′m back again on a higher stage\r\nListen to the party beat and get in range\r\n\'Cause you know when I flow and I show you so\r\nWhich way is better which way you got to go\r\nTo make a fun house party all night\r\nYou gotta check this out, yo da ya di\r\n′Cause it\'s party over there with glamour and glairs\r\n(So dance move you, Pump that body!)\r\n\r\nMove your body, up and down\r\nSide to side, it\'s party time\r\nYeah that′s right we′re dancing tonight\r\nTo the sun is coming up and the sky is all bright\r\nWe\'re coming to the end like you understand\r\nThat I′m a partyman do the best I can\r\nTo make you laugh again, now I\'m out of the scene...\r\n\r\n\r\nI′ve got this feeling\r\nSomebody dance with me\r\nSomebody dance with me\r\nI\'ve got this feeling\r\nSomebody dance with me\r\nSomebody dance with me\r\nAnother time, another place\r\n\r\nAnother rhyme done for every race\r\nIn your case, we′re getting rough\r\nI\'m not going to stop \'till you get enough\r\n′Cause you groove back and BoBo is back\r\nAnd you see it yourself, it′s like a heart-attack\r\nMy rhymes, combination, infiltration, situation\r\nAll over the nation\r\nLike round and round, upside down\r\n\r\nLiving my life \'till your feet are on the ground\r\nThen put your hands up in the air\r\nAnd waving like you just don′t care\r\nAnd if you\'re ready to rap, then rap with me\r\nSomebody say OH YEAH! (oh yeah) OH YEAH (oh yeah) AAOW!\r\nNow it′s just the time, I think you\'re ready\r\n\r\nSo make some room and space just to hit it\r\n\r\n\r\n(Move, move that body)\r\nA didley didley dee\r\nYeah we make the party to the B to the O to the B to the O\r\nWanna rock your body wanna rock your soul\r\nWhen I never ever said I do it better\r\nI just know the time, sounds clever\r\nThe way you had expected\r\nWe′re having for the end\r\n\r\nParty that was another story\r\nFor the party man, and his clan\r\nSo they will come again\r\nShow and improve you, it\'s not the end\r\nIt\'s jam session\r\nMy profession\r\nA truly hard yeah one an obsession\r\nBut the joke is over, you know what I mean\r\nThe party is gone and I′m out of the scene...');

--
-- Dumping data for table `song_artist`
--

INSERT INTO `song_artist` (`song_id`, `artist_id`) VALUES
(1, 2),
(2, 1),
(2, 3);


