<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : hukum.php
 * - Version : 1.0
 * - Author : Rivaldy
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman hukum.
 * This is a php file for handling front end process for hukum page.
 *
*/

/**
 * Router untuk menampilkan request halaman kathukum.
 *
 * Router for display request in kathukum page.
 *
*/
$router->match('GET|POST', '/kathukum', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'hukum',
		'page_desc' => 'hukum',
		'page_key' => 'hukum wajo',
		'social_mod' => 'hukum',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kathukum',
		'social_title' => 'hukum',
		'social_desc' => 'hukum',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kathukum', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman kathukum dengan nomor halaman.
 *
 * Router for display request in kathukum page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/kathukum/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'hukum',
		'page_desc' => 'hukum',
		'page_key' => 'hukum wajo',
		'social_mod' => 'hukum',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kathukum',
		'social_title' => 'hukum',
		'social_desc' => 'hukum',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kathukum', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman hukum.
 *
 * Router for display request in hukum page.
 *
* $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/hukum/([a-z0-9_-]+)', function($seourl) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kathukum = $core->podb->from('kathukum')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kathukum) {
	$info = array(
		'page_title' => 'hukum '.ucfirst($seourl),
		'page_desc' => 'hukum',
		'page_key' => 'hukum wajo',
		'social_mod' => 'hukum',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/hukum',
		'social_title' => 'hukum '.ucfirst($seourl),
		'social_desc' => 'hukum',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('hukum', compact('kathukum', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'hukum',
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => 'Request URL Is Not Found',
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
 * Router untuk menampilkan request halaman hukum.
 *
 * Router for display request in hukum page.
 *
 * $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/hukum/([a-z0-9_-]+)/page/(\d+)', function($seourl, $page) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kathukum = $core->podb->from('kathukum')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kathukum) {
	$info = array(
		'page_title' => 'hukum '.ucfirst($seourl),
		'page_desc' => 'hukum',
		'page_key' => 'hukum wajo',
		'social_mod' => 'hukum',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/hukum',
		'social_title' => 'hukum '.ucfirst($seourl),
		'social_desc' => 'hukum',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page,
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('hukum', compact('kathukum', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'hukum',
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => 'Request URL Is Not Found',
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

