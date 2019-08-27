<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : pendidikandetailsekolah.php
 * - Version : 1.0
 * - Author : Rivaldy
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman pendidikandetailsekolah.
 * This is a php file for handling front end process for pendidikandetailsekolah page.
 *
*/

/**
 * Router untuk menampilkan request halaman pendidikankatsekolah.
 *
 * Router for display request in pendidikankatsekolah page.
 *
*/
$router->match('GET|POST', '/pendidikankatsekolah', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'pendidikandetailsekolah',
		'page_desc' => 'pendidikandetailsekolah',
		'page_key' => 'pendidikandetailsekolah wajo',
		'social_mod' => 'pendidikandetailsekolah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pendidikankatsekolah',
		'social_title' => 'pendidikandetailsekolah',
		'social_desc' => 'pendidikandetailsekolah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pendidikankatsekolah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman pendidikankatsekolah dengan nomor halaman.
 *
 * Router for display request in pendidikankatsekolah page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/pendidikankatsekolah/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'pendidikandetailsekolah',
		'page_desc' => 'pendidikandetailsekolah',
		'page_key' => 'pendidikandetailsekolah wajo',
		'social_mod' => 'pendidikandetailsekolah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pendidikankatsekolah',
		'social_title' => 'pendidikandetailsekolah',
		'social_desc' => 'pendidikandetailsekolah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pendidikankatsekolah', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman pendidikandetailsekolah.
 *
 * Router for display request in pendidikandetailsekolah page.
 *
* $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/pendidikandetailsekolah/([a-z0-9_-]+)', function($seourl) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$pendidikankatsekolah = $core->podb->from('pendidikankatsekolah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($pendidikankatsekolah) {
	$info = array(
		'page_title' => 'pendidikandetailsekolah '.ucfirst($seourl),
		'page_desc' => 'pendidikandetailsekolah',
		'page_key' => 'pendidikandetailsekolah wajo',
		'social_mod' => 'pendidikandetailsekolah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pendidikandetailsekolah',
		'social_title' => 'pendidikandetailsekolah '.ucfirst($seourl),
		'social_desc' => 'pendidikandetailsekolah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pendidikandetailsekolah', compact('pendidikankatsekolah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'pendidikandetailsekolah',
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
 * Router untuk menampilkan request halaman pendidikandetailsekolah.
 *
 * Router for display request in pendidikandetailsekolah page.
 *
 * $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/pendidikandetailsekolah/([a-z0-9_-]+)/page/(\d+)', function($seourl, $page) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$pendidikankatsekolah = $core->podb->from('pendidikankatsekolah')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($pendidikankatsekolah) {
	$info = array(
		'page_title' => 'pendidikandetailsekolah '.ucfirst($seourl),
		'page_desc' => 'pendidikandetailsekolah',
		'page_key' => 'pendidikandetailsekolah wajo',
		'social_mod' => 'pendidikandetailsekolah',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/pendidikandetailsekolah',
		'social_title' => 'pendidikandetailsekolah '.ucfirst($seourl),
		'social_desc' => 'pendidikandetailsekolah',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page,
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pendidikandetailsekolah', compact('pendidikankatsekolah', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'pendidikandetailsekolah',
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

