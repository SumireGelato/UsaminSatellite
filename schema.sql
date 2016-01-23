-- create clauses
-- --------------------------------
CREATE TABLE news (
  id          INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  user_id     INT UNSIGNED   NOT NULL,
  title       CHARACTER(255) NOT NULL,
  category    CHARACTER(50)  NOT NULL,
  body        TEXT           NOT NULL,
  created     DATETIME       NOT NULL,
  modified    DATETIME,
  isPublished BOOLEAN        NOT NULL,
  CONSTRAINT news_pk PRIMARY KEY (id)
);

CREATE TABLE idols (
  id          INT UNSIGNED  NOT NULL AUTO_INCREMENT,
  eName       VARCHAR(255)  NOT NULL,
  jName       VARCHAR(255)  NOT NULL,
  age         VARCHAR(20)   NOT NULL,
  height      INT           NOT NULL,
  weight      INT           NOT NULL,
  birthday    VARCHAR(50)   NOT NULL,
  bloodType   VARCHAR(5)    NOT NULL,
  bwh         VARCHAR(10)   NOT NULL,
  hobbies     TEXT          NOT NULL,
  writingHand CHARACTER(10) NOT NULL,
  horoscope   VARCHAR(50)   NOT NULL,
  hometown    VARCHAR(50)   NOT NULL,
  type        VARCHAR(10)   NOT NULL,
  cv          VARCHAR(255)  NOT NULL,
  pic1        VARCHAR(255)  NOT NULL,
  pic2        VARCHAR(255),
  CONSTRAINT idols_pk PRIMARY KEY (id)
);

CREATE TABLE songs (
  id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  eName       VARCHAR(255) NOT NULL,
  jName       VARCHAR(255) NOT NULL,
  romaji      VARCHAR(255) NOT NULL,
  type        VARCHAR(10)  NOT NULL,
  bpm         INT          NOT NULL,
  unlockCon   TEXT         NOT NULL,
  coverArt    VARCHAR(255) NOT NULL,
  debutLvl    INT          NOT NULL,
  debutStam   INT          NOT NULL,
  debutNotes  INT          NOT NULL,
  regLvl      INT          NOT NULL,
  regStam     INT          NOT NULL,
  regNotes    INT          NOT NULL,
  proLvl      INT          NOT NULL,
  proStam     INT          NOT NULL,
  proNotes    INT          NOT NULL,
  masterLvl   INT          NOT NULL,
  masterStam  INT          NOT NULL,
  masterNotes INT          NOT NULL,
  dateAdded   DATE         NOT NULL,
  CONSTRAINT songs_pk PRIMARY KEY (id)
);

CREATE TABLE events (
  id        INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  isCurrent BOOLEAN        NOT NULL,
  isCaravan BOOLEAN        NOT NULL,
  eName     CHARACTER(255) NOT NULL,
  jName     CHARACTER(255) NOT NULL,
  begin     DATETIME       NOT NULL,
  finish    DATETIME       NOT NULL,
  info      TEXT           NOT NULL,
  type      CHARACTER(50)  NOT NULL,
  t1        INT,
  t2        INT,
  t3        INT,
  t4        INT,
  t5        INT,
  t6        INT,
  t7        INT,
  pic       CHARACTER(255) NOT NULL,
  CONSTRAINT events_pk PRIMARY KEY (id)
);

CREATE TABLE users (
  id       INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  email    CHARACTER(255) NOT NULL,
  password CHARACTER(255) NOT NULL,
  CONSTRAINT users_pk PRIMARY KEY (id)
);

CREATE TABLE cards (
  id               INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  idol_id          INT UNSIGNED   NOT NULL,
  event_id         INT UNSIGNED,
  cardNumber       INT            NOT NULL,
  eName            CHARACTER(255) NOT NULL,
  jName            CHARACTER(255) NOT NULL,
  rarity           CHARACTER(5)   NOT NULL,
  type             CHARACTER(10)  NOT NULL,
  maxLvl           INT            NOT NULL,
  awkMaxLvl        INT            NOT NULL,
  baseLife         INT            NOT NULL,
  baseVocal        INT            NOT NULL,
  baseDance        INT            NOT NULL,
  baseVisual       INT            NOT NULL,
  baseMaxLife      INT            NOT NULL,
  baseMaxVocal     INT            NOT NULL,
  baseMaxDance     INT            NOT NULL,
  baseMaxVisual    INT            NOT NULL,
  awkBaseLife      INT            NOT NULL,
  awkBaseVocal     INT            NOT NULL,
  awkBaseDance     INT            NOT NULL,
  awkBaseVisual    INT            NOT NULL,
  awkMaxLife       INT            NOT NULL,
  awkMaxVocal      INT            NOT NULL,
  awkMaxDance      INT            NOT NULL,
  awkMaxVisual     INT            NOT NULL,
  centerSkillText  CHARACTER(255) NOT NULL,
  specialSkillType CHARACTER(50)  NOT NULL,
  specialSkillText TEXT           NOT NULL,
  baseArt          CHARACTER(255) NOT NULL,
  awkArt           CHARACTER(255) NOT NULL,
  CONSTRAINT cards_pk PRIMARY KEY (id)
);

COMMIT;

-- referential integrity clauses
-- --------------------------------
ALTER TABLE news ADD CONSTRAINT news_users_fk
FOREIGN KEY (user_id)
REFERENCES users (id);

ALTER TABLE cards ADD CONSTRAINT cards_idols_fk
FOREIGN KEY (idol_id)
REFERENCES idols (id);

ALTER TABLE cards ADD CONSTRAINT cards_events_fk
FOREIGN KEY (event_id)
REFERENCES events (id);


ALTER TABLE `idols` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET utf8
COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `songs` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET utf8
COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `events` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET utf8
COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `cards` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET utf8
COLLATE utf8_general_ci NOT NULL;


-- test data (User -> News -> Idol -> Event -> Card -> Song
-- ---------------------------------
INSERT INTO users (id, email, password) VALUES
  (1, 'pangster123@gmail.com', '$2a$10$j2vlpErMLsUgkCGIPv.VKO8k3T3Fa5GI4GpM01WF3sBLwsnzw2HOq');

INSERT INTO news (id, user_id, title, category, body, created, isPublished) VALUES
  (1, 1, 'Test Post', 'site', '<h1> This is a published test post </h1>', '2015-09-17 15:33:26', TRUE),
  (2, 1, 'Test Post 2', 'game', '<h1> This is a draft test post</h1>', '2015-09-17 15:33:26', TRUE);

INSERT INTO idols (id, eName, jName, age, height, weight, birthday, bloodType, bwh, hobbies, writingHand, horoscope, hometown, type, cv, pic1)
VALUES
  (1, 'Uzuki Shimamura', '島村卯月', '17', 159, 45, 'April 24', 'O', '83/59/87', 'Long Phone Calls with friends', 'Right',
   'Taurus', 'Tokyo', 'Cute', 'Ayaka Ohashi', 'uzuki.png'),
  (2, 'Rin Shibuya', '渋谷凜', '15', 165, 44, 'August 10', 'B', '80/56/81', 'Dog Walking', 'Right', 'Leo', 'Tokyo', 'Cool',
   'Ayaka Fukuhara', 'rin.png'),
  (3, 'Mio Honda', '本田未央', 15, 161, 46, 'December 1', 'B', '84/58/87', 'Shopping', 'Right', 'Sagittarius', 'Chiba',
   'Passion',
   'Sayuri Hara', 'mio.png');

INSERT INTO events (id, isCurrent, isCaravan, eName, jName, begin, finish, info, type, t1, t2, t3, t4, t5, t6, t7, pic)
VALUES
  (1, TRUE, TRUE, 'Cinderella Caravan', 'シンデレラキャラバン', '2016-01-13 15:00:00', '2016-01-18 15:00:00',
   'Get Coins, Buy Idols', 'All', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caravan1.jpg'),
  (2, FALSE, FALSE, 'LIVE Groove Dance burst', 'LIVE Groove Dance burst', '2015-12-30 15:00:00', '2016-01-08 20:59',
   'Medley', 'All', 45128, 31182, 27954, 22930, 18874, 3032, 262, 'livegroove12.jpg');

INSERT INTO cards (id, idol_id, event_id, cardNumber, eName, jName, rarity, type, maxLvl, awkMaxLvl, baseLife, baseVocal, baseDance, baseVisual, baseMaxLife,
                   baseMaxVocal, baseMaxDance, baseMaxVisual, awkBaseLife, awkBaseVocal, awkBaseDance, awkBaseVisual, awkMaxLife, awkMaxVocal,
                   awkMaxDance, awkMaxVisual, centerSkillText, specialSkillType, specialSkillText, baseArt, awkArt)
VALUES
  (1, 1, NULL, 43, '"Stage of Magic" Uzuki Shimamura', '［ステージオブマジック］島村卯月', 'SSR', 'Cute', 80, 90, 40, 2028, 2006, 2001,
   42, 4436, 4387, 4377, 42, 2662, 2633, 2627, 44, 5349, 5289, 5278,
   'All Appeals of all Cute Idols up 30%', 'Perfect Lock',
   'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 9 seconds for a very short time.',
   '43.png', '44.png'),
  (2, 2, NULL, 99, '"Stage of Magic" Rin Shibuya', '［ステージオブマジック］渋谷凛', 'SSR', 'Cool', 80, 90, 40, 2001, 2028, 2006, 42,
   4377, 4436, 4387, 42, 2627, 2662, 2633, 44, 5278, 5349, 5289,
   'All Appeals of all Cool Idols up 30%', 'Perfect Lock',
   'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 12 seconds for a short time.',
   '99.png', '100.png'),
  (3, 1, NULL, 1, 'Uzuki Shimamura', '島村卯月', 'R', 'Cute', 40, 50, 25, 1020, 1248, 1965, 27, 1815, 2221, 3497, 27, 1280,
   1566, 2465, 29, 2257, 2761, 4347,
   'Visual Appeal of all Cute idols up 30%', 'Score Boost',
   'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '1.png', '2.png'),
  (4, 2, NULL, 57, 'Rin Shibuya', '渋谷凜', 'R', 'Cool', 40, 50, 25, 1936, 1044, 1263, 27, 3444, 1857, 2247, 27, 2428,
   1309, 1584, 29, 4281, 2309, 2793,
   'Vocal Appeal of all Cool idols up 30%', 'Score Boost',
   'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '57.png', '58.png'),
  (5, 3, NULL, 115, 'Mio Honda', '本田未央', 'R', 'Passion', 40, 50, 25, 1058, 1918, 1272, 27, 1882, 3413, 2263, 27, 1327,
   2406, 1595, 29, 2340, 4243, 2813,
   'Dance Appeal of all Passion idols up 30%', 'Score Boost',
   'PERFECT score 10% up, low probability of triggering every 6 seconds for a short time.', '115.png', '116.png'),
  (6, 3, NULL, 159, '"Stage of Magic" Mio Honda', '［ステージオブマジック］本田未央', 'SSR', 'Passion', 80, 90, 40, 2006, 2001, 2028,
   42, 4387, 4377, 4436, 42, 2633, 2627, 2662, 44, 5289, 5278, 5349,
   'All Appeals of all Passion Idols up 30%', 'Perfect Lock',
   'GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 15 seconds for a considerable length of time.',
   '159.png', '160.png'),
  (7, 3, 2, 325, '"Gokigen Party Night" Mio Honda', '［ゴキゲンParty Night］本田未央', 'SR', 'Passion', 60, 70, 35, 2481, 1272,
   1563, 37, 5010, 2570, 3157, 37, 3198, 1641, 2015, 39, 6115, 3137, 3854,
   'Vocal Appeal of all idols up 48%', 'Combo Bonus',
   'COMBO pt bonus 12% up, medium probability of triggering every 6 seconds for some time.', '325.png', '326.png');

INSERT INTO songs (id, eName, jName, romaji, type, bpm, unlockCon, coverArt, debutLvl, debutStam, debutNotes, regLvl, regStam, regNotes,
                   proLvl, proStam, proNotes, masterLvl, masterStam, masterNotes, dateAdded) VALUES
  (1, 'Please! Cinderella', 'お願い！シンデレラ', 'Onegai! Cinderella', 'All', 175, 'Complete Tutorial',
   'Onegai! Cinderella.jpg',
   5, 10, 46, 10, 12, 205, 15, 15, 341, 20, 18, 477, '2015-9-3'),
  (2, 'Orange Sapphire', 'Orange Sapphire', 'Orange Sapphire', 'Passion', 162, 'Past Event Song', 'Orange Sapphire.jpg',
   8, 11, 116, 13, 13, 214, 17, 16, 411, 26, 19, 719, '2015-12-28');


