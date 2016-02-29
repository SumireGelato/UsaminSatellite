SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `idol_id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(11) NOT NULL,
  `eName` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `jName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rarity` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `limited` tinyint(1) NOT NULL,
  `baseLife` int(11) NOT NULL,
  `baseVocal` int(11) NOT NULL,
  `baseDance` int(11) NOT NULL,
  `baseVisual` int(11) NOT NULL,
  `baseMaxLife` int(11) NOT NULL,
  `baseMaxVocal` int(11) NOT NULL,
  `baseMaxDance` int(11) NOT NULL,
  `baseMaxVisual` int(11) NOT NULL,
  `awkBaseLife` int(11) NOT NULL,
  `awkBaseVocal` int(11) NOT NULL,
  `awkBaseDance` int(11) NOT NULL,
  `awkBaseVisual` int(11) NOT NULL,
  `awkMaxLife` int(11) NOT NULL,
  `awkMaxVocal` int(11) NOT NULL,
  `awkMaxDance` int(11) NOT NULL,
  `awkMaxVisual` int(11) NOT NULL,
  `centerSkillText` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialSkillType` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `specialSkillText` text COLLATE utf8_unicode_ci NOT NULL,
  `dateAdded` date NOT NULL,
  `baseArt` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `awkArt` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `baseIconArt` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `awkIconArt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `eName` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `jName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `begin` datetime NOT NULL,
  `finish` datetime NOT NULL,
  `type` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `t1` int(11) DEFAULT NULL,
  `t2` int(11) DEFAULT NULL,
  `t3` int(11) DEFAULT NULL,
  `t4` int(11) DEFAULT NULL,
  `t5` int(11) DEFAULT NULL,
  `t6` int(11) DEFAULT NULL,
  `t7` int(11) DEFAULT NULL,
  `pic` char(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `idols` (
  `id` int(10) UNSIGNED NOT NULL,
  `eName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bloodType` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `bwh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hobbies` text COLLATE utf8_unicode_ci NOT NULL,
  `writingHand` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `horoscope` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hometown` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `profilePic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `puchiPic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `isPublished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news` (`id`, `user_id`, `title`, `category`, `body`, `created`, `modified`, `isPublished`) VALUES
(1, 1, 'Test Post', 'site', '<h1> This is a published test post </h1>', '2015-09-17 15:33:26', NULL, 1),
(2, 1, 'Test Post 2', 'game', '<h1> This is a draft test post</h1>', '2015-09-17 15:33:26', NULL, 1);

CREATE TABLE `songs` (
  `id` int(10) UNSIGNED NOT NULL,
  `eName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `romaji` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bpm` int(11) NOT NULL,
  `unlockCon` text COLLATE utf8_unicode_ci NOT NULL,
  `coverArt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debutLvl` int(11) NOT NULL,
  `debutStam` int(11) NOT NULL,
  `debutNotes` int(11) NOT NULL,
  `regLvl` int(11) NOT NULL,
  `regStam` int(11) NOT NULL,
  `regNotes` int(11) NOT NULL,
  `proLvl` int(11) NOT NULL,
  `proStam` int(11) NOT NULL,
  `proNotes` int(11) NOT NULL,
  `masterLvl` int(11) NOT NULL,
  `masterStam` int(11) NOT NULL,
  `masterNotes` int(11) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `songs` (`id`, `eName`, `jName`, `romaji`, `type`, `bpm`, `unlockCon`, `coverArt`, `debutLvl`, `debutStam`, `debutNotes`, `regLvl`, `regStam`, `regNotes`, `proLvl`, `proStam`, `proNotes`, `masterLvl`, `masterStam`, `masterNotes`, `dateAdded`) VALUES
(1, 'Please! Cinderella', 'お願い！シンデレラ', 'Onegai! Cinderella', 'All', 175, 'Complete Tutorial', 'Onegai! Cinderella.jpg', 5, 10, 46, 10, 12, 205, 15, 15, 341, 20, 18, 477, '2015-09-03'),
(2, 'Orange Sapphire', 'Orange Sapphire', 'Orange Sapphire', 'Passion', 162, 'Past Event Song', 'Orange Sapphire.jpg', 8, 11, 116, 13, 13, 214, 17, 16, 411, 26, 19, 719, '2015-12-28');

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'pangster123@gmail.com', '$2a$10$Jzopawbn/OX93Tf8gDCghOHnNodZH/DXQ4l9NDMU6ccvCgbpuwfzO', 'admin', '2016-02-06 08:26:09', '2016-02-06 08:26:09');


ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_idols_fk` (`idol_id`),
  ADD KEY `cards_events_fk` (`event_id`);

ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `idols`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_users_fk` (`user_id`);

ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
ALTER TABLE `idols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `songs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `cards`
  ADD CONSTRAINT `cards_events_fk` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `cards_idols_fk` FOREIGN KEY (`idol_id`) REFERENCES `idols` (`id`);

ALTER TABLE `news`
  ADD CONSTRAINT `news_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
