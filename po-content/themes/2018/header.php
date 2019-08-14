 <div id="main-wrapper" class="homepage-two fixed-nav">
      <div class="topbar">
      <div class="container">
        <div id="date-time"></div>

                &nbsp;
        <a href="http://tangerangkab.go.id/englishpage">
          <img src="http://tangerangkab.go.id/images/1487230468_Flag_of_United_Kingdom.png" style="width:24px;" title="English Language"/>
        </a>
        
        <div id="topbar-right">
                   <!-- <div id="google_translate_element" style="float:left;"></div>
          <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
            }
          </script>
          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          
          <div id="weather"></div> -->
          <div class="searchNlogin">
            <ul>
              <li class="search-icon"><i class="fa fa-search"></i></li>
            </ul>
            <div class="search">
            <form action="<?=BASE_URL;?>/search" method="post">
			<input type="text" name="search" placeholder="<?=$this->e($front_search);?>..." />
			</form>
            </div> <!--/.search-->
          </div><!-- searchNlogin -->
        </div>
      </div>
    </div>
    <div id="navigation">
      <div class="navbar" role="banner">
        <div class="container">
          <div class="top-add">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="http://tangerangkab.go.id">
                <img class="main-logo img-responsive" id="logocustom" src="<?=$this->asset('/images/logo-kecil-2.png')?>" alt="logo">
              </a>
            </div></div>
        </div>

	<div id="menubar">
		<div class="container">
            <nav id="mainmenu" class="navbar-left collapse navbar-collapse">
            <ul class="nav navbar-nav">
			<?php
			echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="business dropdown"', 'class="dropdown-menu"');
			?>
			<div class="navbar sticky-nav"></div>
			</ul>
            </nav>
          </div>
        </div>