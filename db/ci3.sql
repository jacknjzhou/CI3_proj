-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-12-25 07:58:21
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci3`
--

-- --------------------------------------------------------

--
-- 表的结构 `host_init_step_info`
--

CREATE TABLE IF NOT EXISTS `host_init_step_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `dirName` varchar(32) NOT NULL,
  `package` varchar(128) NOT NULL,
  `seq` int(11) NOT NULL,
  `callback` tinyint(2) NOT NULL DEFAULT '1',
  `callee` varchar(32) NOT NULL DEFAULT 'adamplugin',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `operator` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `step` (`step`),
  UNIQUE KEY `seq` (`seq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='?????????' AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `host_init_step_info`
--

INSERT INTO `host_init_step_info` (`id`, `step`, `name`, `dirName`, `package`, `seq`, `callback`, `callee`, `createTime`, `operator`) VALUES
(1, 'checkenv', '??????', 'qcloud', 'check_init_env.sh', 1, 1, 'script', '2015-03-04 01:04:09', 'alawnzhou'),
(2, 'kernel', '????', 'qcloud', 'install_kernel.sh', 3, 1, 'script', '2015-03-04 01:04:53', 'alawnzhou'),
(3, 'bridge', '??Bridge', 'qcloud', 'create_bridge.sh', 4, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(4, 'reboot', '??', 'qcloud', 'reboot.sh', 5, 0, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(5, 'vg', '??VG', 'qcloud', 'create_vg.sh', 6, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(6, 'dns', '??DNS', 'qcloud', 'config_dns.sh', 7, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(7, 'ntp', '??NTP', 'qcloud', 'config_ntp.sh', 8, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(8, 'env', '??????', 'qcloud', 'config_env.sh', 9, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(9, 'adamplugin', '??Adam', 'qcloud', 'install_adamplugin.sh', 10, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(10, 'cbs', '??CBS', 'qcloud', 'install.sh', 11, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(11, 'dfw', '??DFW', 'qcloud', 'install_dfw.sh', 12, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(12, 'tgw', '??TGW', 'qcloud', 'install_tgw.sh', 13, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(13, 'hdfs', '??HDFS', 'qcloud', 'install_hdfs.sh', 14, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(14, 'psutil', '??psutil', 'qcloud', 'install_psuitl.sh', 15, 1, 'adamplugin', '2015-03-04 01:49:08', 'alawnzhou'),
(15, 'password', '????', 'qcloud', 'change_passwd.sh', 26, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(16, 'cacheimg', '????', 'qcloud', 'down_hotimg.sh', 25, 1, 'script', '2015-03-04 01:49:08', 'alawnzhou'),
(19, 'vt', '??VT', 'qcloud', 'check_vt.sh', 2, 1, 'adamplugin', '2015-03-09 00:13:44', ''),
(20, 'isolate', '??????', 'qcloud', 'install_isolate.sh', 18, 1, 'script', '2015-03-10 09:45:38', ''),
(22, 'tmpagent', '??TMP Agent', 'qcloud', 'install_agenttools.sh', 20, 1, 'adamplugin', '2015-03-10 09:46:27', ''),
(23, 'iptables', '??Iptables', 'qcloud', 'clear_iptables.sh', 21, 1, 'script', '2015-03-19 03:12:11', ''),
(24, 'vpcagent', 'vpcagent', 'qcloud', 'install.sh', 27, 1, 'script', '2015-03-19 03:12:11', ''),
(26, 'vpcko', 'vpcko', 'qcloud', 'install.sh', 28, 1, 'script', '2015-03-19 03:12:11', ''),
(27, 'checkenv-2', 'KVM2.0??????', 'kvm20', 'check_init_env.sh', 51, 1, 'script', '2015-03-03 17:04:09', 'alawnzhou'),
(28, 'kernel-2', 'KVM2.0????', 'kvm20', 'install_kernel.sh', 53, 1, 'script', '2015-03-03 17:04:53', 'alawnzhou'),
(29, 'bridge-2', 'KVM2.0??bridge', 'kvm20', 'create_bridge.sh', 54, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(30, 'reboot-2', 'KVM2.0??', 'kvm20', 'reboot.sh', 55, 0, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(31, 'vg-2', 'KVM2.0??VG', 'kvm20', 'create_vg.sh', 56, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(32, 'dns-2', 'KVM2.0??DNS', 'kvm20', 'config_dns.sh', 57, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(33, 'ntp-2', 'KVM2.0??NTP', 'kvm20', 'config_ntp.sh', 58, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(34, 'env-2', 'KVM2.0??????', 'kvm20', 'config_env.sh', 59, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(35, 'adamplugin-2', 'KVM2.0??Adamplugin', 'kvm20', 'install_adamplugin.sh', 60, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(36, 'cbs-2', 'KVM2.0??CBS', 'kvm20', 'install.sh', 61, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(37, 'dfw-2', 'KVM2.0??DFW', 'kvm20', 'install.sh', 62, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(38, 'tgw-2', 'KVM2.0??TGW', 'kvm20', 'install.sh', 63, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(39, 'hdfs-2', 'KVM2.0??HDFS', 'kvm20', 'install.sh', 64, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(40, 'psutil-2', 'KVM2.0??psutil', 'kvm20', 'install_psuitl.sh', 65, 1, 'adamplugin', '2015-03-03 17:49:08', 'alawnzhou'),
(41, 'password-2', 'KVM2.0??????', 'kvm20', 'change_passwd.sh', 80, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(42, 'cacheimg-2', 'KVM2.0????', 'kvm20', 'install.sh', 67, 1, 'script', '2015-03-03 17:49:08', 'alawnzhou'),
(43, 'vt-2', 'KVM2.0??VT', 'kvm20', 'install.sh', 52, 1, 'adamplugin', '2015-03-08 16:13:44', ''),
(44, 'isolate-2', 'KVM2.0??IO????', 'kvm20', 'install_isolate.sh', 66, 1, 'script', '2015-03-10 01:45:38', ''),
(45, 'tmpagent-2', 'KVM2.0????agent', 'kvm20', 'install_agenttools.sh', 70, 1, 'adamplugin', '2015-03-10 01:46:27', ''),
(46, 'iptables-2', 'KVM2.0??iptables', 'kvm20', 'clear_iptables.sh', 71, 1, '', '2015-03-18 19:12:11', ''),
(47, 'tnet_agent', 'KVM2.0-tnet_agent', 'kvm20', 'install.sh', 72, 1, '', '2015-03-18 19:12:11', ''),
(48, 'hextor', 'KVM2.0-hextor', 'kvm20', 'install.sh', 73, 1, '', '2015-03-18 19:12:11', ''),
(49, 'matrixscan', 'KVM2.0-matrixscan', 'kvm20', 'install.sh', 74, 1, '', '2015-03-18 19:12:11', ''),
(50, 'nbd-qcloud', 'KVM2.0-nbd-qcloud', 'kvm20', 'install.sh', 75, 1, '', '2015-03-18 19:12:11', ''),
(51, 'migrate_shell', 'KVM2.0-migrate_shell', 'kvm20', 'install.sh', 76, 1, '', '2015-03-18 19:12:11', ''),
(52, 'libvirt_agent', 'KVM2.0-libvirt_agent', 'kvm20', 'install.sh', 77, 1, '', '2015-03-18 19:12:11', '');

-- --------------------------------------------------------

--
-- 表的结构 `host_operator`
--

CREATE TABLE IF NOT EXISTS `host_operator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rtxName` varchar(64) NOT NULL,
  `pool` varchar(32) NOT NULL DEFAULT 'qcloud',
  `flag` tinyint(2) NOT NULL DEFAULT '1',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='?????' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `host_operator`
--

INSERT INTO `host_operator` (`id`, `rtxName`, `pool`, `flag`, `updateTime`) VALUES
(1, 'qiwu', 'qcloud', 1, '2015-03-09 18:17:17'),
(2, 'levychang', 'qcloud', 1, '2015-03-09 18:17:45'),
(6, 'jeromefu', 'qcloud', 1, '2015-03-09 18:19:51'),
(7, 'xiaobinshen', 'qcloud', 1, '2015-03-09 18:19:51');

-- --------------------------------------------------------

--
-- 表的结构 `host_plugin_gray_info`
--

CREATE TABLE IF NOT EXISTS `host_plugin_gray_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pluginName` varchar(128) NOT NULL,
  `pluginVersion` int(11) NOT NULL,
  `step` varchar(128) NOT NULL,
  `area` varchar(32) NOT NULL,
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `operator` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pluginName_2` (`pluginName`,`step`,`area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `host_plugin_gray_info`
--

INSERT INTO `host_plugin_gray_info` (`id`, `pluginName`, `pluginVersion`, `step`, `area`, `updateTime`, `operator`) VALUES
(6, 'tgw-qcloud', 17, 'tgw', 'gz', '2015-03-19 18:54:22', ''),
(7, 'tgw-kvm-qcloud', 9, 'tgw', 'sh', '2015-03-19 18:54:22', ''),
(8, 'tgw-qcloud', 8, 'tgw', 'hk', '2015-03-19 18:54:22', ''),
(18, 'tgw-qcloud', 18, 'tgw-2', 'gz', '2015-03-19 10:54:22', ''),
(19, 'tgw-qcloud', 1, 'tgw-2', 'sh', '2015-03-19 10:54:22', ''),
(20, 'tgw-qcloud', 9, 'tgw-2', 'hk', '2015-03-19 10:54:22', ''),
(24, 'tnet_agent', 0, 'tnet_agent', 'hk', '2015-03-19 10:54:22', ''),
(25, 'tnet_agent', 0, 'tnet_agent', 'gz', '2015-03-19 10:54:22', ''),
(26, 'tnet_agent', 0, 'tnet_agent', 'sh', '2015-03-19 10:54:22', ''),
(27, 'tnet_agent', 0, 'tnet_agent', 'bm', '2015-03-19 10:54:22', ''),
(28, 'hextor', 0, 'hextor', 'bm', '2015-03-19 10:54:22', ''),
(29, 'hextor', 0, 'hextor', 'gz', '2015-03-19 10:54:22', ''),
(30, 'hextor', 0, 'hextor', 'sh', '2015-03-19 10:54:22', ''),
(31, 'hextor', 0, 'hextor', 'hk', '2015-03-19 10:54:22', ''),
(32, 'matrixscan', 0, 'matrixscan', 'hk', '2015-03-19 10:54:22', ''),
(33, 'matrixscan', 0, 'matrixscan', 'gz', '2015-03-19 10:54:22', ''),
(34, 'matrixscan', 0, 'matrixscan', 'sh', '2015-03-19 10:54:22', ''),
(35, 'matrixscan', 0, 'matrixscan', 'bm', '2015-03-19 10:54:22', ''),
(36, 'nbd-qcloud', 0, 'nbd-qcloud', 'bm', '2015-03-19 10:54:22', ''),
(37, 'nbd-qcloud', 0, 'nbd-qcloud', 'gz', '2015-03-19 10:54:22', ''),
(38, 'nbd-qcloud', 0, 'nbd-qcloud', 'sh', '2015-03-19 10:54:22', ''),
(39, 'nbd-qcloud', 0, 'nbd-qcloud', 'hk', '2015-03-19 10:54:22', ''),
(40, 'migrate_shell', 0, 'migrate_shell', 'hk', '2015-03-19 10:54:22', ''),
(41, 'migrate_shell', 0, 'migrate_shell', 'gz', '2015-03-19 10:54:22', ''),
(42, 'migrate_shell', 0, 'migrate_shell', 'sh', '2015-03-19 10:54:22', ''),
(43, 'migrate_shell', 0, 'migrate_shell', 'bm', '2015-03-19 10:54:22', ''),
(44, 'libvirt_agent', 0, 'libvirt_agent', 'bm', '2015-03-19 10:54:22', ''),
(45, 'libvirt_agent', 0, 'libvirt_agent', 'gz', '2015-03-19 10:54:22', ''),
(46, 'libvirt_agent', 0, 'libvirt_agent', 'sh', '2015-03-19 10:54:22', ''),
(47, 'libvirt_agent', 0, 'libvirt_agent', 'hk', '2015-03-19 10:54:22', ''),
(49, 'tgw-qcloud', 4, 'tgw-2', 'bm', '2015-03-19 10:54:22', '');

-- --------------------------------------------------------

--
-- 表的结构 `t_kvm_init`
--

CREATE TABLE IF NOT EXISTS `t_kvm_init` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL,
  `ip` varchar(16) NOT NULL COMMENT 'ip',
  `method` varchar(25) NOT NULL COMMENT '操作类型',
  `type` varchar(32) NOT NULL DEFAULT 'xen',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败,4:任务重试',
  `init_list` varchar(1024) NOT NULL DEFAULT '',
  `area` varchar(16) NOT NULL DEFAULT '' COMMENT 'gz,st,tj',
  `online` text NOT NULL COMMENT 'qcloud,opencloud,normal',
  `alreadyRunSteps` varchar(1024) NOT NULL DEFAULT '' COMMENT '已经执行的步骤',
  `currentRunSteps` varchar(64) NOT NULL DEFAULT '' COMMENT '当前执行的步骤',
  `ReadyRunSteps` varchar(1024) NOT NULL DEFAULT '' COMMENT '未执行的步骤',
  `currentStatus` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败',
  `retry` tinyint(2) NOT NULL DEFAULT '0',
  `input` text NOT NULL,
  `operator` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errcode` int(11) NOT NULL,
  `log` text NOT NULL,
  `detail_log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`),
  KEY `currentStatus` (`currentStatus`),
  KEY `create_time` (`create_time`),
  KEY `finish_time` (`finish_time`),
  KEY `ip` (`ip`),
  KEY `method` (`method`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4618 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_match_host_list`
--

CREATE TABLE IF NOT EXISTS `t_match_host_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败,4:任务重试',
  `serverId` int(11) NOT NULL COMMENT 'host serverId',
  `ip` varchar(64) NOT NULL DEFAULT '',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serverId_2` (`serverId`),
  UNIQUE KEY `ip` (`ip`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4452 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_match_info`
--

CREATE TABLE IF NOT EXISTS `t_match_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL,
  `method` varchar(25) NOT NULL COMMENT '????',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:???,1:???,2:????,3:????,4:????',
  `data_info` text NOT NULL,
  `operator` varchar(64) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errcode` int(11) NOT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=741 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_opt_info`
--

CREATE TABLE IF NOT EXISTS `t_opt_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL COMMENT '任务id',
  `serverId` int(11) NOT NULL COMMENT '服务器id',
  `ip` varchar(16) NOT NULL COMMENT 'ip',
  `method` varchar(32) NOT NULL COMMENT '操作类型(all host op)',
  `data_info` varchar(4096) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败,4:任务重试',
  `step` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'not use',
  `operator` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errcode` int(11) NOT NULL DEFAULT '0',
  `log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`),
  KEY `ip` (`ip`),
  KEY `id` (`id`),
  KEY `method` (`method`),
  KEY `create_time` (`create_time`),
  KEY `finish_time` (`finish_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4673 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_other_exec_info`
--

CREATE TABLE IF NOT EXISTS `t_other_exec_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL,
  `ip` varchar(16) NOT NULL COMMENT 'ip',
  `method` varchar(25) NOT NULL COMMENT '操作类型',
  `type` varchar(32) NOT NULL DEFAULT 'xen',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败,4:任务重试',
  `init_list` varchar(1024) NOT NULL DEFAULT '',
  `area` varchar(16) NOT NULL DEFAULT '' COMMENT 'gz,st,tj',
  `online` text NOT NULL COMMENT 'qcloud,opencloud,normal',
  `alreadyRunSteps` varchar(1024) NOT NULL DEFAULT '' COMMENT '已经执行的步骤',
  `currentRunSteps` varchar(64) NOT NULL DEFAULT '' COMMENT '当前执行的步骤',
  `ReadyRunSteps` varchar(1024) NOT NULL DEFAULT '' COMMENT '未执行的步骤',
  `currentStatus` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败',
  `retry` tinyint(2) NOT NULL DEFAULT '0',
  `input` text NOT NULL,
  `operator` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errcode` int(11) NOT NULL,
  `log` text NOT NULL,
  `detail_log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`),
  KEY `currentStatus` (`currentStatus`),
  KEY `create_time` (`create_time`),
  KEY `ip` (`ip`),
  KEY `method` (`method`),
  KEY `finish_time` (`finish_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=8708 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_other_opt_info`
--

CREATE TABLE IF NOT EXISTS `t_other_opt_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` varchar(50) NOT NULL COMMENT '任务id',
  `serverId` int(11) NOT NULL COMMENT '服务器id',
  `ip` varchar(16) NOT NULL COMMENT 'ip',
  `method` varchar(32) NOT NULL COMMENT '操作类型(all host op)',
  `data_info` varchar(4096) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:准备中,1:执行中,2:执行成功,3:执行失败,4:任务重试',
  `step` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'not use',
  `operator` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errcode` int(11) NOT NULL DEFAULT '0',
  `log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `taskid` (`taskid`),
  KEY `ip` (`ip`),
  KEY `id` (`id`),
  KEY `method` (`method`),
  KEY `create_time` (`create_time`),
  KEY `create_time_2` (`create_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5455 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_task_summary`
--

CREATE TABLE IF NOT EXISTS `t_task_summary` (
  `taskId` varchar(64) NOT NULL,
  `status` int(11) NOT NULL,
  `succNum` int(11) NOT NULL,
  `readyNum` int(11) NOT NULL,
  `failNum` int(11) NOT NULL,
  `runNum` int(11) NOT NULL,
  `extraInfo` varchar(128) NOT NULL DEFAULT '{}',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finishTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `taskId` (`taskId`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `t_tmp_shield_map`
--

CREATE TABLE IF NOT EXISTS `t_tmp_shield_map` (
  `ip` varchar(32) NOT NULL,
  `taskId` int(11) NOT NULL,
  `localUpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
