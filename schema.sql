-- create clauses
-- --------------------------------
CREATE TABLE news (
  id          INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  author_id   INT UNSIGNED   NOT NULL,
  title       CHARACTER(255) NOT NULL,
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
  centerSkill      CHARACTER(50)  NOT NULL,
  specialSkillName CHARACTER(50)  NOT NULL,
  specialSkillText CHARACTER(255) NOT NULL,
  specialSkillType CHARACTER(50)  NOT NULL,
  baseArt          CHARACTER(255) NOT NULL,
  awkArt           CHARACTER(255) NOT NULL,
  CONSTRAINT cards_pk PRIMARY KEY (id)
);

COMMIT;

-- referential integrity clauses
-- --------------------------------
ALTER TABLE news ADD CONSTRAINT news_users_fk
FOREIGN KEY (author_id)
REFERENCES users (id);

ALTER TABLE cards ADD CONSTRAINT cards_idols_fk
FOREIGN KEY (idol_id)
REFERENCES idols (id);

ALTER TABLE cards ADD CONSTRAINT cards_events_fk
FOREIGN KEY (event_id)
REFERENCES events (id);


ALTER TABLE `idols` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET eucjpms
COLLATE eucjpms_japanese_ci NOT NULL;
ALTER TABLE `songs` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET eucjpms
COLLATE eucjpms_japanese_ci NOT NULL;
ALTER TABLE `events` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET eucjpms
COLLATE eucjpms_japanese_ci NOT NULL;
ALTER TABLE `cards` CHANGE `jName` `jName` VARCHAR(255)
CHARACTER SET eucjpms
COLLATE eucjpms_japanese_ci NOT NULL;


-- test data (User -> News -> Idol -> Event -> Card -> Song
-- ---------------------------------
INSERT INTO users (id, email, password) VALUES
  (1, 'pangster123@gmail.com', '$2a$10$j2vlpErMLsUgkCGIPv.VKO8k3T3Fa5GI4GpM01WF3sBLwsnzw2HOq');

INSERT INTO news (id, author_id, title, body, created, isPublished) VALUES
  (1, 1, 'Test Post', '<h1> This is a published test post </h1>', '2015-09-17 15:33:26', TRUE),
  (2, 1, 'Test Post 2', '<h1> This is a draft test post</h1>', '2015-09-17 15:33:26', FALSE);

INSERT INTO idols (id, eName, jName, age, height, weight, birthday, bloodType, bwh, hobbies, writingHand, horoscope, hometown, type, cv, pic1)
VALUES
  (1, 'Uzuki Shimamura', '島村卯月', '17', 159, 45, 'April 24', 'O', '83/59/87', 'Long Phone Calls with friends', 'Right',
   'Taurus', 'Tokyo', 'Cute', 'Ayaka Ohashi', ' '),
  (2, 'Rin Shibuya', '渋谷凜', '15', 165, 44, 'August 10', 'B', '80/56/81', 'Dog Walking', 'Right', 'Leo', 'Tokyo', 'Cool',
   'Ayaka Fukuhara', ' ');

INSERT INTO events (id, isCurrent, isCaravan, eName, jName, begin, finish, info, t1, t2, t3, t4, t5, t6, t7, pic) VALUES
  (1, TRUE, TRUE, 'Cinderellla Caravan', 'シンデレラキャラバン', '2016-01-13 15:00:00', '2016-01-18 15:00:00',
   'Get Coins, Buy Idols', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
  (2, FALSE, FALSE, 'LIVE Groove Dance burst', 'LIVE Groove Dance burst', '2015-12-30 15:00:00', '2016-01-08 20:59',
   'Medley', 45128, 31182, 27954, 22930, 18874, 3032, 262, ' ');

INSERT INTO cards (id, idol_id, event_id, eName, jName, rarity, type, maxLvl, awkMaxLvl, baseLife, baseVocal, baseDance, baseVisual, baseMaxLife, baseMaxVocal, baseMaxDance, baseMaxVisual, awkBaseLife, awkBaseVocal, awkBaseDance, awkBaseVisual, awkMaxLife, awkMaxVocal, awkMaxDance, awkMaxVisual, centerSkill, specialSkillName, specialSkillText, specialSkillType, baseArt, awkArt)
VALUES
  (1,1,NULL, );


