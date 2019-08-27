<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : pimpinan_daerah.php
 * - Version : 1.0
 * - Author : cmink
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman pimpinan_daerah.
 * This is a php file for handling front end process for pimpinan_daerah page.
 *
*/

/**
 * Router untuk menampilkan request halaman kategoripimpinan_daerah.
 *
 * Router for display request in kategoripimpinan_daerah page.
 *
*/
$router->match('GET|POST', '/kategoripimpinan_daerah', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'pimpinan_daerah',
		'page_desc' => 'pimpinan_daerah',
		'page_key' => 'pimpinan_daerah wajo',
		'social_mod' => 'pimpinan_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kategoripimpinan_daerah',
		'social_title' => 'pimpinan_daerah',
		'social_desc' => 'pimpinan_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kategoripimpinan_daerah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman kategoripimpinan_daerah dengan nomor halaman.
 *
 * Router for display request in kategoripimpinan_daerah page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/kategoripimpinan_daerah/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'pimpinan_daerah',
		'page_desc' => 'pimpinan_daerah',
		'page_key' => 'pimpinan_daerah wajo',
		'social_mod' => 'pimpinan_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/kategoripimpinan_daerah',
		'social_title' => 'pimpinan_daerah',
		'social_desc' => 'pimpinan_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('kategoripimpinan_daerah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman pimpinan_daerah.
 *
 * Router for display request in pimpinan_daerah page.
 *
* $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/pimpinan_daerah/([a-z0-9_-]+)', function($seourl) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kategoripimpinan_daerah = $core->podb->from('kategori_pimpinan_daerah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kategoripimpinan_daerah) {
	$info = array(
		'page_title' => 'pimpinan_daerah '.ucfirst($seourl),
		'page_desc' => 'pimpinan_daerah',
		'page_key' => 'pimpinan_daerah wajo',
		'social_mod' => 'pimpinan_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pimpinan_daerah',
		'social_title' => 'pimpinan_daerah '.ucfirst($seourl),
		'social_desc' => 'pimpinan_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pimpinan_daerah', compact('kategoripimpinan_daerah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'pimpinan_daerah',
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
 * Router untuk menampilkan request halaman pimpinan_daerah.
 *
 * Router for display request in pimpinan_daerah page.
 *
 * $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/pimpinan_daerah/([a-z0-9_-]+)/page/(\d+)', function($seourl, $page) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$kategoripimpinan_daerah = $core->podb->from('kategori_pimpinan_daerah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($kategoripimpinan_daerah) {
	$info = array(
		'page_title' => 'pimpinan_daerah '.ucfirst($seourl),
		'page_desc' => 'pimpinan_daerah',
		'page_key' => 'pimpinan_daerah wajo',
		'social_mod' => 'pimpinan_daerah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pimpinan_daerah',
		'social_title' => 'pimpinan_daerah '.ucfirst($seourl),
		'social_desc' => 'pimpinan_daerah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page,
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pimpinan_daerah', compact('kategoripimpinan_daerah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'pimpinan_daerah',
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

