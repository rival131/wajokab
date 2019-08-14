<?=$this->layout('index');?>

    <!-- Main Slider -->
    <section class="main-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                	
					<?php
						$sliders_post = $this->post()->getHeadline('3', 'DESC', WEB_LANG_ID);
						foreach($sliders_post as $slider_post){
						$slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
					?>
					
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$slider_post['picture'];?>"  data-saveperformance="off"  data-title="We are Awsome"> <!-- MAIN IMAGE --> 
                    <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-60"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: 500px; max-height: auto; word-wrap: break-word;"><div class="medium-title"><h2> <?=$this->pocore()->call->postring->cuthighlight('post',$slider_post['title'], '30');?></h2></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="slide-text"><p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post['content'], '100');?>...</p></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="170"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-btn"><a class="primary-btn hvr-bounce-to-left" href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><span class="btn-text ">Selengkapnya</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div></div>
                    
					<?php } ?>
                    
                    </li>
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    
    <!--Top Services-->
   <section class="top-services">
        <div class="auto-container">
            
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>POTENSI DAERAH <span>Kabupaten Wajo</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            <div class="row clearfix">
                
				<?php
					$post_by_categorys2 = $this->post()->getPostByCategory('7', '3', 'DESC', WEB_LANG_ID);
					foreach($post_by_categorys2 as $list_post2){
						$category = $this->category()->getCategory($list_post2['id_post'], WEB_LANG_ID);
				?>
				
                <!--Post-->
                <article class="col-md-4 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="post-inner">
                    
                        <figure class="image">
                            <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post2['picture'];?>" alt="" />
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <div class="inner-box">
                                <h3><?=$category;?></h3>
                                <div class="text"><?=$this->pocore()->call->postring->cuthighlight('post', $list_post2['content'], '100');?>...</div>
                                <a href="<?=BASE_URL;?>/detailpost/<?=$list_post2['seotitle'];?>" class="read_more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </article>
                
				<? } ?>
				
            </div>
        </div>
	</section>
    
    <!--Facts Counter-->
    <section class="fact-counter fact-counter-one" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="inner clearfix">
        	
            <!--Column-->
        	<div class="column one odd wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content bg">
                	<div class="count-text" data-speed="1000" data-stop="386.073"></div>
                    <span>Jumlah Penduduk</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one even wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content bg-1">
                	<div class="count-text" data-speed="1000" data-stop="73"></div>
                    <span>Quick report</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one odd wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content bg-2">
                	<div class="count-text" data-speed="2000" data-stop="258"></div>
                    <span>Lovely Clients</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one even wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content bg-3">
                	<div class="count-text" data-speed="1000" data-stop="36"></div>
                    <span>Awards</span>
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!--Services Area-->
    <section class="services-area">
    	<div class="auto-container">
        	
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Info <span>Terkini</span></h2>
            </div>
                
            <!--<div class="sec-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            
            <!--Service Tabs-->
            <div class="service-tabs clearfix">
            	
                <!--Tab Buttons-->
                <ul class="tab-btns clearfix wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<!--Active Btn-->
                	<li class="tab-btn hvr-bounce-to-bottom active-btn" data-id="#berita-tab">
                    	<div class="icon"><span class="fa fa-newspaper-o"></span></div>
                        <strong>Terbaru</strong>
                        <span class="skill">Berita Terbaru </span>
                    </li>
                    
                    <li class="tab-btn hvr-bounce-to-bottom" data-id="#pengumuman-tab">
                    	<div class="icon"><span class="fa fa-bullhorn"></span></div>
                        <strong>Pengumuman</strong>
                        <span class="skill">Pengumuman Terbaru</span>
                    </li>
                    
                    <li class="tab-btn hvr-bounce-to-bottom" data-id="#agenda-tab">
                    	<div class="icon"><span class="fa fa-calendar"></span></div>
                        <strong>Agenda</strong>
                        <span class="skill">Agenda Kegiatan</span>
                    </li>
                    
                    <li class="tab-btn hvr-bounce-to-bottom" data-id="#statistik-tab">
                    	<div class="icon"><span class="fa fa-line-chart"></span></div>
                        <strong>Statistik</strong>
                        <span class="skill">Statistik Kabupaten Wajo</span>
                    </li>
					
					</ul>
                
                <!--Tabs Content-->
                <div class="tab-content wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                	
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab clearfix" id="berita-tab">
					
						<?php
							$post_by_categorys2 = $this->post()->getPostByCategory('8', '3', 'DESC', WEB_LANG_ID);
							foreach($post_by_categorys2 as $list_post2){
							$category = $this->category()->getCategory($list_post2['id_post'], WEB_LANG_ID);
						?>
						
                    	<!--Featured Person-->
                        <article class="col-md-4">
                        	<div class="box-inner">
                    
                                <figure class="image">
                                    <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post2['picture'];?>" alt="" />
                                    <span class="curve"></span>
                                </figure>
                                <div class="content">
                                    <div class="inner-box">
                                        <h3><?=$category;?><span><?=$this->pocore()->call->podatetime->tgl_indo($list_post2['date']);?></span></h3>
                                        <div class="text"><?=$this->pocore()->call->postring->cuthighlight('post', $list_post2['content'], '100');?>...</div>
                                        <div class="social"><a href="<?=BASE_URL;?>/detailpost/<?=$list_post2['seotitle'];?>">More...</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </article><!--Featured Person End-->
						
						<?php } ?>
                        
                    </div><!--Tab End-->
                    
                    <!--Tab-->
                    <div class="tab clearfix" id="pengumuman-tab">
                    	<?php
							$post_by_categorys2 = $this->post()->getPostByCategory('6', '3', 'DESC', WEB_LANG_ID);
							foreach($post_by_categorys2 as $list_post2){
							$category = $this->category()->getCategory($list_post2['id_post'], WEB_LANG_ID);
						?>
						
                    	<!--Featured Person-->
                        <article class="col-md-4">
                        	<div class="box-inner">
                    
                                <figure class="image">
                                    <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post2['picture'];?>" alt="" />
                                    <span class="curve"></span>
                                </figure>
                                <div class="content">
                                    <div class="inner-box">
                                        <h3><?=$category;?><span><?=$this->pocore()->call->podatetime->tgl_indo($list_post2['date']);?></span></h3>
                                        <div class="text"><?=$this->pocore()->call->postring->cuthighlight('post', $list_post2['content'], '100');?>...</div>
                                        <div class="social"><a href="<?=BASE_URL;?>/detailpost/<?=$list_post2['seotitle'];?>">More...</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </article><!--Featured Person End-->
						
						<?php } ?>
                        
                    </div><!--Tab End-->
						
						
                    <!--Tab-->
                    <div class="tab clearfix" id="agenda-tab">
                    	<?php
							$post_by_categorys2 = $this->post()->getPostByCategory('16', '3', 'DESC', WEB_LANG_ID);
							foreach($post_by_categorys2 as $list_post2){
							$category = $this->category()->getCategory($list_post2['id_post'], WEB_LANG_ID);
						?>
						
                    	<!--Featured Person-->
                        <article class="col-md-4">
                        	<div class="box-inner">
                    
                                <figure class="image">
                                    <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post2['picture'];?>" alt="" />
                                    <span class="curve"></span>
                                </figure>
                                <div class="content">
                                    <div class="inner-box">
                                        <h3><?=$list_post2['title'];?><span><?=$category;?></span></h3>
                                        <div class="text"><?=$this->pocore()->call->postring->cuthighlight('post', $list_post2['content'], '200');?></div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </article><!--Featured Person End-->
						
						<?php } ?>
                        
                    </div><!--Tab End-->
                    
                    <!--Tab-->
                    <div class="tab clearfix" id="statistik-tab">
                    	<!--Featured Person-->
                        <article class="col-md-4">
                        	<div class="box-inner">
                    
                               
					<div class="stats">
						<div class="widget-title">
							<h3 class="text-uppercase">Stats Pengunjung</h3>
							
						</div>
						<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
					</div>
					

				
                                
                            </div>
                        </article><!--Featured Person End-->
						
					
                        
                    </div><!--Tab End-->
                    
				</div>
                
            </div>
            
        </div>
    </section>
    
    <!--We Are Best-->
     <section class="we-are-best">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="col-md-6 col-sm-6 col-xs-12 image-side">
                	<figure class="image"><img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/img_bupati.png" alt="" title=""></figure>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12 text-side">
                	<h2 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">PIMPINAN DAERAH<span> KABUPATEN WAJO</span></h2>
                    <div class="text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    	<p>KERJA BERSAMA.<br>MENINGKATKAN KUALITAS HIDUP MASYARAKAT WAJO YANG LEBIH BAIK</br></p>
                    </div>
                   </div>
                
            </div>
        </div>
    </section>
	
	    <!--Testimonials-->
    <section class="testimonials-area" style="background-image:url(<?=$this->asset('/images/parallax/image-1.jpg')?>); margin-top:10px;">
    	<div class="auto-container clearfix">
        	<h2 class="wow tada" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/info.png" height="200px" alt="" title=""></h2>

        	<!--Slider-->
            <ul class="slider">
        		<li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
                <li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
                <li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
            </ul>
            
            <!--Custom-Pager-->
           <!-- <div class="custom-pager clearfix">
            	
            	<a href="#" class="pager-item active" data-slide-index="0">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt="" title=""></span>
                    <strong>Jhone Doe</strong>MD/Apple
                </a>
                <a href="#" class="pager-item" data-slide-index="1">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-2.jpg" alt="" title=""></span>
                    <strong>Grey White</strong>CEO/Google Inc
                </a>
                <a href="#" class="pager-item" data-slide-index="2">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-3.jpg" alt="" title=""></span>
                    <strong>White More</strong>PM/Amazon
                </a>
                
            </div> -->
            
        </div>
        
    </section>
    
    <!--Our Projects-->
    <section class="our-projects">
    	<div class="auto-container">
        	
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Galeri <span>Kegiatan</span></h2>
            </div>
                
            <!--<div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>-->
            
            <!--Filters Nav-->
            <ul class="filter-tabs clearfix anim-3-all">
                <li class="filter" data-role="button" data-filter="all"><span class="btn-txt">All</span></li>
                <li class="filter" data-role="button" data-filter="buildings"><span class="btn-txt">Lawyear</span></li>
                <li class="filter" data-role="button" data-filter="hospital"><span class="btn-txt">Police</span></li>
                <li class="filter" data-role="button" data-filter="school"><span class="btn-txt">Crime</span></li>
                <li class="filter" data-role="button" data-filter="isolation"><span class="btn-txt">Case</span></li>
                <li class="filter" data-role="button" data-filter="mall"><span class="btn-txt">Legal</span></li>
                <li class="filter" data-role="button" data-filter="others"><span class="btn-txt">Police</span></li>
              <li class="filter" data-role="button" data-filter="others"><span class="btn-txt">Others</span></li>
            </ul>
        </div>
        
        <!--Projects Container-->
        <div class="projects-container filter-list clearfix">
        	
            <article class="project-box mix mix_all mall architecture">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-1.jpg')?>" alt=""><a href="images/resource/proj-image-1.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm</span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all school other buildings">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-2.jpg')?>" alt=""><a href="images/resource/proj-image-2.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm</span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all isolation architecture">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-3.jpg')?>" alt=""><a href="images/resource/proj-image-3.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm </span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all buildings hospital others">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-4.jpg')?>" alt=""><a href="images/resource/proj-image-4.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm  </span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all buildings architecture">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-5.jpg')?>" alt=""><a href="images/resource/proj-image-5.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm </span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all school mall isolation buildings">
            	<figure class="image"><img src="images/resource/proj-image-6.jpg" alt=""><a href="images/resource/proj-image-6.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm</span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all mall architecture others">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-1.jpg')?> alt=""><a href="images/resource/proj-image-1.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Law Farm</span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all mall isolation hospital buildings architecture others">
            	<figure class="image"><img src="<?=$this->asset('/images/resource/proj-image-7.jpg')?>" alt=""><a href="images/resource/proj-image-7.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                	<div class="text">
                    	<span class="cat">Social</span>
                        <h4>Legal Help</h4>
                    </div>
                </div>
            </article>
            
        </div>
    </section>
    
    <!--Our Team-->
    <section class="our-team-area">
        <div class="auto-container">
            
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Our Best <span>Lawyears</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            <div class="row clearfix">
            
                <article class="col-md-4 col-sm-6 col-xs-12 team-member">
                    <figure class="image"><img src="<?=$this->asset('/images/resource/team-image-1.png')?>" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="0ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>MASUM RANA</h4>
                                <div class="info">
                                    <p>Child Abuse</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="col-md-4 col-sm-6 col-xs-12 team-member">
                    <figure class="image"><img src="<?=$this->asset('/images/resource/team-image-2.png')?>" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="300ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>RASHED KABIR</h4>
                                <div class="info">
                                    <p>Sexual Offence</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="col-md-4 col-sm-12 col-xs-12 team-member">
                    <figure class="image"><img src="<?=$this->asset('/images/resource/team-image-3.png')?>" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="600ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>MAHFUZ RIAD</h4>
                                <div class="info">
                                    <p>Money Laundering</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
            </div>
        </div>
    </section>
    

    
    <!--News Area-->
    <section class="news-area">
    	<div class="auto-container">
        	
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Latest <span>News</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            <!--News Slider-->
            <div class="news-slider">
            
            	<!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="<?=$this->asset('/images/resource/news-image-1.jpg')?>" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="<?=$this->asset('/images/resource/news-image-2.jpg')?>" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="<?=$this->asset('/images/resource/news-image-1.jpg')?>" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="<?=$this->asset('/images/resource/news-image-2.jpg')?>" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
            </div>
            
        </div>
    </section>
    
    <!--Client Logos-->
    <section class="client-logo wow fadeIn" data-wow-delay="300ms" data-wow-duration="1000ms">
    	<div class="auto-container">
        	<div class="slider-container">
            	
                <ul class="slider">
                	<li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                    <li><a href="#"><img src="<?=$this->asset('/images/clients/5.png')?>" alt="" title=""></a></li>
                </ul>
                
            </div>
        </div>
    </section>
