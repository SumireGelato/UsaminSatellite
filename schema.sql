-- create clauses
-- --------------------------------
create table news (
  id int unsigned not null auto_increment,
  authorId INT UNSIGNED NOT NULL,
  title CHARACTER(255) not null,
  body TEXT not null,
  created DATETIME not null,
  modified DATETIME,
  isPublished BOOLEAN not null,
  constraint news_pk primary key (id));

create table idols (
  id int unsigned not null auto_increment,
  ename varchar(255) not null,
  jname varchar(255) not null,
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
  ename varchar(255) not null,
  jname varchar(255) not null,
  translation varchar(255) not null,
  type varchar(10) not null,
  bpm int not null,
  unlockCon text not null,
  coverArt varchar(255) not null,
  debutlvl int not null,
  debutstam int not null,
  debutnotes int not null,
  reglvl int not null,
  regstam int not null,
  regnotes int not null,
  prolvl int not null,
  prostam int not null,
  pronotes int not null,
  masterlvl int not null,
  masterstam int not null,
  masternotes int not null,
  constraint songs_pk primary key (id));

create table events (
  id int unsigned not null auto_increment,
  category_id int unsigned not null,
  subcategory_id int unsigned not null,
  supplier_id int unsigned not null,
  special_id int unsigned null,
  plu character(10) not null,
  name character(30) not null,
  description text,
  image character(255),
  instock_qty int not null,
  cost_price numeric(15,2) not null,
  retail_price numeric(15,2) not null,
  buyable boolean not null,
  archive boolean not null,
  created datetime not null,
  modified datetime,
  constraint products_pk primary key (id));

create table users (
  id int unsigned not null auto_increment,
  name character(30) not null,
  menu_location int not null,
  archive boolean not null,
  constraint categories_pk primary key (id));

create table cards (
  id int unsigned not null auto_increment,
  category_id int unsigned not null,
  name character(30) not null,
  description text,
  image character(50),
  archive boolean not null,
  constraint subcategories_pk primary key (id));

  commit;

-- referential integrity clauses
-- --------------------------------
alter table subcategories add constraint subcategories_categories_fk
foreign key (category_id)
references categories (id);

alter table customers add constraint customers_users_fk
foreign key (user_id)
references users (id);

alter table users add constraint users_groups_fk
foreign key (group_id)
references groups (id);

alter table orders add constraint customers_orders_fk
foreign key (user_id)
references users (id);