SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


INSERT INTO `songs` (`id`, `eName`, `jName`, `translated`, `type`, `bpm`, `unlockCon`, `availability`, `coverArt`, `debutLvl`, `debutStam`, `debutNotes`, `regLvl`, `regStam`, `regNotes`, `proLvl`, `proStam`, `proNotes`, `masterLvl`, `masterStam`, `masterNotes`, `dateAdded`) VALUES
(1, 'Onegai! Cinderella', 'お願い！シンデレラ', 'Please! Cinderella', 'All', 175, 'Complete Tutorial', 'Always', 'Onegai! Cinderella.png', 5, 10, 46, 10, 12, 205, 15, 15, 341, 20, 18, 477, '2015-09-03'),
(2, 'Orange Sapphire', 'Orange Sapphire', 'Orange Sapphire', 'Passion', 162, 'Available by default. Past Event Song - Unlocked on 2015-12-28', 'Weekday/Sunday/Monday/Tuesday/Friday/Saturday', 'Orange Sapphire.png', 8, 11, 116, 13, 13, 214, 17, 16, 411, 26, 19, 719, '2015-11-20'),
(3, 'Star!!', 'Star!!', 'Star!!', 'All', 178, 'Complete Story Episode 2.', 'Always', 'Star!!.png', 6, 10, 102, 12, 13, 180, 16, 15, 346, 25, 19, 569, '2015-09-03'),
(4, 'Todoke! Idol', 'とどけ！アイドル', 'Reach For! Idol', 'All', 180, 'Complete Episode Story 1. Other songs will remain locked until this song is unlocked', 'Always', 'Todoke! Idol.png', 5, 10, 74, 11, 12, 145, 15, 15, 310, 21, 18, 481, '2015-09-03'),
(5, 'We''re the Friends!', 'We''re the Friends!', 'We''re the Friends!', 'All', 178, 'Complete Panel Mission Sheet 1.', 'Always', 'We''re the Friends!.png', 6, 10, 73, 12, 13, 170, 16, 15, 383, 22, 18, 547, '2015-09-03'),
(6, 'Yuubae Present', '夕映えプレゼント', 'Sunset Glow''s Present', 'All', 175, 'Complete Panel Mission Sheet 2.', 'Always', 'Yuubae Present.png', 8, 11, 103, 14, 14, 201, 18, 16, 425, 26, 19, 593, '2015-09-03'),
(7, 'GOIN''!!!', 'GOIN''!!!', 'GOIN''!!!', 'All', 178, 'Complete Panel Mission Sheet 3.', 'Always', 'GOIN''!!!.png', 9, 11, 125, 13, 13, 181, 17, 16, 383, 27, 19, 575, '2015-09-03'),
(8, 'Message', 'メッセージ', 'Message', 'All', 170, 'Get 100 PRP', 'Always', 'Message.png', 7, 10, 105, 13, 13, 202, 16, 15, 347, 25, 19, 521, '2015-09-03'),
(9, 'Dekitate Evo! Revo! Generation!', 'できたてEvo! Revo! Generation!', 'Freshly Evo! Revo! Generation!', 'All', 174, 'Buy for 5000 Money from the room jukebox.', 'Always', 'Dekitate Evo! Revo! Generation!.png', 7, 10, 104, 11, 12, 191, 19, 17, 448, 26, 19, 671, '2015-09-03'),
(10, 'Kagayaku Sekai no Mahou', '輝く世界の魔法', 'Magic of the Shining World', 'All', 172, 'Get to Producer Rank D', 'Always', 'Kagayaku Sekai no Mahou.png', 7, 10, 112, 13, 13, 224, 18, 16, 470, 25, 19, 585, '2015-09-03'),
(11, 'Shine!!', 'Shine!!', 'Shine!!', 'All', 174, 'Available by default.', 'Always/Past CD Redeption song.  Unlocked to everyone on 2015-10-02.', 'Shine!!.png', 8, 11, 127, 14, 14, 215, 18, 16, 376, 25, 19, 540, '2015-09-03'),
(12, 'Yumeiro Harmony', '夢色ハーモニー', 'Dream-Colored Harmony', 'All', 178, 'Available by default. Past Event Song.', 'Always/Available from 2015-12-14.', 'Yumeiro Harmony.png', 8, 11, 127, 14, 14, 197, 18, 16, 390, 26, 19, 630, '2015-10-31'),
(13, 'M@GIC☆', 'M@GIC☆', 'M@GIC☆', 'All', 178, 'Available by default.', 'Always/Past CD Redeption song. Unlocked to everyone on 2015-12-28.', 'M@GIC☆.png', 8, 11, 108, 14, 14, 248, 18, 16, 403, 28, 19, 767, '2015-11-25'),
(14, 'Nagareboshi Kiseki', '流れ星キセキ', 'Shooting Star Miracle', 'All', 174, 'Available by default. Past Event Song.', 'Always/Available from 2016-01-09.', 'Nagareboshi Kiseki.png', 8, 11, 96, 14, 14, 150, 17, 16, 378, 26, 19, 596, '2015-12-04'),
(15, 'Snow Wings', 'Snow Wings', 'Snow Wings', 'All', 167, 'Available by default. Past Event Song.', 'Always/Available from 2016-01-28.', 'Snow Wings.png', 8, 11, 121, 14, 14, 202, 17, 16, 383, 26, 19, 682, '2015-12-18'),
(16, 'Susume☆Otome ～jewel parade～', 'ススメ☆オトメ ～jewel parade～', 'Go Forward☆Young Girl ～jewel parade～', 'All', 130, 'Available by default.', 'Weekday/Sunday/Monday/Tuesday/Saturday', 'Susume☆Otome ～jewel parade～.png', 8, 11, 96, 13, 13, 176, 18, 16, 342, 25, 19, 466, '2015-09-03'),
(17, 'Gokigen Party Night', 'ゴキゲンParty Night', 'Merry Party Night', 'All', 175, 'Available by default.', 'Weekday/Sunday/Monday/Tuesday/Saturday', 'Gokigen Party Night.png', 8, 11, 117, 14, 14, 234, 18, 16, 405, 26, 19, 632, '2016-02-16'),
(18, 'Gokigen Party Night', 'ゴキゲンParty Night イベントver', 'Merry Party Night Event ver', 'All', 175, 'Available by default. Past Event Song - Unlocked on 2016-02-16', 'Weekday/Sunday/Monday/Tuesday/Saturday', 'Gokigen Party Night Event ver.png', 8, 11, 117, 14, 14, 234, 18, 16, 405, 26, 19, 632, '2015-12-30'),
(19, 'Tulip', 'Tulip', 'Tulip', 'All', 154, 'Past Event Song - Points Reward', 'Always/Available from 2016-03-20.', 'Tulip.png', 8, 11, 115, 14, 14, 184, 18, 16, 351, 26, 19, 659, '2016-01-31'),
(20, 'Absolute NIne', 'Absolute NIne', 'Absolute NIne', 'All', 175, 'Past Event Song - Points Reward', 'Unavailable - Past Event', 'Absolute NIne.png', 9, 11, 133, 13, 13, 195, 18, 16, 347, 26, 19, 622, '2016-02-29'),
(21, 'S(mile)ING!', 'S(mile)ING!', 'S(mile)ING!', 'Cute', 178, 'Complete Story Episode 3.', 'Always', 'S(mile)ING!.png', 6, 10, 95, 11, 12, 162, 15, 15, 269, 21, 18, 438, '2015-09-03'),
(22, 'Onedari Shall We', 'おねだり Shall We', 'Pleadingly, Shall We', 'Cute', 148, 'Complete Story Episode 6. (Producer Level 10 and Up)', 'Always', 'Onedari Shall We.png', 8, 11, 106, 13, 13, 178, 18, 16, 352, 25, 19, 520, '2015-09-03'),
(23, 'Kazeiro Melody', '風色メロディ', 'Wind-Colored Melody', 'Cute', 90, 'Complete Story Episode 9. (Producer Level 24 and Up)', 'Always', 'Kazeiro Melody.png', 6, 10, 67, 11, 12, 138, 16, 15, 283, 23, 18, 409, '2015-09-03'),
(24, 'Happy×2 Days', 'Happy×2 Days', 'Happy×2 Days', 'Cute', 130, 'Buy for 5000 Money from the room jukebox.', 'Always', 'Happy×2 Days.png', 8, 11, 109, 13, 13, 183, 17, 16, 325, 23, 18, 478, '2015-09-03'),
(25, 'Anzu no Uta', 'あんずのうた', 'Anzu''s Song', 'Cute', 195, 'Complete Story Episode 11. (Producer Level 35 and Up)', 'Always', 'Anzu no Uta.png', 9, 11, 152, 14, 14, 265, 19, 17, 464, 28, 19, 700, '2015-09-03'),
(26, 'ØωØver!!', 'ØωØver!!', 'ØωØver!!', 'Cute', 180, 'Buy for 5000 Money from the room jukebox.', 'Always', 'ØωØver!!.png', 8, 11, 110, 12, 13, 181, 17, 16, 374, 26, 19, 606, '2015-09-03'),
(27, 'Chocolat Tiara', 'ショコラ・ティアラ', 'Chocolat Tiara', 'Cute', 133, 'Complete Story Episode 13. (Producer Level 44 and Up)', 'Always', 'Chocolat Tiara.png', 6, 10, 82, 13, 13, 166, 18, 16, 366, 26, 19, 510, '2015-10-06'),
(28, 'Naked Romance', 'Naked Romance', 'Naked Romance', 'Cute', 168, 'Complete Story Episode 18. (Producer Level 50 and Up)', 'Always', 'Naked Romance.png', 7, 10, 110, 13, 13, 200, 17, 16, 333, 26, 19, 674, '2015-12-28'),
(29, 'Everyday Dream', 'エヴリデイドリーム', 'Everyday Dream', 'Cute', 157, 'Complete Story Episode 21. (Producer Level 50 and Up)', 'Always', 'Everyday Dream.png', 8, 11, 114, 13, 13, 175, 17, 16, 342, 25, 19, 552, '2016-02-08'),
(30, 'Susume☆Otome ～jewel parade～', 'ススメ☆オトメ ～jewel parade～', 'Go Forward☆Young Girl ～jewel parade～', 'Cute', 130, 'Available by default.', 'Weekday/Wednesday', 'Susume☆Otome ～jewel parade～ Cute ver.png', 8, 11, 88, 13, 13, 179, 17, 16, 292, 24, 18, 517, '2015-09-03'),
(31, 'Atashi Ponkotsu Android', 'アタシポンコツアンドロイド', 'I''m a Broken-down Android', 'Cute', 135, 'Available by default. Past Event Song - Unlocked on 2015-10-28', 'Weekday/Sunday/Monday/Tuesday/Wednesday/Saturday', 'Atashi Ponkotsu Android.png', 8, 11, 99, 12, 13, 202, 17, 16, 391, 26, 19, 634, '2015-09-25'),
(32, 'Gokigen Party Night', 'ゴキゲンParty Night', 'Merry Party Night', 'Cute', 175, 'Available by default.', 'Weekday/Wednesday', 'Gokigen Party Night Cute ver.png', 8, 11, 123, 13, 13, 206, 17, 16, 416, 25, 19, 548, '2016-02-17'),
(33, 'Pastel Pink na Koi', 'パステルピンクな恋', 'A Pastel Pink Love', 'Cute', 175, 'Available by default. Past Event Song - Unlocked on 2015-02-27', 'Weekday/Sunday/Monday/Tuesday/Wednesday/Saturday', 'Pastel Pink na Koi.png', 8, 11, 113, 14, 14, 207, 18, 16, 396, 26, 19, 684, '2016-01-20'),
(34, 'Never say Never', 'Never say Never', 'Never say Never', 'Cool', 156, 'Complete Story Episode 4.', 'Always', 'Never say Never.png', 6, 10, 112, 12, 13, 216, 17, 16, 371, 25, 19, 611, '2015-09-03'),
(35, 'Twilight Sky', 'Twilight Sky', 'Twilight Sky', 'Cool', 176, 'Available by default.', 'Always', 'Twilight Sky.png', 7, 10, 122, 13, 13, 192, 18, 16, 425, 24, 18, 582, '2015-09-03'),
(36, 'Tsubomi Yumemiru Rapsodia ～Alma no Michibiki～', '華蕾夢ミル狂詩曲～魂ノ導～', 'Dreaming Flower’s Bud Rhapsody ~Soul’s Guidance~', 'Cool', 184, 'Complete Story Episode 12. (Producer Level 42 and Up)', 'Always', 'Tsubomi Yumemiru Rapsodia ～Alma no Michibiki～.png', 6, 10, 88, 13, 13, 190, 18, 16, 423, 27, 19, 656, '2015-09-03'),
(37, 'Memories', 'Memories', 'Memories', 'Cool', 130, 'Buy for 5000 Money from the room jukebox.', 'Always', 'Memories.png', 6, 10, 74, 11, 12, 135, 16, 15, 267, 22, 18, 412, '2015-09-03'),
(38, '-Engel- Adanasu Tsurugi Hikari no Shirabe', '-LEGNE- 仇なす剣 光の旋律', '-Angel- Vengeful Sword: Melody of Light', 'Cool', 189, 'Buy for 5000 Money from the room jukebox.', 'Always', '-Engel- Adanasu Tsurugi Hikari no Shirabe.png', 9, 11, 116, 14, 14, 224, 19, 17, 417, 28, 19, 630, '2015-09-03'),
(39, 'Trancing Pulse', 'Trancing Pulse', 'Trancing Pulse', 'Cool', 143, 'Available by default.', 'Always/Past CD Redeption song. Unlocked to everyone on 2015-11-17.', 'Trancing Pulse.png', 9, 11, 112, 14, 14, 194, 19, 17, 389, 28, 19, 662, '2015-10-14'),
(40, 'Venus Syndrome', 'ヴィーナスシンドローム', 'Venus Syndrome', 'Cool', 151, 'Complete Story Episode 14. (Producer Level 46 and Up)', 'Always', 'Venus Syndrome.png', 8, 11, 107, 14, 14, 169, 19, 17, 379, 26, 19, 612, '2015-10-28'),
(41, 'You''re stars shine on me', 'You''re stars shine on me', 'Your stars shine on me', 'Cool', 96, 'Complete Story Episode 16. (Producer Level 50 and Up)', 'Always', 'You''re stars shine on me.png', 6, 10, 69, 12, 13, 115, 16, 15, 245, 23, 18, 425, '2015-11-27'),
(42, 'Angel Breeze', 'Angel Breeze', 'Angel Breeze', 'Cool', 150, 'Complete Story Episode 19. (Producer Level 50 and Up)', 'Always', 'Angel Breeze.png', 9, 11, 118, 14, 14, 216, 17, 16, 352, 24, 18, 524, '2016-01-09'),
(43, 'Bright Blue', 'Bright Blue', 'Bright Blue', 'Cool', 105, 'Complete Story Episode 22. (Producer Level 50 and Up)', 'Always', 'Bright Blue.png', 6, 10, 81, 11, 12, 144, 16, 15, 240, 23, 18, 389, '2016-02-26'),
(44, 'Susume☆Otome ～jewel parade～', 'ススメ☆オトメ ～jewel parade～', 'Go Forward☆Young Girl ～jewel parade～', 'Cool', 130, 'Available by default.', 'Weekday/Thursday', 'Susume☆Otome ～jewel parade～ Cool ver.png', 8, 11, 88, 13, 13, 179, 17, 16, 292, 24, 18, 406, '2015-09-03'),
(45, 'Nation Blue', 'Nation Blue', 'Nation Blue', 'Cool', 157, 'Available by default. Past Event Song - Unlocked on 2015-11-28', 'Weekday/Sunday/Monday/Tuesday/Thursday/Saturday', 'Nation Blue.png', 9, 11, 141, 13, 13, 219, 17, 16, 368, 26, 19, 708, '2015-10-19'),
(46, 'Gokigen Party Night', 'ゴキゲンParty Night', 'Merry Party Night', 'Cool', 175, 'Available by default.', 'Weekday/Thursday', 'Gokigen Party Night Cool ver.png', 8, 11, 116, 13, 13, 252, 17, 16, 380, 25, 19, 630, '2016-02-18'),
(47, 'Orgel no Kobako', 'オルゴールの小箱', 'Small Music Box', 'Cool', 93, 'Unavailable - Past Event Song', 'Unavailable - Past Event', 'Orgel no Kobako.png', 6, 10, 84, 11, 12, 145, 16, 15, 321, 25, 19, 531, '2016-02-18'),
(48, 'Mitsuboshi☆☆★', 'ミツボシ☆☆★', 'Three Stars☆☆★', 'Passion', 175, 'Complete Story Episode 5. (Producer Level 6 and Up)', 'Always', 'Mitsuboshi☆☆★.png', 8, 11, 122, 12, 13, 189, 17, 16, 391, 24, 18, 579, '2015-09-03'),
(49, 'DOKIDOKI Rhythm', 'DOKIDOKIリズム', 'Heartbeat Rhythm', 'Passion', 180, 'Complete Story Episode 8. (Producer Level 19 and Up)', 'Always', 'DOKIDOKI Rhythm.png', 8, 11, 101, 13, 13, 192, 17, 16, 380, 24, 18, 569, '2015-09-03'),
(50, 'Marshmallow☆Kiss', 'ましゅまろ☆キッス', 'Marshmallow☆Kiss', 'Passion', 93, 'Complete Story Episode 10. (Producer Level 29 and Up)', 'Always', 'Marshmallow☆Kiss.png', 8, 11, 95, 13, 13, 157, 18, 16, 379, 24, 18, 504, '2015-09-03'),
(51, 'LET''S GO HAPPY!!', 'LET''S GO HAPPY!!', 'LET''S GO HAPPY!!', 'Passion', 192, 'Buy for 5000 Money from the room jukebox.', 'Always', 'LET''S GO HAPPY!!.png', 7, 10, 126, 13, 13, 221, 18, 16, 450, 27, 19, 703, '2015-09-03'),
(52, 'Romantic Now', 'Romantic Now', 'Romantic Now', 'Passion', 170, 'Complete Story Episode 15. (Producer Level 48 and Up)', 'Always', 'Romantic Now.png', 8, 11, 126, 14, 14, 248, 19, 17, 461, 27, 19, 660, '2015-11-09'),
(53, 'TOKIMEKI Escalate', 'ＴＯＫＩＭＥＫＩエスカレート', 'Exciting Escalate', 'Passion', 140, 'Complete Story Episode 17. (Producer Level 50 and Up)', 'Always', 'TOKIMEKI Escalate.png', 9, 11, 140, 14, 14, 240, 19, 17, 494, 28, 19, 800, '2015-12-14'),
(54, 'Apple Pie Princess', 'アップルパイ・プリンセス', 'Apple Pie Princess', 'Passion', 178, 'Complete Story Episode 20. (Producer Level 50 and Up)', 'Always', 'Apple Pie Princess.png', 6, 10, 105, 11, 12, 196, 17, 16, 376, 23, 18, 562, '2016-01-28'),
(55, 'Rockin'' Emotion', 'Rockin'' Emotion', 'Rockin'' Emotion', 'Passion', 177, 'Complete Story Episode 23. (Producer Level 50 and Up)', 'Always', 'Rockin'' Emotion.png', 9, 11, 148, 13, 13, 210, 18, 16, 396, 26, 19, 675, '2016-03-09'),
(56, 'Susume☆Otome ～jewel parade～', 'ススメ☆オトメ ～jewel parade～', 'Go Forward☆Young Girl ～jewel parade～', 'Passion', 130, 'Available by default.', 'Weekday/Friday', 'Susume☆Otome ～jewel parade～ Passion ver.png', 8, 11, 83, 13, 13, 166, 17, 16, 398, 24, 18, 511, '2015-09-03'),
(57, 'Gokigen Party Night', 'ゴキゲンParty Night', 'Merry Party Night', 'Passion', 175, 'Available by default.', 'Weekday/Friday', 'Gokigen Party Night Passion ver.png', 8, 11, 113, 13, 13, 236, 17, 16, 380, 25, 19, 630, '2016-02-19'),
(58, 'Zettai Tokken Shuchou Shimasuu!', '絶対特権主張しますっ！', 'I Absolutely Claim These Privileges~!', 'Passion', 200, 'Available by default. Current Event Song.', 'Limited', 'Zettai Tokken Shuchou Shimasuu!.png', 9, 11, 167, 14, 14, 249, 19, 17, 476, 27, 19, 777, '2016-03-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
