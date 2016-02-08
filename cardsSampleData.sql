SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO `cards` (`id`, `idol_id`, `event_id`, `cardNumber`, `eName`, `jName`, `rarity`, `type`, `baseLife`, `baseVocal`, `baseDance`, `baseVisual`, `baseMaxLife`, `baseMaxVocal`, `baseMaxDance`, `baseMaxVisual`, `awkBaseLife`, `awkBaseVocal`, `awkBaseDance`, `awkBaseVisual`, `awkMaxLife`, `awkMaxVocal`, `awkMaxDance`, `awkMaxVisual`, `centerSkillText`, `specialSkillType`, `specialSkillText`, `baseArt`, `awkArt`) VALUES
(1, 1, NULL, 43, '"Stage of Magic" Uzuki Shimamura', '［ステージオブマジック］島村卯月', 'SSR', 'Cute', 40, 2028, 2006, 2001, 42, 4436, 4387, 4377, 42, 2662, 2633, 2627, 44, 5349, 5289, 5278, 'All Appeals of all Cute Idols up 30%', 'Perfect Lock', 'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 9 seconds for a very short time.', '43.png', '44.png'),
(2, 2, NULL, 99, '"Stage of Magic" Rin Shibuya', '［ステージオブマジック］渋谷凛', 'SSR', 'Cool', 40, 2001, 2028, 2006, 42, 4377, 4436, 4387, 42, 2627, 2662, 2633, 44, 5278, 5349, 5289, 'All Appeals of all Cool Idols up 30%', 'Perfect Lock', 'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 12 seconds for a short time.', '99.png', '100.png'),
(3, 1, NULL, 1, 'Uzuki Shimamura', '島村卯月', 'R', 'Cute', 25, 1020, 1248, 1965, 27, 1815, 2221, 3497, 27, 1280, 1566, 2465, 29, 2257, 2761, 4347, 'Visual Appeal of all Cute idols up 30%', 'Score Boost', 'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '1.png', '2.png'),
(4, 2, NULL, 57, 'Rin Shibuya', '渋谷凜', 'R', 'Cool', 25, 1936, 1044, 1263, 27, 3444, 1857, 2247, 27, 2428, 1309, 1584, 29, 4281, 2309, 2793, 'Vocal Appeal of all Cool idols up 30%', 'Score Boost', 'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '57.png', '58.png'),
(5, 3, NULL, 115, 'Mio Honda', '本田未央', 'R', 'Passion', 25, 1058, 1918, 1272, 27, 1882, 3413, 2263, 27, 1327, 2406, 1595, 29, 2340, 4243, 2813, 'Dance Appeal of all Passion idols up 30%', 'Score Boost', 'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '115.png', '116.png'),
(6, 3, NULL, 159, '"Stage of Magic" Mio Honda', '［ステージオブマジック］本田未央', 'SSR', 'Passion', 40, 2006, 2001, 2028, 42, 4387, 4377, 4436, 42, 2633, 2627, 2662, 44, 5289, 5278, 5349, 'All Appeals of all Passion Idols up 30%', 'Perfect Lock', 'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 15 seconds for a considerable length of time.', '159.png', '160.png'),
(7, 3, 2, 325, '"Gokigen Party Night" Mio Honda', '［ゴキゲンParty Night］本田未央', 'SR', 'Passion', 35, 2481, 1272, 1563, 37, 5010, 2570, 3157, 37, 3198, 1641, 2015, 39, 6115, 3137, 3854, 'Vocal Appeal of all idols up 48%', 'Combo Bonus', 'COMBO pt bonus 12% up, medium probability of triggering every 6 seconds for some time.', '325.png', '326.png'),
(8, 4, NULL, 139, 'Airi Totoki', '十時愛梨', 'R', 'Passion', 25, 1661, 1625, 1617, 27, 2956, 2891, 2877, 27, 2084, 2038, 2028, 29, 3675, 3594, 3576, 'Raises the life of all Passion members by 10%', 'Perfect Lock', 'GREATs become PERFECTs temporarily, low probability of triggering every 9 seconds for a short time.', '139.png', '140.png'),
(9, 15, NULL, 83, 'Anastasia', 'アナスタシア', 'R', 'Cool', 28, 1357, 1355, 1366, 30, 2414, 2411, 2430, 30, 1702, 1700, 1713, 32, 3001, 2997, 3021, 'Raises the life of all Cool members by 10%', 'Healer', 'PERFECTs recover 2 life, low probability of triggering every 9 seconds for a short time.', '83.png', '84.png'),
(10, 11, NULL, 19, 'Anzu Futaba', '双葉杏', 'R', 'Cute', 25, 1479, 1470, 1468, 27, 2632, 2616, 2613, 27, 1856, 1844, 1842, 29, 3272, 3252, 3249, 'Raises the skill probability of all Cute members by 15%', 'Perfect Lock', 'GREATs become PERFECTs temporarily, low probability of triggering every 11 seconds for some time.', '19.png', '20.png'),
(11, 10, NULL, 15, 'Frederica Miyamoto', '宮本フレデリカ', 'R', 'Cute', 25, 1627, 1649, 1631, 27, 2895, 2934, 2902, 27, 2041, 2068, 2046, 29, 3599, 3647, 3608, 'Raises the skill probability of all Cute members by 15%', 'Healer', 'PERFECTs recover 2 life, low probability of triggering every 11 seconds for some time.', '15.png', '16.png'),
(12, 9, NULL, 5, 'Kanako Mimura', '三村かな子', 'N', 'Cute', 20, 1168, 1802, 963, 21, 1752, 2702, 1444, 21, 1419, 2188, 1169, 22, 2266, 3495, 1868, 'No Skill', 'No Skill', 'N/A', '5.png', '6.png'),
(13, 14, NULL, 79, 'Karen Hojo', '北条加蓮', 'R', 'Cool', 25, 1643, 1634, 1632, 27, 2924, 2907, 2904, 27, 2061, 2049, 2047, 29, 3635, 3614, 3611, 'Raises the skill probability of all Cool members by 15%', 'Perfect Lock', 'GREATs become PERFECTs temporarily, low probability of triggering every 9 seconds for a short time.', '79.png', '80.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
