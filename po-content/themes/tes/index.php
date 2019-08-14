<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="PemkabWajo" />
    <meta name="author" content="Rivaldy" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>

    <!-- Mobile Specific Meta -->
	

    <!-- Stylesheets -->
	<link href="<?=$this->asset('/css/bootstrap.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/revolution-slider.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/owl.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/style.css')?>" rel="stylesheet">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="<?=$this->asset('/css/responsive.css')?>" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	
</head>
<body>
	<div class="page-wrapper">
	
		<!-- Insert Header -->
		<?=$this->insert('header');?>
		
		<!-- Insert Content -->
		<?=$this->section('content');?>

		<!-- Insert Footer -->
		<?=$this->insert('footer');?>
		
	</div>
	<!-- Javascript -->
	<script src="<?=$this->asset('/js/highcharts.js')?>"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="<?=$this->asset('/js/jquery.js')?>"></script> 
	<script src="<?=$this->asset('/js/bootstrap.min.js')?>"></script>
	<script src="<?=$this->asset('/js/revolution.min.js')?>"></script>
	<script src="<?=$this->asset('/js/bxslider.js')?>"></script>
	<script src="<?=$this->asset('/js/owl.carousel.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.mixitup.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.fancybox.pack.js')?>"></script>
	<script src="<?=$this->asset('/js/wow.js')?>"></script>
	<script src="<?=$this->asset('/js/script.js')?>"></script>
	<?php
		$luasx = $this->pocore()->call->podb->from('luas_wilayah')
			->orderBy('id')
			->fetchAll();
		foreach($luasx as $luas){
	?>
	
	<script>
					Highcharts.chart('container', {
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				type: 'pie'
			},
			title: {
				text: 'Persentase Luas Wilayah Menurut Kecamatan di Kabupaten Wajo, 2016'
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{
				name: 'kecamatan',
				colorByPoint: true,
				data: [{
					name: 'Tempe',
					y: 2
				}, {
					name: 'Sabbangparu',
					y: 5.30
				}, {
					name: 'Pammana',
					y: 6.47
				}, {
					name: 'Bola',
					y: 8.78
				}, {
					name: 'Takkalalla',
					y: 7.17
				}, {
					name: 'Sajoanging',
					y: 6.66
				},{
					name: 'Penrang',
					y: 6.18
				},{
					name: 'Majauleng',
					y: 9.01
				},{
					name: 'Tanasitolo',
					y: 6.17
				},{
					name: 'Belawa',
					y: 6.88
				},{
					name: 'Maniangpajo',
					y: 7.02
				},{
					name: 'Gilireng',
					y: 5.87
				},{
					name: 'Keera',
					y: 14.70
				},{
					name: 'Pitumpanua',
					y: 8.26
				}]
			}]
		});
	</script>
	<?php } ?>
	
</body>
</html>