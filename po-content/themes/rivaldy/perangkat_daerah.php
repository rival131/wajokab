<?=$this->layout('index');?>


<!-- Breadcrumbs -->

<div class="container">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="<?=BASE_URL;?>" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="<?=BASE_URL.'/pages/'.$this->e($pages['seotitle']);?>"><?=$this->e($front_pages);?></a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					<li class="breadcrumbs-item active">
						<span><?=$this->e($pages['title']);?></span>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- ... end Breadcrumbs -->


<!-- Curriculum Events -->

<section class="crumina-module crumina-module-slider medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Kategori Pemerintahan</h3>

					<div class="swiper-container top-navigation" data-show-items="3">
						<div class="swiper-wrapper">
                            
                        <?php
                  $katperangkatdaerahs = $this->pocore()->call->podb->from('katperangkatdaerah')
                    ->orderBy('idkategori ASC')
                    ->limit ('3')
                    ->fetchAll();
                   
                
                  foreach($katperangkatdaerahs as $katperangkatdaerah){
                ?>	
                        <div class="swiper-slide">
								<div class="curriculum-event c-green"  >
										<div class="curriculum-event-thumb">
											<img src="<?=$this->asset('/images/background/Wisata-Hits-Rumah-Adat-Atakkae-Wajo.jpg')?>" alt="image">
											
											<div class="curriculum-event-content">
												<div class="author-block inline-items">
													<div class="author-avatar">
														<img src="<?=$this->asset('/images/logo/logo-wajo.png')?>" alt="author">
													</div>
													<div class="author-info">
														<div class="author-prof">Pemerintah</div>
														<a href="#" class="h6 author-name">Kabupaten Wajo</a>
													</div>
												</div>
											</div>
											<div class="overlay-standard overlay--green"></div>
										</div>
										<div class="curriculum-event-content">
											<a href="09_events_details_conference_workshops.html" class="h5 title"><?=$katperangkatdaerah['namakategori'];?></a>
										</div>
									</div>
							</div>
                  <?php } ?>
						
						</div>
						<div class="btn-slider-wrap navigation-top-right">

							<div class="btn-prev">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
								<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
							</div>

							<div class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
								<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Curriculum Events -->




