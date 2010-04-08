<?php

##### newzbin

$GLOBALS['formats'] = array(
	'1' => 'Divx',
	'2' => 'DVD',
	'4' => 'SVCD',
	'8' => 'VCD',
	'16' => 'Xvid',
	'32' => 'HDts',
	'64' => 'WMV',
	'128' => 'Other',
	'256' => 'ratDVD',
	'512' => 'Ipod',
	'1024' => 'PSP',
	'2048' => 'H.264',
	'65536' => 'HD-DVD',
	'131072' => 'x264',
	'262144' => 'Blu-ray',
	'524288' => '720p',
	'1048576' => '1080i',
	'2097152' => '1080p',
	'1073741824' => 'Unknown'
);

$GLOBALS['languages'] = array(
	'2' => 'French',
	'4' => 'German',
	'8' => 'Spanish',
	'16' => 'Danish',
	'32' => 'Dutch',
	'64' => 'Japanese',
	'128' => 'Korean',
	'256' => 'Russian',
	'512' => 'Italian',
	'1024' => 'Cantronese',
	'2048' => 'Polish',
	'4096' => 'English',
	'8192' => 'Vietnamese',
	'16384' => 'Swedish',
	'32768' => 'Norwegian',
	'65536' => 'Finnish',
	'131072' => 'Mandarin',
	'1073741824' => 'Unknown'
);

$GLOBALS['sources'] = array(
	'1' => 'CAM',
	'2' => 'Screener',
	'4' => 'TeleCine',
	'8' => 'TeleSync',
	'16' => 'Workprint',
	'32' => 'VHS',
	'64' => 'DVD',
	'128' => 'HDTV',
	'256' => 'TV Cap',
	'512' => 'HD-DVD',
	'1024' => 'R5 Retail',
	'2048' => 'Blu-ray',
	'1073741824' => 'Unknown'
);

##### nzbmatrix

//5 = DVD, 6 = Divx/Xvid, 41 = HD, 7 = Sports/Ent, 8 = other
$GLOBALS['nzbmatrix_formats'] = array(
	'1' => '6',
	'2' => '5',
	'4' => '5',
	'8' => '6',
	'16' => '6',
	'32' => '41',
	'64' => '41',
	'128' => '0',
	'256' => '5',
	'512' => '8',
	'1024' => '8',
	'2048' => '41',
	'65536' => '41',
	'131072' => '41',
	'262144' => '41',
	'524288' => '41',
	'1048576' => '41',
	'2097152' => '41',
	'1073741824' => '8'
);

##### system values

$config['version'] = '0.8';
$config['debug_separator'] = ' | ';
$config['project_url'] = 'http://code.google.com/p/hellavcr/';
$config['logging'] = array(
	'date_format' => '[m/d/y H:i:s] '
);
$config['tvrage'] = array(
	'quickinfo' => 'http://services.tvrage.com/tools/quickinfo.php',
	'episode_list' => 'http://services.tvrage.com/feeds/episode_list.php'
);
$config['thetvdb'] = array(
	'small_poster' => 'http://thetvdb.com/banners/_cache/posters/',
	'large_poster' => 'http://thetvdb.com/banners/posters/',
	'show_info' => 'http://www.thetvdb.com/api/GetSeries.php?seriesname=',
	'api_key' => 'A6D11F92201EEBFA'
);
$config['newzbin'] = array(
	'root_url' => 'https://www.newzbin.com/',
	'protocol' => 'https://',
	'base_url' => 'www.newzbin.com/'
);
$config['nzbmatrix'] = array(
	'root_url' => 'https://nzbmatrix.com/',
	'protocol' => 'https://',
	'base_url' => 'nzbmatrix.com/',
	'strip_chars' => array(':', '&', '(', ')', "'"),
	'wait_time' => 60
);
$config['tvnzb'] = array(
	'root_url' => 'http://tvnzb.com/',
	'protocol' => 'http://',
	'base_url' => 'tvnzb.com/',
	'rss_all' => 'http://www.tvnzb.com/tvnzb.rss',
	'rss_new' => 'http://www.tvnzb.com/tvnzb_new.rss',
	'rss_old' => 'http://www.tvnzb.com/tvnzb_old.rss'
);

//pid
$config['lock_file'] = '/var/lock/hellavcr.pid';
$config['pid_files'] = array();

//clever beginnings to tweets, rest of sentence ends in: [show] [season]x[episode]
$config['hollers'] = array(
	'queued '
);

//index page
$config['index'] = array(
	'unknown_timestamp' => '999999999999',
	'header_format' => array(
		'upcoming' => 'l',
		'downloaded' => 'F j, Y (l)'
	),
	'headers' => array(
		'1week+' => 'more than a week',
		'unknown' => 'unknown',
		'never' => 'nothing downloaded',
		'ended' => 'canceled/ended'
	),
	'status_ended' => 'canceled/ended'
);

?>
