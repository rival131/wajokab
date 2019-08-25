<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : opd.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman galeri.
 * This is a php file for handling front end process for opd page.
 *
*/

/**
 * Router untuk menampilkan request halaman opd.
 *
 * Router for display request in opd page.
 *
*/
$router->match('GET|POST', '/opd', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'opd',
		'page_desc' => $core->posetting[2]['value'],
		'page_key' => $core->posetting[3]['value'],
		'social_mod' => 'opd',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/opd',
		'social_title' => $core->posetting[0]['value'],
		'social_desc' => $core->posetting[2]['value'],
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('opd', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman opd dengan nomor halaman.
 *
 * Router for display request in opd page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/opd/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'OPD',
		'page_desc' => $core->posetting[2]['value'],
		'page_key' => $core->posetting[3]['value'],
		'social_mod' => $lang['front_opd'],
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/opd',
		'social_title' => $core->posetting[0]['value'],
		'social_desc' => $core->posetting[2]['value'],
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('opd', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman galeri.
 *
 * Router for display request in opd page.
 *
 * $alb = string [a-z0-9_-]
*/
$router->match('GET|POST', '/opd/([a-z0-9_-]+)', function($alb) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$opd = $core->podb->from('opd')
		->where('seotitle', $core->postring->valid($alb, 'xss'))
		->where('active', 'Y')
		->limit(1)
		->fetch();
	if ($opd) {
		$info = array(
			'page_title' => $lang['front_opd'].' '.$opd['title'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $lang['front_opd'].' '.$opd['title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'].'/opd/'.$opd['seotitle'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
			'page' => '1'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('opd', compact('opd','lang'));
	} else {
		$info = array(
			'page_title' => $lang['front_opd_not_found'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $lang['front_opd'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => $lang['front_opd_not_found'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('404', compact('lang'));
	}
});

/**
 * Router untuk menampilkan request halaman galeri dengan nomor halaman.
 *
 * Router for display request in opd page with pagination.
 *
 * $alb = string [a-z0-9_-]
 * $page = integer
*/
$router->match('GET|POST', '/opd/([a-z0-9_-]+)/page/(\d+)', function($alb, $page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$opd = $core->podb->from('opd')
		->where('seotitle', $core->postring->valid($alb, 'xss'))
		->where('active', 'Y')
		->limit(1)
		->fetch();
	if ($opd) {
		$info = array(
			'page_title' => $lang['front_opd'].' '.$opd['title'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $lang['front_opd'].' '.$opd['title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'].'/opd/'.$opd['seotitle'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
			'page' => $page
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('opd', compact('opd','lang'));
	} else {
		$info = array(
			'page_title' => $lang['front_opd_not_found'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $lang['front_opd'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => $lang['front_opd_not_found'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('404', compact('lang'));
	}
});