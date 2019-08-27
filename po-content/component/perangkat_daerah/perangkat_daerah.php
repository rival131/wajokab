<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : perangkat_daerah.php
 * - Version : 1.0
 * - Author : Rivaldy
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman perangkat_daerah.
 * This is a php file for handling front end process for perangkat_daerah page.
 *
*/

/**
 * Router untuk menampilkan request halaman kategoriperangkat_daerah.
 *
 * Router for display request in kategoriperangkat_daerah page.
 *
*/
$router->match('GET|POST', '/kategoriperangkat_daerah', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'perangkat_daerah',
		'page_desc' => 'perangkat_daerah',
		'page_key' => 'perangkat_daerah wajo',
		'social_mod' => 'perangkat_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kategoriperangkat_daerah',
		'social_title' => 'perangkat_daerah',
		'social_desc' => 'perangkat_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kategoriperangkat_daerah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman kategoriperangkat_daerah dengan nomor halaman.
 *
 * Router for display request in kategoriperangkat_daerah page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/kategoriperangkat_daerah/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'perangkat_daerah',
		'page_desc' => 'perangkat_daerah',
		'page_key' => 'perangkat_daerah wajo',
		'social_mod' => 'perangkat_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kategoriperangkat_daerah',
		'social_title' => 'perangkat_daerah',
		'social_desc' => 'perangkat_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kategoriperangkat_daerah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman perangkat_daerah.
 *
 * Router for display request in perangkat_daerah page.
 *
* $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/perangkat_daerah/([a-z0-9_-]+)', function($seourl) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kategoriperangkat_daerah = $core->podb->from('katperangkatdaerah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kategoriperangkat_daerah) {
	$info = array(
		'page_title' => 'perangkat_daerah '.ucfirst($seourl),
		'page_desc' => 'perangkat_daerah',
		'page_key' => 'perangkat_daerah wajo',
		'social_mod' => 'perangkat_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/perangkat_daerah',
		'social_title' => 'perangkat_daerah '.ucfirst($seourl),
		'social_desc' => 'perangkat_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('perangkat_daerah', compact('kategoriperangkat_daerah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'perangkat_daerah',
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
 * Router untuk menampilkan request halaman perangkat_daerah.
 *
 * Router for display request in perangkat_daerah page.
 *
 * $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/perangkat_daerah/([a-z0-9_-]+)/page/(\d+)', function($seourl, $page) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kategoriperangkat_daerah = $core->podb->from('katperangkatdaerah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kategoriperangkat_daerah) {
	$info = array(
		'page_title' => 'perangkat_daerah '.ucfirst($seourl),
		'page_desc' => 'perangkat_daerah',
		'page_key' => 'perangkat_daerah wajo',
		'social_mod' => 'perangkat_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/perangkat_daerah',
		'social_title' => 'perangkat_daerah '.ucfirst($seourl),
		'social_desc' => 'perangkat_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page,
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('perangkat_daerah', compact('kategoriperangkat_daerah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'perangkat_daerah',
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

