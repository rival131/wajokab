<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : dokumen-daerah.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman dokumen-daerah.
 * This is a php file for handling front end process for dokumen-daerah page.
 *
*/

/**
 * Router untuk menampilkan request halaman dokumen-daerah.
 *
 * Router for display request in dokumen-daerah page.
 *
 * $seotitle = string [a-z0-9_-]
*/
$router->match('GET|POST', '/dokumen-daerah/([a-z0-9_-]+)', function($seotitle) use ($core, $templates) {
	$lang = $core->setlang('dokumen-daerah', WEB_LANG);
	$dokumen_daerah = $core->podb->from('dokumen-daerah')
		->select(array('dokumen-daerah_description.title', 'dokumen-daerah_description.content'))
		->leftJoin('dokumen-daerah_description ON dokumen-daerah_description.id_dokumen-daerah = dokumen-daerah.id_dokumen-daerah')
		->where('dokumen-daerah.seotitle', $seotitle)
		->where('dokumen-daerah_description.id_language', WEB_LANG_ID)
		->where('dokumen-daerah.active', 'Y')
		->limit(1)
		->fetch();
	if ($dokumen_daerah) {
		$info = array(
			'page_title' => $dokumen_daerah['title'],
			'page_desc' => $core->postring->cuthighlight('post', $dokumen_daerah['content'], '60'),
			'page_key' => $dokumen_daerah['title'],
			'social_mod' => $lang['front_dokumen-daerah_title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'].'/dokumen-daerah/'.$dokumen_daerah['seotitle'],
			'social_title' => $dokumen_daerah['title'],
			'social_desc' => $core->postring->cuthighlight('post', $dokumen_daerah['content'], '60'),
			'social_img' => $core->posetting[1]['value'].'/'.DIR_CON.'/uploads/'.$dokumen_daerah['picture']
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('dokumen-daerah', compact('home','lang'));
	} else {
		$info = array(
			'page_title' => $lang['front_dokumen-daerah_not_found'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $lang['front_dokumen-daerah_title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => $lang['front_dokumen-daerah_not_found'],
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