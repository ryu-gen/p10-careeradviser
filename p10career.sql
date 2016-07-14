-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 7 月 14 日 08:20
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `p10career`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_activity`
--

CREATE TABLE IF NOT EXISTS `tb_activity` (
  `aid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sid` varchar(16) NOT NULL,
  `adate` date NOT NULL,
  `company` varchar(32) NOT NULL,
  `jobtype` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `decision` int(11) NOT NULL,
  `detail` text NOT NULL,
  `next` text NOT NULL,
  `memo` text NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aid` (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- テーブルのデータをダンプしています `tb_activity`
--

INSERT INTO `tb_activity` (`aid`, `sid`, `adate`, `company`, `jobtype`, `result`, `decision`, `detail`, `next`, `memo`) VALUES
(1, '12JK145', '2015-10-08', '安川情報システム株式会社', 2, 1, 2, '会社説明を受けた後、筆記試験と個人面接。', '22日に役員面接', '筆記試験は、簡単な数列の問題だった。\r\n面接は、面接官二人だった。'),
(2, '12JK145', '2015-10-22', '安川情報システム株式会社', 2, 3, 1, '役員面接。前日までに「入社志願書」の提出を求められた。\r\n技術面を掘り下げて聞かれた。', '承諾書が届き次第作成。', '非常に緊張した。'),
(3, '12JK097', '2015-06-07', 'ジェネシス株式会社', 4, 1, 2, '会社説明と筆記試験。', '21日に個別面接。', 'SPI試験だった。\r\n対策をあまりしていなかったが、出来た。'),
(4, '12JK045', '2015-04-18', '株式会社岬ホーム', 2, 1, 2, '筆記試験と集団面接。', '5月6日に適性検査と幹部面接。', '筆記試験では、専門試験があった。\r\n内容は簡単なものであった。'),
(5, '12JK045', '2015-05-06', '株式会社岬ホーム', 2, 1, 2, '適性検査と幹部面接。\r\n幹部が三名いて、学内外の活動や性格、技術面について聞かれた。', '20日に社長面接。', '今回は技術面を深く聞かれた。'),
(6, '12JK045', '2015-05-06', '株式会社岬ホーム', 2, 3, 2, '社長面接。\r\n入社してからのやりたいことや、将来像を聞かれた。', 'もう少し活動を続ける。', '社長から様々な話しを聞けて良かった。'),
(7, '12JK097', '2015-06-21', 'ジェネシス株式会社', 4, 2, 2, '個別面接。\r\n聞かれた事に答えることが出来ず、印象が悪かったと思う。', '同じ業界をもう少し受けてみる。', 'もう少し専門知識を深めていきたい。'),
(8, '12JK100', '2015-09-06', '朝倉市役所', 3, 2, 2, '筆記試験。\r\n教養試験と専門試験があった。\r\n非常に難易度が高かった。', '27日に北九州市役所', '今回は問題が難しかったので、復習をしっかりと行いたい。'),
(9, '12JK100', '2015-09-27', '北九州市役所', 3, 1, 2, '筆記試験。\r\n教養試験のみ。\r\n今回は、問題が簡単でケアレスミスに気を付けた。', '10月18日にグループディスカッションと面接', '最近のニュースなどを確認して、対策をしていきたい。'),
(10, '12JK106', '2015-08-30', '九州産業大学　情報科学研究科', 4, 1, 1, '面接。\r\nTOEICの点数など聞かれた。', '卒業研究をしっかりと完成させる。', 'より専門的な知識を身につけたい。'),
(13, '12JK145', '2016-07-07', 'fa', 1, 1, 1, 'ja', 'ks', 'jdsf'),
(14, '12JK145', '2016-07-07', 'sa', 1, 1, 1, 'sa', 'sa', 'sa');

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_advice`
--

CREATE TABLE IF NOT EXISTS `tb_advice` (
  `sid` varchar(16) NOT NULL,
  `vdate` date NOT NULL,
  `content` text NOT NULL,
  `staff_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_advice`
--

INSERT INTO `tb_advice` (`sid`, `vdate`, `content`, `staff_id`) VALUES
('12JK045', '2015-11-17', '体調を崩さないようにして頑張ってください。', 'sei'),
('12JK145', '2015-11-11', '内定おめでとう!', 'sei'),
('', '2016-07-07', 'だ', 'sei'),
('', '2016-07-07', 'だ', 'sei'),
('', '2016-07-07', 'da', 'sei'),
('', '2016-07-07', 'da\r\n', 'sei'),
('<?php echo $sid;', '2016-07-07', 'da', 'sei'),
('<?php echo $sid;', '2016-07-07', 'da', 'sei'),
('12JK145', '2016-07-07', 'da', 'sei'),
('12JK045', '2016-07-12', '谷', 'sei');

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_guidance`
--

CREATE TABLE IF NOT EXISTS `tb_guidance` (
  `gid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gname` varchar(64) NOT NULL,
  `gtime` date NOT NULL,
  `gplace` varchar(64) NOT NULL,
  `gdetail` text NOT NULL,
  PRIMARY KEY (`gid`),
  UNIQUE KEY `gid` (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのデータをダンプしています `tb_guidance`
--

INSERT INTO `tb_guidance` (`gid`, `gname`, `gtime`, `gplace`, `gdetail`) VALUES
(5, 'ガイダンス', '2016-07-12', '12107', 'ガイダンス');

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_jobs`
--

CREATE TABLE IF NOT EXISTS `tb_jobs` (
  `jid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`jid`),
  UNIQUE KEY `jid` (`jid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `tb_jobs`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `tb_lab`
--

CREATE TABLE IF NOT EXISTS `tb_lab` (
  `lbid` varchar(16) NOT NULL,
  `lbname` varchar(16) NOT NULL,
  `study` text NOT NULL,
  `staff-id` varchar(16) NOT NULL,
  `room` varchar(16) NOT NULL,
  PRIMARY KEY (`lbid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_lab`
--

INSERT INTO `tb_lab` (`lbid`, `lbname`, `study`, `staff-id`, `room`) VALUES
('abelab', '安邊研究室', '情報社会における計画技術に関する研究', 'abe', '12518'),
('isidalab', '石田研究室', '電磁界逆散乱解析', 'isida', '12514'),
('seilab', '成研究室', '半構造データ・半永続データ・グラフデータの管理と処理', 'sei', '12523');

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_student`
--

CREATE TABLE IF NOT EXISTS `tb_student` (
  `sid` varchar(16) NOT NULL,
  `uid` varchar(16) NOT NULL,
  `sex` int(11) NOT NULL,
  `stype` int(11) NOT NULL,
  `slab` varchar(16) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_student`
--

INSERT INTO `tb_student` (`sid`, `uid`, `sex`, `stype`, `slab`, `status`) VALUES
('12JK021', 'k12jk021', 1, 1, 'seilab', 4),
('12JK045', 'k12jk045', 2, 1, 'seilab', 3),
('12JK097', 'k12jk097', 1, 1, 'abelab', 2),
('12JK100', 'k12jk100', 1, 1, 'isidalab', 1),
('12JK106', 'k12jk106', 1, 1, 'abelab', 4),
('12JK116', 'k12jk116', 1, 2, 'seilab', 2),
('12JK145', 'k12jk145', 1, 1, 'seilab', 1),
('12JK150', 'k12jk150', 2, 2, 'isidalab', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `uid` varchar(16) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `upass` varchar(16) NOT NULL,
  `urole` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_user`
--

INSERT INTO `tb_user` (`uid`, `uname`, `email`, `tel`, `upass`, `urole`) VALUES
('abe', '安邊智彦', 'abe@gmail.com', '092-673-0110', '0123', 2),
('isida', '石田健五', 'isida@gmail.com', '092-673-0333', '0123', 2),
('k12jk021', '宇良田啓太', 'k12jk021@gmail.com', '090-3323-4432', 'abcd', 1),
('k12jk045', '小山田奈緒美', 'k12jk045@gmail.com', '090-3416-0687', 'abcd', 1),
('k12jk097', '野中健太', 'k12097@gmail.com', '090-6789-9221', 'abcd', 1),
('k12jk100', '畠山昇平', 'k12jk100@gmail.com', '080-5606-0666', 'abcd', 1),
('k12jk106', '福田奨', 'k12jk106@gmail.com', '090-6789-9221', 'abcd', 1),
('k12jk112', 'フィリップス順平', 'k12jk112@gmail.com', '080-3456-0809', 'abcd', 1),
('k12jk145', '米田貴裕', 'k12jk145@gmail.com', '080-5606-0687', 'abcd', 1),
('k12jk150', 'リ・ナ', 'lee@gmail.com', '050-3434-1243', 'abcd', 1),
('muta', '牟田正公', 'muta@gmail.com', '092-673-0121', 'abcd0123', 3),
('sei', '成', 'sei@gmail.com', '092-673-0233', '0123', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_wish`
--

CREATE TABLE IF NOT EXISTS `tb_wish` (
  `sid` varchar(16) NOT NULL,
  `careertype` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_wish`
--

INSERT INTO `tb_wish` (`sid`, `careertype`, `detail`) VALUES
('12JK145', 1, '一般企業と公務員を希望する。'),
('12JK021', 3, '実家の家業を引き継ぐ予定。'),
('12JK097', 1, '一般企業へ就職希望。'),
('12JK045', 1, '一般企業への就職を希望する。'),
('12JK106', 2, '本学、情報科学研究科に進学を希望する。'),
('12JK112', 3, 'アメリカで就職する予定。'),
('12JK150', 3, '中国で就職を希望。\r\n'),
('12JK145', 1, 'kibou ');

-- --------------------------------------------------------

--
-- ビュー用の代替構造 `vw_gakusei`
--
CREATE TABLE IF NOT EXISTS `vw_gakusei` (
`sid` varchar(16)
,`uid` varchar(16)
,`sex` int(11)
,`stype` int(11)
,`slab` varchar(16)
,`status` int(11)
,`sname` varchar(16)
,`email` varchar(32)
,`tel` varchar(16)
,`lbname` varchar(16)
);
-- --------------------------------------------------------

--
-- ビュー用の代替構造 `vw_jogen`
--
CREATE TABLE IF NOT EXISTS `vw_jogen` (
`sid` varchar(16)
,`sname` varchar(16)
,`lbname` varchar(16)
,`vdate` date
,`staff_name` varchar(16)
,`content` text
,`staff_id` varchar(16)
);
-- --------------------------------------------------------

--
-- ビュー用の代替構造 `vw_katudou`
--
CREATE TABLE IF NOT EXISTS `vw_katudou` (
`uid` varchar(16)
,`sid` varchar(16)
,`sname` varchar(16)
,`sex` int(11)
,`slab` varchar(16)
,`lbname` varchar(16)
,`status` int(11)
,`aid` bigint(20) unsigned
,`adate` date
,`company` varchar(32)
,`jobtype` int(11)
,`result` int(11)
,`decision` int(11)
,`detail` text
,`next` text
,`memo` text
,`careertype` int(11)
,`wish` text
);
-- --------------------------------------------------------

--
-- ビュー用の構造 `vw_gakusei`
--
DROP TABLE IF EXISTS `vw_gakusei`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_gakusei` AS select `s`.`sid` AS `sid`,`s`.`uid` AS `uid`,`s`.`sex` AS `sex`,`s`.`stype` AS `stype`,`s`.`slab` AS `slab`,`s`.`status` AS `status`,`u`.`uname` AS `sname`,`u`.`email` AS `email`,`u`.`tel` AS `tel`,`b`.`lbname` AS `lbname` from ((`tb_user` `u` join `tb_student` `s`) join `tb_lab` `b`) where ((`u`.`uid` = `s`.`uid`) and (`s`.`slab` = `b`.`lbid`));

-- --------------------------------------------------------

--
-- ビュー用の構造 `vw_jogen`
--
DROP TABLE IF EXISTS `vw_jogen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_jogen` AS select `g`.`sid` AS `sid`,`g`.`sname` AS `sname`,`g`.`lbname` AS `lbname`,`v`.`vdate` AS `vdate`,`u`.`uname` AS `staff_name`,`v`.`content` AS `content`,`v`.`staff_id` AS `staff_id` from ((`tb_user` `u` join `vw_gakusei` `g`) join `tb_advice` `v`) where ((`g`.`sid` = `v`.`sid`) and (`u`.`uid` = `v`.`staff_id`));

-- --------------------------------------------------------

--
-- ビュー用の構造 `vw_katudou`
--
DROP TABLE IF EXISTS `vw_katudou`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_katudou` AS select distinct `u`.`uid` AS `uid`,`s`.`sid` AS `sid`,`u`.`uname` AS `sname`,`s`.`sex` AS `sex`,`s`.`slab` AS `slab`,`b`.`lbname` AS `lbname`,`s`.`status` AS `status`,`a`.`aid` AS `aid`,`a`.`adate` AS `adate`,`a`.`company` AS `company`,`a`.`jobtype` AS `jobtype`,`a`.`result` AS `result`,`a`.`decision` AS `decision`,`a`.`detail` AS `detail`,`a`.`next` AS `next`,`a`.`memo` AS `memo`,`w`.`careertype` AS `careertype`,`w`.`detail` AS `wish` from ((((`tb_user` `u` join `tb_student` `s`) join `tb_activity` `a`) join `tb_wish` `w`) join `tb_lab` `b`) where ((`u`.`uid` = `s`.`uid`) and (`s`.`sid` = `a`.`sid`) and (`s`.`sid` = `w`.`sid`) and (`b`.`lbid` = `s`.`slab`));
