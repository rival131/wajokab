<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="popojicms" />
    <meta name="author" content="PopojiCMS" />
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
	<link rel="stylesheet" href="<?=$this->asset('/css/bootstrap.min.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/jquery-ui.min.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/animate.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/css-plugin-collections.css')?>" type="text/css" />
	<!-- CSS | menuzord megamenu skins -->
	<link rel="stylesheet" href="<?=$this->asset('/css/menuzord-skins/menuzord-boxed.css')?>" type="text/css" />
	<!-- CSS | Main style file -->
	<link rel="stylesheet" href="<?=$this->asset('/css/style-main.css')?>" type="text/css" />
	<!-- CSS | Preloader Styles -->
	<link rel="stylesheet" href="<?=$this->asset('/css/preloader.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/bootstrap-responsive.css')?>" type="text/css" />
	<!-- CSS | Custom Margin Padding Collection -->
	<link rel="stylesheet" href="<?=$this->asset('/css/custom-bootstrap-margin-padding.css')?>" type="text/css" />
	<!-- CSS | Responsive media queries -->
	<link rel="stylesheet" href="<?=$this->asset('/css/responsive.css')?>" type="text/css" />
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

	<!-- Revolution Slider 5.x CSS settings -->
	<link rel="stylesheet" href="<?=$this->asset('/js/revolution-slider/css/settings.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/js/revolution-slider/css/layers.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/js/revolution-slider/css/navigation.css')?>" type="text/css" />
	<!-- CSS | Theme Color -->
	<link rel="stylesheet" href="<?=$this->asset('/css//colors/theme-skin-red.css')?>" type="text/css" />
	
	<!-- external javascripts -->
	<script src="<?=$this->asset('/js/jquery-2.2.0.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/jquery-ui.min.js')?>"></script> 
	<!-- JS | jquery plugin collection for this theme -->
	<script src="<?=$this->asset('/js/jquery-plugin-collection.js')?>"></script> 
	<!-- Revolution Slider 5.x SCRIPTS -->
	<script src="<?=$this->asset('/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script> 
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />
	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	

	
</head>
<body class="stretched no-transition">
		<!-- Insert Header -->
		<?=$this->insert('header');?>

		
		<!-- Insert Content -->
		<?=$this->section('content');?>
		

		<!-- Insert Footer -->
		<?=$this->insert('footer');?>



	<!-- Javascript -->
	<script src="<?=$this->asset('/js/bootstrap.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/calendar-events-data.js')?>"></script>
	<script src="<?=$this->asset('/js/chart.js')?>"></script> 
	<script src="<?=$this->asset('/js/custom.js')?>"></script> 
	<script src="<?=$this->asset('/js/custom-swiperslider.js')?>"></script> 
	<script src="<?=$this->asset('/js/flipbox.js')?>"></script> 
	<script src="<?=$this->asset('/js/google-map-init.js')?>"></script> 
	<script src="<?=$this->asset('/js/google-map-init-multilocation.js')?>"></script> 
	<script src="<?=$this->asset('/js/jquery.masonry.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/jquery-2.1.4.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/jquery-2.2.0.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/jquery-plugin-collection.js')?>"></script> 
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/extensions/revolution.extension.video.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script> 
	<script src="<?=$this->asset('/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script> 
	<!-- JS | Custom script for all pages -->
	<script src="js/custom.js"></script>
	
	<!--STYLE GPR KOMINFO-->
	<style>
    #gpr-kominfo-widget-container {
      height: 450px!important;
    }

    #gpr-kominfo-widget-body {
      overflow: auto;
      height: 340px!important;
    }

    #gpr-kominfo-widget-footer {
      display: none!important;
    }

  </style>
       <div class="clear"></div>

	<!--SISIPAN UNTUK CHART STATISTIK-->
    <script src="<?=$this->asset('/js/chart.js')?>"></script>
    <script src="<?=$this->asset('/js/kecamatan.js')?>"></script>
    <script src="<?=$this->asset('/js/pertanian.js')?>"></script>
    <script src="<?=$this->asset('/js/persawahan.js')?>"></script>



  </div>


</body>
</html>