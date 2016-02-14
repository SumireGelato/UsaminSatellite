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
  height      VARCHAR(10)   NOT NULL,
  weight      VARCHAR(10)   NOT NULL,
  birthday    VARCHAR(50)   NOT NULL,
  bloodType   VARCHAR(5)    NOT NULL,
  bwh         VARCHAR(10)   NOT NULL,
  hobbies     TEXT          NOT NULL,
  writingHand CHARACTER(10) NOT NULL,
  horoscope   VARCHAR(50)   NOT NULL,
  hometown    VARCHAR(50)   NOT NULL,
  type        VARCHAR(10)   NOT NULL,
  cv          VARCHAR(255)  NOT NULL,
  bio         TEXT,
  profilePic  VARCHAR(255),
  puchiPic    VARCHAR(255),
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
  coverArt    VARCHAR(255),
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
  pic       CHARACTER(255),
  CONSTRAINT events_pk PRIMARY KEY (id)
);

CREATE TABLE users (
  id        INT UNSIGNED NOT NULL AUTO_INCREMENT,
  username  varchar(255) NOT NULL,
  password  varchar(255) NOT NULL,
  role      varchar(20)  NOT NULL,
  created   datetime,
  modified  datetime,
  CONSTRAINT users_pk PRIMARY KEY (id)
);

CREATE TABLE cards (
  id               INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  idol_id          INT UNSIGNED   NOT NULL,
  event_id         INT UNSIGNED   NULL,
  cardNumber       INT            NOT NULL,
  eName            CHARACTER(255) NOT NULL,
  jName            CHARACTER(255) NOT NULL,
  rarity           CHARACTER(5)   NOT NULL,
  type             CHARACTER(10)  NOT NULL,
  limited           BOOLEAN        NOT NULL,
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
  baseArt          CHARACTER(255),
  awkArt           CHARACTER(255),
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
INSERT INTO users (id, username, password, role, created, modified) VALUES
  (1, 'pangster123@gmail.com', '$2a$10$Jzopawbn/OX93Tf8gDCghOHnNodZH/DXQ4l9NDMU6ccvCgbpuwfzO', 'admin', '2016-02-06 08:26:09', '2016-02-06 08:26:09');

INSERT INTO news (id, user_id, title, category, body, created, isPublished) VALUES
  (1, 1, 'Test Post', 'site', '<h1> This is a published test post </h1>', '2015-09-17 15:33:26', TRUE),
  (2, 1, 'Test Post 2', 'game', '<h1> This is a draft test post</h1>', '2015-09-17 15:33:26', TRUE);

INSERT INTO events (id, isCurrent, isCaravan, eName, jName, begin, finish, info, type, t1, t2, t3, t4, t5, t6, t7, pic)
VALUES
  (1, TRUE, TRUE, 'Cinderella Caravan', 'シンデレラキャラバン', '2016-01-13 15:00:00', '2016-01-18 15:00:00',
   'Get Coins, Buy Idols', 'All', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caravan1.jpg'),
  (2, FALSE, FALSE, 'LIVE Groove Dance burst', 'LIVE Groove Dance burst', '2015-12-30 15:00:00', '2016-01-08 20:59',
   'Medley', 'All', 45128, 31182, 27954, 22930, 18874, 3032, 262, 'livegroove1.jpg');

INSERT INTO songs (id, eName, jName, romaji, type, bpm, unlockCon, coverArt, debutLvl, debutStam, debutNotes, regLvl, regStam, regNotes,
                   proLvl, proStam, proNotes, masterLvl, masterStam, masterNotes, dateAdded) VALUES
  (1, 'Please! Cinderella', 'お願い！シンデレラ', 'Onegai! Cinderella', 'All', 175, 'Complete Tutorial',
   'Onegai! Cinderella.jpg',
   5, 10, 46, 10, 12, 205, 15, 15, 341, 20, 18, 477, '2015-9-3'),
  (2, 'Orange Sapphire', 'Orange Sapphire', 'Orange Sapphire', 'Passion', 162, 'Past Event Song', 'Orange Sapphire.jpg',
   8, 11, 116, 13, 13, 214, 17, 16, 411, 26, 19, 719, '2015-12-28');


