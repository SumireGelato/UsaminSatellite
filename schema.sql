-- create clauses
-- --------------------------------
create table news (
  id int unsigned not null auto_increment,
  author_id INT UNSIGNED NOT NULL,
  title CHARACTER(255) not null,
  body TEXT not null,
  created DATETIME not null,
  modified DATETIME,
  isPublished BOOLEAN not null,
  constraint news_pk primary key (id));

create table idols (
  id int unsigned not null auto_increment,
  eName varchar(255) not null,
  jName varchar(255) not null,
  age varchar(20) not null,
  height INT not null,
  weight INT not null,
  birthday varchar(50) not null,
  bloodType varchar(5) not null,
  bwh varchar(10) not null,
  hobbies TEXT not null,
  writingHand CHARACTER(10) not null,
  horoscope varchar(50) not null,
  hometown varchar(50) not null,
  type varchar(10) not null,
  cv varchar(255) not null,
  pic1 varchar(255) not null,
  pic2 VARCHAR(255),
  constraint idols_pk primary key (id));

create table songs (
  id int unsigned not null auto_increment,
  eName varchar(255) not null,
  jName varchar(255) not null,
  type varchar(10) not null,
  bpm int not null,
  unlockCon text not null,
  coverArt varchar(255) not null,
  debutLvl int not null,
  debutStam int not null,
  debutNotes int not null,
  regLvl int not null,
  regStam int not null,
  regNotes int not null,
  proLvl int not null,
  proStam int not null,
  proNotes int not null,
  masterLvl int not null,
  masterStam int not null,
  masterNotes int not null,
  constraint songs_pk primary key (id));

create table events (
  id int unsigned not null auto_increment,
  isCurrent BOOLEAN not null,
  eName CHARACTER(255) not null,
  jName CHARACTER(255) not null,
  begin DATETIME NOT NULL,
  finish DATETIME not null,
  info TEXT not null,
  t1 INT,
  t2 INT,
  t3 int,
  t4 INT,
  t5 INT,
  t6 INT,
  t7 INT,
  pic CHARACTER(255) not null,
  constraint events_pk primary key (id));

create table users (
  id int unsigned not null auto_increment,
  email character(255) not null,
  password CHARACTER(255) not null,
  constraint users_pk primary key (id));

create table cards (
  id int unsigned not null auto_increment,
  idol_id int unsigned not null,
  event_id int UNSIGNED NOT NULL,
  eName character(255) not null,
  jName character(255) not null,
  rarity CHARACTER(5) NOT NULL,
  type character(10) NOT NULL,
  maxLvl int not null,
  awkMaxLvl int not null,
  baseLife int not null,
  baseVocal int not null,
  baseDance int not null,
  baseVisual int not null,
  baseMaxLife int not null,
  baseMaxVocal int not null,
  baseMaxDance int not null,
  baseMaxVisual int not null,
  awkBaseLife int not null,
  awkBaseVocal int not null,
  awkBaseDance int not null,
  awkBaseVisual int not null,
  awkMaxLife int not null,
  awkMaxVocal int not null,
  awkMaxDance int not null,
  awkMaxVisual int not null,
  centerSkill CHARACTER(50) NOT NULL,
  specialSkillName CHARACTER(50) NOT NULL,
  specialSkillText CHARACTER(255) NOT NULL,
  specialSkillType CHARACTER(50) NOT NULL,
  baseArt CHARACTER(255) NOT NULL,
  awkArt CHARACTER(255) NOT NULL,
  constraint cards_pk primary key (id));

  commit;

-- referential integrity clauses
-- --------------------------------
alter table news add constraint news_users_fk
foreign key (author_id)
references users (id);

alter table cards add constraint cards_idols_fk
foreign key (idol_id)
references idols (id);

alter table cards add constraint cards_events_fk
foreign key (event_id)
references events (id);

-- test data
-- ---------------------------------
