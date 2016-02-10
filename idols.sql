SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO `idols` (`id`, `eName`, `jName`, `age`, `height`, `weight`, `birthday`, `bloodType`, `bwh`, `hobbies`, `writingHand`, `horoscope`, `hometown`, `type`, `cv`, `profilePic`, `puchiPic`) VALUES
(1, 'Uzuki Shimamura', '島村卯月', '17', '159', '45', 'April 24', 'O', '83/59/87', 'Long Phone Calls with friends', 'Right', 'Taurus', 'Tokyo', 'Cute', 'Ayaka Ohashi', 'uzuki1.png', 'uzuki2.png'),
(2, 'Rin Shibuya', '渋谷凜', '15', '165', '44', 'August 10', 'B', '80/56/81', 'Dog Walking', 'Right', 'Leo', 'Tokyo', 'Cool', 'Ayaka Fukuhara', 'rin1.png', 'rin2.png'),
(3, 'Mio Honda', '本田未央', '15', '161', '46', 'December 1', 'B', '84/58/87', 'Shopping', 'Right', 'Sagittarius', 'Chiba', 'Passion', 'Sayuri Hara', 'mio1.png', 'mio2.png'),
(4, 'Airi Totoki', '十時愛梨', '18', '161', '46', 'December 8', 'O', '88/58/88', 'Baking Cakes', 'Right', 'Sagittarius', 'Akita', 'Passion', 'Hitomi Harada', 'airi1.png', 'airi2.png'),
(5, 'Miria Akagi', '赤城みりあ', '11', '140', '36', 'April 14', 'AB', '75/55/78', 'Chatting', 'Left', 'Aries', 'Tokyo', 'Passion', 'Tomoyo Kurosawa', 'miria1.png', 'miria2.png'),
(6, 'Mika Jougasaki', '城ヶ崎美嘉', '17', '162', '43', 'November 12', 'AB', '80/56/82', 'Karaoke', 'Left', 'Scorpio', 'Saitama', 'Passion', 'Haruka Yoshimura', 'mika1.png', 'mika2.png'),
(7, 'Kirari Moroboshi', ' 諸星きらり', '17', '182', '60', 'September 1', 'O', '91/64/86', 'Collecting Cute Things', 'Right', 'Virgo', 'Tokyo', 'Passion', 'Rei Matsuzaki', 'kirari1.png', 'kirari2.png'),
(8, 'Shiki Ichinose', '一ノ瀬志希', '18', '161', '43', 'May 30', 'O', '83/57/82', 'Observation, Suspicious Scientific Experiments, Disappearance ', 'Right', 'Gemini', 'Iwate', 'Cute', 'Kotomi Aihara', 'shiki1.png', 'shiki2.png'),
(9, 'Kanako Mimura', '三村かな子', '17', '153', '52', 'January 6', 'O', '90/65/89', 'Making Sweets', 'Right', 'Capricorn', 'Tokyo', 'Cute', 'Yuka Ohtsubo', 'kanako1.png', 'kanako2.png'),
(10, 'Frederica Miyamoto', '宮本フレデリカ', '19', '164', '46', 'February 14', 'B', '83/57/85', 'Fashion', 'Left', 'Aquarius', 'Paris', 'Cute', 'Asami Takano', 'frederica1.png', 'frederica2.png'),
(11, 'Anzu Futaba', '双葉杏', '17', '139', '30', 'September 2', 'B', '?/?/?', 'None', 'Right', 'Tender Virgo', 'Hokkaido', 'Cute', 'Hiromi Igarashi', 'anzu1.png', 'anzu2.png'),
(12, 'Minami Nitta', '新田美波', '19', '165', '45', 'July 27', 'O', '82/55/85', 'Lacrosse, Qualifying', 'Right', 'Leo', 'Hiroshima', 'Cool', 'Aya Suzaki', 'minami1.png', 'minami2.png'),
(13, 'Ranko Kanzaki', '神崎蘭子 ', '14', '156', '41', 'April 8', 'A', '81/57/80', 'Drawing', 'Right', 'Aries', 'Kumamoto', 'Cool', 'Maaya Uchida', 'ranko1.png', 'ranko2.png'),
(14, 'Karen Hojo', '北条加蓮', '16', '155', '42', 'September 5', 'B', '83/55/81', 'Nail art', 'Right', 'Virgo', 'Tokyo', 'Cool', 'Mai Fuchigami', 'karen1.png', 'karen2.png'),
(15, 'Anastasia', ' ｱﾅｽﾀｼｱ', '15', '165', '43', 'September 19', 'O', '80/54/80', 'House parties, stargazing', 'Both', 'Virgo', 'Hokkaido', 'Cool', 'Sumire Uesaka', 'anastasia1.png', 'anastasia2.png'),
(16, 'Nao Kamiya', '神谷奈緒', '17', '154', '44', 'September 16', 'AB', '83/58/81', 'Watching anime', 'Left', 'Virgo', 'Chiba', 'Cool', 'Eriko Matsui', 'nao1.png', 'nao2.png'),
(17, 'Chieri Ogata', '緒方智絵里', '16', '153', '42', 'June 11', 'A', '79/57/80', 'Collecting four-leaf clovers', 'Right', 'Gemini', 'Mie', 'Cute', 'Naomi Oozora', 'chieri1.png', 'chieri2.png'),
(18, 'Nana Abe', '安部菜々', 'Eternally 17', '146', '40', 'May 15', 'O', '84/57/84', 'Communicating with Planet Usamin', 'Right', 'Taurus', 'Planet Usamin', 'Cute', 'Marie Miyake', 'nana1.png', 'nana2.png'),
(19, 'Miho Kohinata', '小日向美穂', '17', '155', '42', 'December 16', 'O', '82/59/86', 'Basking in the sun', 'Left', 'Sagittarius', 'Kumamoto', 'Cute', 'Minami Tsuda', 'miho1.png', 'miho2.png'),
(20, 'Sae Kobayakawa', '小早川紗枝', '15', '148', '42', 'October 18', 'AB', '78/56/80', 'Traditional Japanese dancing', 'Right', 'Libra', 'Kyoto', 'Cute', 'Rika Tachibana', 'sae1.png', 'sae2.png'),
(21, 'Sachiko Koshimizu', '輿水幸子', '14', '142', '37', 'November 25', 'B', '74/52/75', 'Making copies of study notes', 'Left', 'Sagittarius', 'Yamanashi', 'Cute', 'Ayana Taketatsu', 'sachiko1.png', 'sachiko2.png'),
(22, 'Saori Okuyama', '奥山沙織', '19', '156', '47', 'June 12', 'B', '83/57/81', 'Reading', 'Right', 'Gemini', 'Akita', 'Cute', 'N/A', 'saori1.png', 'saori2.png'),
(23, 'Yukari Mizumoto', '水本ゆかり', '15', '155', '42', 'October 18', 'A', '81/56/82', 'Flute', 'Right', 'Libra', 'Aoyama', 'Cute', 'Akane Fujita', 'yukari1.png', 'yukari2.png'),
(24, 'Yuka Nakano', '中野有香', '18', '149', '40', 'March 23', 'B', '77/57/81', 'Karate', 'Right', 'Aries', 'Kagawa', 'Cute', 'Shino Shimoji', 'yuka1.png', 'yuka2.png'),
(25, 'Noriko Shiina', '椎名法子', '13', '147', '38', 'October 10', 'O', '76/55/79', 'Tasting New Donuts', 'Right', 'Libra', 'Osaka', 'Cute', 'Chiyo Tomaru', 'noriko1.png', 'noriko2.png'),
(26, 'Rina Fujimoto', '藤本里奈', '18', '154', '41', 'October 14', 'A', '77/55/80', 'Riding motorcycles, browsing at convenience stores', 'Right', 'Libra', 'Shonan', 'Cute', 'Mayumi Kaneko', 'rina1.png', 'rina2.png'),
(27, 'Karin Domyoji', '道明寺歌鈴', '17', '155', '43', 'January 1', 'A', '80/55/83', 'Cleaning the temple grounds', 'Right', 'Capricorn', 'Nara', 'Cute', 'Hiyori Nitta', 'karin1.png', 'karin2.png'),
(28, 'Mai Fukuyama', '福山舞', '10', '132', '28', 'January 21', 'O', '64/56/70', 'Unicycling', 'Left', 'Aquarius', 'Hyogo', 'Cute', 'N/A', 'mai1.png', 'mai2.png'),
(29, 'Azuki Momoi', '桃井あずき', '15', '145', '40', 'July 7', 'A', '80/55/78', 'Goldfish Scooping', 'Right', 'Cancer', 'Nagano', 'Cute', 'N/A', 'azuki1.png', 'azuki2.png'),
(30, 'Mayu Sakuma', '佐久間まゆ', '17', '153', '40', 'September 7', 'B', '78/54/80', 'Cooking, Knitting', 'Both', 'Virgo', 'Sendai', 'Cute', 'Yui Makino', 'mayu1.png', 'mayu2.png'),
(31, 'Kyoko Igarashi', '五十嵐響子', '15', '154', '43', 'August 10', 'AB', '81/57/80', 'General Housework', 'Left', 'Leo', 'Tottori', 'Cute', 'Atsumi Tanezaki', 'kyoko1.png', 'kyoko2.png'),
(32, 'Kotoka Saionji', '西園寺琴歌', '17', '156', '46', 'January 23', 'O', '87/57/85', 'Pressing Flowers', 'Right', 'Aquarius', 'Tokyo', 'Cute', 'N/A', 'kotoka1.png', 'kotoka2.png'),
(33, 'Clarice', 'クラリス', '20', '166', '45', 'August 26', 'AB', '80/55/82', 'Volunteering', 'Right', 'Virgo', 'Hyogo', 'Cute', 'N/A', 'clarice1.png', 'clarice2.png'),
(34, 'Chika Yokoyama', '横山千佳', '9', '127', '31', 'April 14', 'A', '60/55/65', 'Pretending to be a magical girl', 'Right', 'Capricorn', 'Miyazaki', 'Cute', 'N/A', 'chika1.png', 'chika2.png'),
(35, 'Shinobu Kudo', '工藤忍', '16', '154', '41', 'March 9', 'A', '78/54/81', 'Collecting Omake', 'Left', 'Pisces', 'Aomori', 'Cute', 'N/A', 'shinobu1.png', 'shinobu2.png'),
(36, 'Hotaru Shiragiku', '白菊ほたる', '13', '156', '42', 'April 19', 'AB', '77/53/79', 'Smile Practice, Idol Lessons', 'Left', 'Aries', 'Tottori', 'Cute', 'N/A', 'hotaru1.png', 'hotaru2.png'),
(37, 'Momoka Sakurai', '櫻井桃華', '12', '145', '39', 'April 8', 'A', '72/53/75', 'Teatime', 'Right', 'Aries', 'Kobe', 'Cute', 'Haruka Terui', 'momoka1.png', 'momoka2.png'),
(38, 'Rena Hyodo', '兵藤レナ', '27', '167', '48', 'October 3', 'O', '92/56/84', 'Playing Cards', 'Left', 'Libra', 'Tokyo', 'Cute', 'N/A', 'rena1.png', 'rena2.png'),
(39, 'Setsuna Imura', '井村雪菜', '17', '163', '48', 'August 27', 'AB', '85/60/88', 'Small collection of make-up', 'Right', 'Virgo', 'Akita', 'Cute', 'N/A', 'setsuna1.png', 'setsuna2.png'),
(40, 'Miyo Harada', '原田美世', '20', '163', '46', 'November 14', 'O', '86/59/85', 'Tinkering with cars and bikes', 'Right', 'Scorpio', 'Ishikawa', 'Cute', 'N/A', 'miyo1.png', 'miyo2.png'),
(41, 'Kana Imai', '今井加奈', '16', '153', '41', 'March 3', 'O', '81/56/79', 'Talking to Friends', 'Right', 'Pisces', 'Kouchi', 'Cute', 'N/A', 'kana1.png', 'kana2.png'),
(42, 'Mirei Hayasaka', '早坂美玲', '14', '147', '39', 'May 9', 'B', '75/54/77', 'Collecting stuffed toys', 'Right', 'Taurus', 'Miyagi', 'Cute', 'N/A', 'mirei1.png', 'mirei2.png'),
(43, 'Atsumi Munakata', '棟方愛海', '14', '151', '41', 'August 1', 'A', '73/56/75', 'Finger Exercises', 'Both', 'Leo', 'Aomori', 'Cute', 'N/A', 'atsumi1.png', 'atsumi2.png'),
(44, 'Riina Tada', '多田李衣菜', '17', '152', '41', 'June 30', 'A', '80/55/81', 'Listening to music', 'Right', 'Cancer', 'Tokyo', 'Cool', 'Ruriko Aoki', 'riina1.png', 'riina2.png'),
(45, 'Kaede Takagaki', '高垣楓', '25', '171', '49', 'June 14', 'AB', '81/57/83', 'Onsen excursions', 'Left', 'Gemini', 'Wakayama', 'Cool', 'Saori Hayami', 'kaede1.png', 'kaede2.png'),
(46, 'Koume Shirasaka', '白坂小梅', '13', '142', '34', 'March 28', 'AB', '65/50/70', 'Watching horror movies, visiting haunted places', 'Left', 'Aries', 'Hyogo', 'Cool', 'Chiyo Ousaki', 'koume1.png', 'koume2.png'),
(47, 'Kanade Hayami', '速水奏', '17', '162', '43', 'July 1', 'O', '86/55/84', 'Watching movies', 'Right', 'Cancer', 'Tokyo', 'Cool', 'Yuuko Iida', 'kanade1.png', 'kanade2.png'),
(48, 'Syuko Shiomi', '塩見周子', '18', '163', '45', 'December 12', 'B', '82/56/81', 'Darts, blood donation', 'Right', 'Sagittarius', 'Kyoto', 'Cool', 'Ru Thing', 'syuko1.png', 'syuko2.png'),
(49, 'Arisu Tachibana', '橘ありす', '12', '141', '34', 'July 31', 'B', '68/52/67', 'Games, reading (mystery)', 'Right', 'Aries', 'Hyogo', 'Cool', 'Amina Satou', 'arisu1.png', 'arisu2.png'),
(50, 'Haruna Kamijo', '上条春菜', '18', '156', '42', 'April 10', 'O', '79/56/80', 'Napping with her cat in the balcony', 'Right', 'Aries', 'Shizuoka', 'Cool', 'Mina Nagajima', 'haruna1.png', 'haruna2.png'),
(51, 'Yukimi Sajo', '佐城雪美', '10', '137', '30', 'September 28', 'AB', '63/47/65', 'Talking to her pet (black cat)', 'Right', 'Libra', 'Kyoto', 'Cool', 'N/A', 'yukimi1.png', 'yukimi2.png'),
(52, 'Chie Sasaki', '佐々木千枝', '11', '139', '33', 'June 7', 'A', '73/49/73', 'Sewing', 'Left', 'Gemini', 'Toyama', 'Cool', 'Asaka Imai', 'chie1.png', 'chie2.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
