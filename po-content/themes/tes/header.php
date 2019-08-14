<!-- Insert header script here -->

    <!-- Preloader -->
    <!--<div class="preloader"></div> 
 	<div class="loaded" id="loader-wrapper">
    <div id="loader"></div>
	</div> -->
	
	
    <!-- Main Header -->
    <header class="main-header style-one">
    	<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                
                <!-- Top Left -->
                <div class="top-left pull-left clearfix">
                    <div class="email pull-left"><a href="mailto:companymail@gmailcom"><span class="f-icon flaticon-email145"></span> companymail@gmailcom</a></div>
                    <div class="phone pull-left"><a href="#"><span class="f-icon flaticon-phone325"></span> (880) 168-0528</a></div>
                </div>
                
                <!-- Top Right -->
                <nav class="top-right pull-right">
                    <ul>
                        <li><a href="#">SITE MAP</a></li>
                        <li><a href="#">SHORTCODES</a></li>
                        <li><a href="#">SUPPORT</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
        
        <!-- Search Box -->
        <div class="search-box toggle-box">
            <div class="auto-container clearfix">
                
                <!-- Search Form -->
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <input type="search" name="search" value="" placeholder="Search">
                            <button class="search-submit" type="submit"><span class="f-icon flaticon-magnifying-glass16"></span></button>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="index.html"><img src="<?=$this->asset('/images/weblogo-250.png')?>" alt="Bulldozer" title="Bulldozer" width="200px"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                	<div class="search-btn">
                    	<div class="f-icon flaticon-magnifying47"></div>
                        <span class="curve"></span>
                    </div>
                    
                    <!-- Main Menu -->
					
                    <nav class="main-menu">
					    <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                              
						                                                             
                            
								<?php
									echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', '');
								?>   
                            
                            <div class="clearfix"></div>
        
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        
        
    </header>
    <!--End Main Header -->