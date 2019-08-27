<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : detailfasilitaskesehatan.php
 * - Version : 1.0
 * - Author : Rivaldy
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman detailfasilitaskesehatan.
 * This is a php file for handling front end process for detailfasilitaskesehatan page.
 *
*/

/**
 * Router untuk menampilkan request halaman katfasilitaskesehatan.
 *
 * Router for display request in katfasilitaskesehatan page.
 *
*/
$router->match('GET|POST', '/katfasilitaskesehatan', function() use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'detailfasilitaskesehatan',
		'page_desc' => 'detailfasilitaskesehatan',
		'page_key' => 'detailfasilitaskesehatan wajo',
		'social_mod' => 'detailfasilitaskesehatan',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/katfasilitaskesehatan',
		'social_title' => 'detailfasilitaskesehatan',
		'social_desc' => 'detailfasilitaskesehatan',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1'
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('katfasilitaskesehatan', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman katfasilitaskesehatan dengan nomor halaman.
 *
 * Router for display request in katfasilitaskesehatan page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/katfasilitaskesehatan/page/(\d+)', function($page) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);
	$info = array(
		'page_title' => 'detailfasilitaskesehatan',
		'page_desc' => 'detailfasilitaskesehatan',
		'page_key' => 'detailfasilitaskesehatan wajo',
		'social_mod' => 'detailfasilitaskesehatan',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/katfasilitaskesehatan',
		'social_title' => 'detailfasilitaskesehatan',
		'social_desc' => 'detailfasilitaskesehatan',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('katfasilitaskesehatan', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman detailfasilitaskesehatan.
 *
 * Router for display request in detailfasilitaskesehatan page.
 *
* $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/detailfasilitaskesehatan/([a-z0-9_-]+)', function($seourl) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$katfasilitaskesehatan = $core->podb->from('katfasilitaskesehatan')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($katfasilitaskesehatan) {
	$info = array(
		'page_title' => 'detailfasilitaskesehatan '.ucfirst($seourl),
		'page_desc' => 'detailfasilitaskesehatan',
		'page_key' => 'detailfasilitaskesehatan wajo',
		'social_mod' => 'detailfasilitaskesehatan',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/detailfasilitaskesehatan',
		'social_title' => 'detailfasilitaskesehatan '.ucfirst($seourl),
		'social_desc' => 'detailfasilitaskesehatan',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => '1',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('detailfasilitaskesehatan', compact('katfasilitaskesehatan', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'detailfasilitaskesehatan',
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
 * Router untuk menampilkan request halaman detailfasilitaskesehatan.
 *
 * Router for display request in detailfasilitaskesehatan page.
 *
 * $seourl = string [a-z0-9_-]
*/
$router->match('GET|POST', '/detailfasilitaskesehatan/([a-z0-9_-]+)/page/(\d+)', function($seourl, $page) use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);
	$katfasilitaskesehatan = $core->podb->from('katfasilitaskesehatan')
		->where('seourl', $core->postring->valid($seourl, 'xss'))
		->limit(1)
		->fetch();
	if ($katfasilitaskesehatan) {
	$info = array(
		'page_title' => 'detailfasilitaskesehatan '.ucfirst($seourl),
		'page_desc' => 'detailfasilitaskesehatan',
		'page_key' => 'detailfasilitaskesehatan wajo',
		'social_mod' => 'detailfasilitaskesehatan',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'].'/detailfasilitaskesehatan',
		'social_title' => 'detailfasilitaskesehatan '.ucfirst($seourl),
		'social_desc' => 'detailfasilitaskesehatan',
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'page' => $page,
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('detailfasilitaskesehatan', compact('katfasilitaskesehatan', 'lang'));
	} else {
		$info = array(
			'page_title' => 'Request URL Is Not Found',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'detailfasilitaskesehatan',
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

