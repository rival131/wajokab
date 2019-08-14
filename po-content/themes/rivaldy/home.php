<?=$this->layout('index');?>

<div class="header-spacer"></div>
		<div class="content-wrapper">
			
	<div class="pengumuman-wrapper">
  		<div class="pengumuman-content">
		    <div class="pengumuman-inner">
            	<div class="pengumuman-kiri">
					Pengumuman Terkini
				</div>
		      	<div class="pengumuman-garing">/</div>
			    <div class="pengumuman-tengah">
  					Pengumuman Seleksi Penerimaan CPNS 2018 di lingkungan Pemerintah Kota Samarinda
  				</div>
				<a href="http://bkppd.samarindakota.go.id/new/news/pengumuman-seleksi-penerimaan-cpns-2018-di-lingkungan-pemerintah-kota-samarinda" target="_blank" class="pengumuman-link">Selengkapnya</a>
    		</div>
  		</div>
	</div>
	
	<style type="text/css">
		.form-inline input {
			color: #5f5f5f!important;
		}
	</style>

	<div class="crumina-stunning-header stunning-header--content-center stunning-bg-3 stunning-header--bg-photo stunning-header--min600 align-center c-white fill-white"
			style="background-image: url('https://samarindakota.go.id/storage/portal/wallpaper/2018-06/24/BTHP9TNsPz.jpg');" 
		>
		<div class="container">
			<div class="stunning-header-content">
				<img src="<?=$this->asset('/images/logo/logo-wajo.png')?>" class="logo-wajo">
				<h2 class="h1 stunning-header-title c-white">Selamat Datang di <strong>Kabupaten Wajo</strong></h2>
				<h6 class="stunning-header-sub-title c-white">Kota Teduh, Rapi, Aman dan Nyaman</h6>
				<form method="POST" action="https://samarindakota.go.id/website" accept-charset="UTF-8" class="form-inline form-pencarian" autocomplete="off"><input name="_token" type="hidden" value="jQHFf0OD75nNlVMARhNDwikhwlumJ87NKnoggtWz">
					<input placeholder="Masukkan Informasi yang Anda ingin cari" name="keyword" type="text">
					<button class="btn btn--green-light cari">
						Temukan
					</button>
				</form>
			</div>
		</div>
		<div class="overlay-standard overlay--light"></div>
	</div>

    
    <!-- Profil Walikota -->
    <style type="text/css">
	.crumina-teammembers-item .teammembers-item-prof {
		margin-bottom: 0;
		color: #3e3e3e;
	}
	.teammember-item--author-in-round {
		background: #fff;
		padding: 25px;
		border-radius: 0;
		height: 310px;
	}
	.teammember-item--author-in-round .teammembers-thumb img {
		border-radius: 10px;
		box-shadow: 5px 5px 10px 0 rgba(18, 25, 33, 0.15)
	}
	.thumb--big .teammembers-thumb {
		margin-left: -25px;
	    margin-top: -25px;
	    width: 310px;
	    height: 310px;
	}
	.teammember-item--author-in-round .teammembers-thumb img {
		height: 310px;
	    width: 310px;
	    border-radius: 0;
	}
	.teammembers-item-prof {
		color: #6b6b6b;
		font-family: 'Lato', sans-serif;
		margin-bottom: 0;
	}
	.teammembers-item-name {
		color: #46af49;
		font-family: 'Lato', sans-serif;
		margin-top: 5px;
	}
	.teammember-content p {
		font-size: 15px;
		font-family: 'Lato', sans-serif;
		color: #969696;
	}
	.socials--round .social__item i {
		margin-top: 7px;
	}
	.socials--round .social__item:hover {
		color: #fff;
		box-shadow: none;
	}
	.tombol--round a {
		border-radius: 20px;
		border: 2px solid #d8e1ec;
		font-size: 13px;
		padding: 5px 15px 3px;
		text-transform: uppercase;
	}	
	.tombol--round a:hover {
		color: #fff;
		background: #273f5b;
		border: 2px solid #273f5b;
	}
	.section-pimpinan {
		padding: 50px 0 100px;
		background: #e74c3c
	}
	.pimpinan-title {
		font-family: 'Lato',sans-serif;
		margin-bottom:0
	}
	.pimpinan-text {
		margin-top: 15px;
		line-height: 25px;
		font-size: 16px;
	}
	.pimpinan-thumb {
		padding:0;
		margin: 20px 0;
	}
	@media (max-width: 768px) {
		.crumina-teammembers-item .teammembers-item-prof {
			display: inline
		}
	}
</style>
<section class="crumina-module crumina-module-slider section-pimpinan">
	<div class="container">
		<div class="row">
		     
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="crumina-module-img-content">
					<div class="crumina-module crumina-heading">
						<h3 class="heading-title c-white pimpinan-title">PEMIMPIN DAERAH</h3>
						<div class="heading-text c-white pimpinan-text">
							Berkenalan Dengan Pejabat Penting<br/> 
							Pemerintah Kabupaten Wajo
						</div>
					</div>
				</div>
				  
				<div class="slider-slides with-thumbs align-left pimpinan-thumb">
				  <?php
                  $pejabats = $this->pocore()->call->podb->from('pimpinan_daerah')
                    ->orderBy('id ASC')
                    
                    ->fetchAll();
                   
                
                  foreach($pejabats as $pejabat){
                ?>
										<a href="#" class="slides-item slide-active">
						<div class="testimonial-img-author">
							<img src="<?=BASE_URL;?>/po-content/uploads/<?=$pejabat['foto'];?>" alt="<?=$pejabat['foto'];?>">
						</div>
					</a>
					<?php } ?>
                </div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="swiper-container" data-effect="fade">
					<div class="swiper-wrapper">
						<?php
                  $pejabats = $this->pocore()->call->podb->from('pimpinan_daerah')
                    ->orderBy('id ASC')
                    
                    ->fetchAll();
                   
                
                  foreach($pejabats as $pejabat){
                ?>					
												<div class="swiper-slide">
							<div class="crumina-module crumina-teammembers-item teammember-item--author-in-round thumb--big">
								<div class="teammembers-thumb" data-swiper-parallax="-100">
									<img src="<?=BASE_URL;?>/po-content/uploads/<?=$pejabat['foto'];?>" alt="<?=$pejabat['foto'];?>">
								</div>
								<div class="teammember-content" data-swiper-parallax="-300">
									<div class="teammembers-item-prof"><?=$pejabat['jabatan'];?></div>
									<a href="#" class="h5 teammembers-item-name"><?=$pejabat['nama'];?></a>
									<p><?=$pejabat['quote'];?></p>
									<ul class="socials socials--round">
										
																				<li>
											<a href="<?=$pejabat['facebook'];?>" class="social__item facebook" target="_blank">
												<i class="fa fa-facebook-square"></i>
											</a>
										</li>
										
																				<li>
											<a href="<?=$pejabat['twitter'];?>" class="social__item twitter" target="_blank">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										
										
																				<li class="tombol--round">
											<a href="#" class="">
												Profil Lengkap
											</a>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
					<?php } ?></div>
				</div>
			</div>
		</div>
	</div>
</section>
    <!-- Berita OPD, Kecamatan, Kelurahan -->
    <style type="text/css">
	.curriculum-event-thumb img {
		height: 250px;
		object-fit: cover;
	}
	.curriculum-event-thumb .category-link {
		background: #46af49;
		top: 10px;
		left: 0;
		padding: 7px 15px 5px;
		text-transform: none;
		border-radius: 0;
		box-shadow: 0 1px 3px 0 rgba(27,27,27,.1), 0 4px 8px 0 rgba(27,27,27,.1);
	}
	.curriculum-event-content {
		padding: 10px 15px;
	}
	.curriculum-event-content .title {
		font-size: 17px;
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		line-height: 24px;
		max-height: 75px;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
	}
	.curriculum-event .icon-text-item {
		color: #28893ba8;
		margin-bottom: 10px;
		font-size: 13px;
	}
	.icon-text-item .text {
		margin-top: 3px;
	}
	.control-item {
		font-family: 'Lato', sans-serif;
	}
	.tab-control a {
		color: #696969;
	}
	.tab-control.active a {
		color: #46ad48;
	}
	.tab-control a:after {
		background-color: #46ad48;
	}
	.course-details-control {
		background-color: #f6f6f6;
	}
	.course-details {
		border-radius: 0;
	}
	.curriculum-event {
		border-radius: 0;
	}
	.course-details .tab-content {
		padding: 50px 60px 30px;
	}
	.c-primary {
		color: #46af49;
		fill: #46af49;
	}
	.ycp .belah .handap div.title {
		line-height: 15px;
    	margin-top: 10px;
	}
	@media (max-width: 768px) {
		.course-details .tab-content {
			padding: 15px 0 10px!important;
		}
		.curriculum-event-wrap .curriculum-event {
			margin-bottom: 0;
		}
		.curriculum-event {
			box-shadow: 2px 2px 2px 0 rgba(18, 25, 33, 0.2);
		}
		.tab-control {
			display: inline-flex;
		}
		.course-details-control {
			padding: 0px 5px 10px;
		}
		.course-details-control .tab-control a {
			padding: 0 10px 10px 10px;
    		font-size: 10px;
		}
		.course-details-control .tab-control {
			width: 30%;
		}
		.curriculum-event-thumb img {
			height: 160px;
		}
		.curriculum-event-thumb .category-link {
			font-size: 10px;
			padding: 5px 10px;
			top: 0
		}
		.curriculum-event-content {
			padding: 5px 10px;
		}
		.curriculum-event .icon-text-item {
			margin-bottom: 0px;
			font-size: 10px;
		}
		.curriculum-event-content .title {
			font-size: 13px;
			line-height: 19px;
			margin-top: 3px;
		}
	}
</style>
<section class="negative-margin-top80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="course-details">
					<ul class="course-details-control" role="tablist">

						<li role="presentation" class="tab-control active">
							<a href="#opd" role="tab" data-toggle="tab" class="control-item">Berita HUMAS</a>
						</li>

						<li role="presentation" class="tab-control">
							<a href="#kecamatan" role="tab" data-toggle="tab" class="control-item">KECAMATAN</a>
						</li>

						<li role="presentation" class="tab-control">
							<a href="#kelurahan" role="tab" data-toggle="tab" class="control-item">KELURAHAN</a>
						</li>

					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="opd">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="curriculum-event-wrap">
                                        
                                        <!--berita-->
                                        <?php
                                        	$post_by_categorys = $this->post()->getPostByCategory('8', '6', 'DESC', WEB_LANG_ID);
                                        	foreach($post_by_categorys as $list_post){
                                        ?>
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>">
														<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$list_post['picture'];?>" alt="<?=$list_post['title'];?>">
													</a>
													<div class="category-link">
														<a href="#" target="_blank" class="c-white">
															HUMAS WAJO
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															<?=$this->pocore()->call->podatetime->tgl_indo($list_post['date']);?>
														</div>
													</div>
													<a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>" class="h5 title"><?=$list_post['title'];?></a>
												</div>
											</div>
										</div>
										<?php } ?>
										<!--endberita-->
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kecamatan">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="curriculum-event-wrap">
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/ikm-indeks-kepuasan-masyarakat-kecamatan-samarinda-kota-YVQRU">
														<img src="https://samarindakota.go.id/upload/news/samarinda-kota/2019-08/09/ikm-indeks-kepuasan-masyarakat-kecamatan-samarinda-kota-YVQRU_m.jpeg" alt="IKM (Indeks Kepuasan Masyarakat) Kecamatan Samarinda Kota">
													</a>
													<div class="category-link">
														<a href="https://kec-samarinda-kota.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Samarinda Kota
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															3 Hari Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 7 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/ikm-indeks-kepuasan-masyarakat-kecamatan-samarinda-kota-YVQRU" class="h5 title">IKM (Indeks Kepuasan Masyarakat) Kecamatan Samarinda Kota</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/upacara-penutupan-tmmd-ke-105-tahun-2019-CVOTM">
														<img src="https://samarindakota.go.id/upload/news/palaran/2019-08/08/upacara-penutupan-tmmd-ke-105-tahun-2019-CVOTM_m.jpg" alt="Upacara penutupan TMMD ke 105 tahun 2019">
													</a>
													<div class="category-link">
														<a href="https://kec-palaran.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Palaran
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															4 Hari Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 9 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/upacara-penutupan-tmmd-ke-105-tahun-2019-CVOTM" class="h5 title">Upacara penutupan TMMD ke 105 tahun 2019</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/pemadaman-hutan-belukar-di-wilayah-kelurahan-bantuas-HUPER">
														<img src="https://samarindakota.go.id/upload/news/palaran/2019-08/04/pemadaman-hutan-belukar-di-wilayah-kelurahan-bantuas-HUPER_m.jpg" alt="Pemadaman hutan belukar di wilayah kelurahan Bantuas">
													</a>
													<div class="category-link">
														<a href="https://kec-palaran.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Palaran
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															1 Minggu Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 9 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/pemadaman-hutan-belukar-di-wilayah-kelurahan-bantuas-HUPER" class="h5 title">Pemadaman hutan belukar di wilayah kelurahan Bantuas</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/silaturahmi-dan-syukuran-kontingen-peda-ktna-kota-samarinda-MPGYR">
														<img src="https://samarindakota.go.id/upload/news/palaran/2019-08/04/silaturahmi-dan-syukuran-kontingen-peda-ktna-kota-samarinda-MPGYR_m.jpg" alt="Silaturahmi dan syukuran Kontingen PEDA KTNA kota Samarinda">
													</a>
													<div class="category-link">
														<a href="https://kec-palaran.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Palaran
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															1 Minggu Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 5 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/silaturahmi-dan-syukuran-kontingen-peda-ktna-kota-samarinda-MPGYR" class="h5 title">Silaturahmi dan syukuran Kontingen PEDA KTNA kota Samarinda</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/rakor-tahapan-pemilu-kepala-daerah-serentak-tahun-2020-FXPMI">
														<img src="https://samarindakota.go.id/upload/news/palaran/2019-08/02/rakor-tahapan-pemilu-kepala-daerah-serentak-tahun-2020-FXPMI_m.jpg" alt="Rakor Tahapan pemilu Kepala Daerah Serentak tahun 2020">
													</a>
													<div class="category-link">
														<a href="https://kec-palaran.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Palaran
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															1 Minggu Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 5 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/rakor-tahapan-pemilu-kepala-daerah-serentak-tahun-2020-FXPMI" class="h5 title">Rakor Tahapan pemilu Kepala Daerah Serentak tahun 2020</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kecamatan/sosialisasi-kajian-resiko-bencana-dan-pendataan-pasca-banjir-ZVQTU">
														<img src="https://samarindakota.go.id/upload/news/palaran/2019-08/01/sosialisasi-kajian-resiko-bencana-dan-pendataan-pasca-banjir-ZVQTU_m.jpg" alt="Sosialisasi kajian resiko bencana dan pendataan pasca banjir">
													</a>
													<div class="category-link">
														<a href="https://kec-palaran.samarindakota.go.id" target="_blank" class="c-white">
															Kecamatan Palaran
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															1 Minggu Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 10 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kecamatan/sosialisasi-kajian-resiko-bencana-dan-pendataan-pasca-banjir-ZVQTU" class="h5 title">Sosialisasi kajian resiko bencana dan pendataan pasca banjir</a>
												</div>
											</div>
										</div>
																			</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kelurahan">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="curriculum-event-wrap">
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/lomba-futsal-se-kecamatan-sungai-kunjang-dalam-rangka-memperingati-hari-anak-nasional-2019-JVGEA">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/lomba-futsal-se-kecamatan-sungai-kunjang-dalam-rangka-memperingati-hari-anak-nasional-2019-JVGEA_m.jpg" alt="Lomba Futsal Se-Kecamatan Sungai Kunjang Dalam Rangka Memperingati Hari Anak Nasional 2019">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															15 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 1 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/lomba-futsal-se-kecamatan-sungai-kunjang-dalam-rangka-memperingati-hari-anak-nasional-2019-JVGEA" class="h5 title">Lomba Futsal Se-Kecamatan Sungai Kunjang Dalam Rangka Memperingati Hari Anak Nasional 2019</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/technical-meeting-lomba-futsal-dalam-rangka-memperingati-hari-anak-nasional-2019-MGHKC">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/technical-meeting-lomba-futsal-dalam-rangka-memperingati-hari-anak-nasional-2019-MGHKC_m.jpg" alt="Technical Meeting Lomba Futsal Dalam Rangka Memperingati Hari Anak Nasional 2019">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															15 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 1 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/technical-meeting-lomba-futsal-dalam-rangka-memperingati-hari-anak-nasional-2019-MGHKC" class="h5 title">Technical Meeting Lomba Futsal Dalam Rangka Memperingati Hari Anak Nasional 2019</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/pengumpulan-data-dasar-keluarga-di-wilayah-kelurahan-karang-asam-ulu-dkk-XBWIY">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/pengumpulan-data-dasar-keluarga-di-wilayah-kelurahan-karang-asam-ulu-dkk-XBWIY_m.jpg" alt="Pengumpulan Data Dasar Keluarga di Wilayah Kelurahan Karang Asam Ulu (DKK)">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															16 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 2 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/pengumpulan-data-dasar-keluarga-di-wilayah-kelurahan-karang-asam-ulu-dkk-XBWIY" class="h5 title">Pengumpulan Data Dasar Keluarga di Wilayah Kelurahan Karang Asam Ulu (DKK)</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/tatap-muka-tim-wasev-kepada-masyarakat-di-lokasi-tmmd-jalan-rapak-indah-2-rt-41-LYAZE">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/tatap-muka-tim-wasev-kepada-masyarakat-di-lokasi-tmmd-jalan-rapak-indah-2-rt-41-LYAZE_m.jpg" alt="Tatap Muka Tim WASEV kepada Masyarakat di Lokasi TMMD Jalan Rapak Indah 2 RT. 41">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															16 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 2 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/tatap-muka-tim-wasev-kepada-masyarakat-di-lokasi-tmmd-jalan-rapak-indah-2-rt-41-LYAZE" class="h5 title">Tatap Muka Tim WASEV kepada Masyarakat di Lokasi TMMD Jalan Rapak Indah 2 RT. 41</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/pelatihan-dasar-perbaikan-handphone-KGEXS">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/pelatihan-dasar-perbaikan-handphone-KGEXS_m.jpg" alt="Pelatihan Dasar Perbaikan Handphone">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															16 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 2 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/pelatihan-dasar-perbaikan-handphone-KGEXS" class="h5 title">Pelatihan Dasar Perbaikan Handphone</a>
												</div>
											</div>
										</div>
																				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="curriculum-event c-primary" data-mh="curriculum">
												<div class="curriculum-event-thumb">
													<a href="https://samarindakota.go.id/website/berita/kelurahan/kerja-bakti-mengecat-sekolah-tk-negeri-2-loa-bakung-YUERK">
														<img src="https://samarindakota.go.id/upload/news/karang-asam-ulu/2019-08/11/kerja-bakti-mengecat-sekolah-tk-negeri-2-loa-bakung-YUERK_m.jpg" alt="Kerja Bakti Mengecat Sekolah TK Negeri 2 Loa Bakung">
													</a>
													<div class="category-link">
														<a href="https://kel-karang-asam-ulu.samarindakota.go.id" target="_blank" class="c-white">
															Kelurahan Karang Asam Ulu
														</a>
													</div>
												</div>
												<div class="curriculum-event-content">
													<div class="icon-text-item display-flex">
														<div class="text">
															<i class="fa fa-clock-o"></i> 
															16 Jam Yang Lalu															&nbsp;
															<i class="fa fa-eye"></i> 2 Kali
														</div>
													</div>
													<a href="https://samarindakota.go.id/website/berita/kelurahan/kerja-bakti-mengecat-sekolah-tk-negeri-2-loa-bakung-YUERK" class="h5 title">Kerja Bakti Mengecat Sekolah TK Negeri 2 Loa Bakung</a>
												</div>
											</div>
										</div>
																			</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>    
	<!-- Agenda Kota -->              <!-- Pengumuman --> 
   
    <!-- PELAYANAN -->
    

    <!-- Channel Youtube Kota Samarinda -->
    <style type="text/css">
	li.gpr-kominfo-widget-list-item small{
		color: #1171a5!important;
	}
</style>

<section class="medium-padding100">
	<div class="bg" style="width: 100%;
    	height: 600px;
    	position: absolute;
    	background: #e74c3c;
    	margin-top: -30px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading align-left">
					<h4 class="heading-title c-white" style="font-family: 'Lato', sans-serif;margin-bottom:0">
						CHANNEL YOUTUBE
					</h4>
					<p class="c-white">
    					Sumber: <a href="https://www.youtube.com/channel/UCetHuBC86XMH1C4L8CHE2Yg" class="c-white">Youtube</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
				<div id="unix" data-ycp_title="Humas Wajo" data-ycp_channel="UCetHuBC86XMH1C4L8CHE2Yg"></div>
			</div>
			<div class="col-lg-3 sembunyi">
				<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
				<style type="text/css">
					li.gpr-kominfo-widget-list-item {
						padding-left: 15px!important;
					}
					li.gpr-kominfo-widget-icon-artikel-berita-gpr {
						background: none;
					}
					#gpr-kominfo-widget-header {
						height: 75px!important;
					}
					#gpr-kominfo-widget-body {
						height: 470px;
					}
					#gpr-kominfo-widget-container {
						margin-top: -90px;
						height: 590px;
						margin-left: -25px;
						width: 295px!important;
						box-shadow: 0 4px 4px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
						-webkit-border-radius: 0!important;
						-moz-border-radius: 0!important;
						border-radius: 0!important;
					}
					#gpr-kominfo-widget-list {
						height: 465px;
						overflow: hidden;
						overflow-y: scroll;
					}
					#gpr-kominfo-widget-footer {
						height: 50px!important;
						margin-top: -8px;
						background-size: 95% 80%!important;
					}
				</style>
				<div id="gpr-kominfo-widget-container"></div>
			</div>
		</div>
	</div>
</section>
    <!-- Galeri Kota Samarinda -->
    <style type="text/css">
	.slider-3-items .swiper-slide img {
		max-height: 350px;
		height: 350px;
    	object-fit: cover;
	}
	.section-galeri {
		padding: 20px 0
	}
</style>
<section class="crumina-module crumina-module-slider navigation-center-both-sides slider-3-items align-center" style="margin-bottom: 50px;">
	<div class="container">
		<div class="row">
			<div class="crumina-module-img-content">
				<div class="crumina-module crumina-heading">
					<h3 class="heading-title pimpinan-title c-primary">
						GALERI KOTA
					</h3>
					<div class="heading-text pimpinan-text">
						Berikut ini beberapa foto-foto kegiatan yang diambil langsung<br/> 
						dari website-website dinas yang sudah terintegrasi secara acak.
					</div>
				</div>
			</div>
			<br/>
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="swiper-container pagination-bottom" data-show-items="2" data-effect="coverflow" data-centered-slider="true" data-nospace="true" data-stretch="80" data-depth="250">
					<div class="swiper-wrapper">
											<?php
	$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
	foreach($gallerys as $gal){
?>	
												<div class="swiper-slide">
							<img src="https<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['picture'];?>" alt="">
						</div>
											<?php } ?>
										
											</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<div class="btn-prev">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
				<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
			</div>

			<div class="btn-next">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
				<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
			</div>

			<a href="https://samarindakota.go.id/website/galeri" class="btn btn--green btn--with-shadow btn-persegi" style="margin-top: 30px">
				Selengkapnya
			</a>
		</div>
	</div>
</section>
    <div class="row">
        <div class="work-full-width">
            <div id="instafeed-gallery-feed" class="gallery row no-gutter">
        </div>
        <button id="btn-instafeed-load" class="btn">Load more</button>
    </div>

    <!-- Event Kota Samarinda -->
    <section class="crumina-module crumina-module-slider medium-padding50 bg-primary-color" style="background: #e74c3c;
    margin-top: -30px;">
	<div class="container">
		<div class="row">

			<div class="crumina-module-img-content">
				<div class="crumina-module crumina-heading">
					<h3 class="heading-title pimpinan-title c-white" style="font-family: 'Lato', sans-serif;
    					margin-bottom: 0;">
						AGENDA
					</h3>
					<div class="heading-text pimpinan-text c-white" style="margin-top: 0">
						Sumber: Pemerintah Kabupaten Wajo
					</div>
				</div>
			</div>
			<br/>
			

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="swiper-container" data-effect="fade">
					<div class="swiper-wrapper">
					    	<?php
                  $agendas = $this->pocore()->call->podb->from('agenda')
                    ->orderBy('id DESC')
                    ->limit ('3')
                    ->fetchAll();
                   
                
                  foreach($agendas as $agenda){
                ?>	
												<div class="swiper-slide">
							<img src="<?=$agenda['foto'];?>" alt="<?=$agenda['judul_agenda'];?>" data-swiper-parallax="-200">
						</div>
												<?php } ?>
						
						
											</div>
				</div>
			</div>
			<div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-12 col-xs-12">
				<div class="slider-slides slider-slides--round-text">
					<style type="text/css">
						.slider-slides--round-text .slides-item:after{
							background-color: #297738;
						}
						.slides-item.slide-active {
							box-shadow: 0px 0px 0px 0 rgba(40,137,59,.45);
						}
					</style>
						<?php
                  $agendas = $this->pocore()->call->podb->from('agenda')
                    ->orderBy('id DESC')
                    ->limit ('3')
                    ->fetchAll();
                   $no = 0;
                   $no++; 
                  foreach($agendas as $agenda){
                ?>	
					 <?php   
										echo"	<div class='slides-item slide-active'>
											   
						<div class='number' style='border-color: #297738;line-height: 54px;'>$no</div>";?>
							<div class="crumina-module crumina-heading custom-color c-white">
								<h5 class="heading-title" style="margin-bottom: 15px;"><?=$agenda['judul_agenda'];?></h5>
								<div class="heading-text">
									<i class="fa fa-map-marker"></i> <?=$agenda['lokasi'];?>
									<i class="fa fa-calendar"></i> <?=$agenda['tanggal'];?>
								</div>
							</div>
						</div>
						<?php } ?>
						
				    </div>
			</div>
		</div>
	</div>
</section>
    <!-- Aplikasi IT -->
    

	<style type="text/css">
	#bg-tautan {
		background: #f8f8f8;
		padding: 3em 0;
	}
	.tautan {
		position: relative;
		text-align: center;
	}
	.tautan #tautan-kiri, .tautan #right {
		height: 250px;
	}
	.tautan #tautan-kiri {
		background: #1b1b1b;
		position: absolute;
		bottom: 0;
	}
	.tautan #tautan-kanan {
		position: absolute;
		background: #05a13c;
	}
	.tautan #tautan-konten {
		line-height: 14px;
		color: #e74c3c;
		font-family: Lato,Helvetica,sans-serif;
		font-weight: 700;
		padding: 2em 0;
		margin-left: auto;
		margin-right: auto;
	}
	.tautan .title {
		text-align: left;
	}
	.tautan hr {
		background: #25c768;
		border: none;
		display: inline-block;
		width: 50px;
		height: 4px;
		left: -1.55em;
		top: 1.8em;
		position: absolute;
	}
	.tautan .title p {
		display: inline-block;
		margin-left: 2em;
		font-weight: 700;
		font-size: 18px;
	}
	.tautan .title p.eksternal {
		margin-left: -1.5em;
	}
	.tautan a, .tautan img {
		transition: all .3s ease-in;
	}
	.tautan #tautan-konten img.eksternal {
		margin-left: -50px;
	}
	.tautan #tautan-konten img {
		height: 125px;
		width: auto;
		padding: 2px 0em;
	}
	@media  screen and (min-width: 48em) {
		.tautan #tautan-kiri, .tautan #tautan-kanan {
			height: 200px;
		}
	}
	@media  screen and (min-width: 48em) {
		.tautan #tautan-kanan {
			width: 40px;
			right: -2.5em;
			top: 1.6em;
		}
		.tautan #tautan-kiri {
			left: -40px;
			width: 40px;
			margin-bottom: 20px;
		}
	}
</style>

<section id="bg-tautan"> 
	<div class="tautan container">
		<div class="row" style="background: #ffff">
			<div class="col-lg-9">
				<div id="tautan-kiri"></div>
				<div id="tautan-konten">
					<div class="title">
						<hr>
						<p>TAUTAN INTERNAL</p>
					</div>

											<a target=&quot;_blank&quot; href="http://git.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/git-source-repo.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="https://apes.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/jdih-samarinda.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="http://api.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/samarinda-api.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="http://data.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/open-data-samarinda.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="https://sipedas.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/sipedas-samarinda.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="https://pmks.samarindakota.go.id">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/pmks-samarinda.jpg" style="display: inline-block;">
						</a>
											<a target=&quot;_blank&quot; href="http://e-tepian.samarindakota.go.id/">
							<img alt="" src="https://samarindakota.go.id/storage/portal/tautan/2018-12/12/e-tepian.jpeg" style="display: inline-block;">
						</a>
						

				</div>
			</div>
			<div class="col-lg-3">
				<div id="tautan-konten">
					<div class="title">
						<p class="eksternal">TAUTAN EKSTERNAL</p>
					</div>

											<a target=&quot;_blank&quot; href="http://www.ksp.go.id/">
							<img alt="" class="eksternal" src="https://samarindakota.go.id/storage/portal/tautan/2018-10/13/eksternal.jpg" style="display: inline-block;">
						</a>
						

				</div>
				<div id="tautan-kanan"></div>
			</div>
		</div>
	</div>
</section>    
	<style type="text/css">
	.testimonial-item-arrow {
		padding: 10px;
		border-radius: 0;
		box-shadow: 1px 1px 3px 1px rgba(18, 25, 33, 0.1);
	}
</style>
<section class="crumina-module crumina-module-slider " style="background: #f8f8f8;
    margin-top: -50px;
    margin-bottom: -45px;
    padding-top: 80px;">

    <div class="bg" style="width: 100%;
    	height: 500px;
    	position: absolute;
    	background: #e74c3c;
    	margin-top: -30px;"></div>

	<div class="container">
		<div class="row">
			<div class="crumina-module crumina-module-img-bottom">
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module-img-content">
						<div class="crumina-module crumina-heading">
							<h3 class="heading-title c-white lato" style="margin-bottom: 0">
								SOSIAL MEDIA
							</h3>
							<div class="heading-text c-white lato" style="margin-top: 0;">
								Facebook &amp; Twitter Widget Plugin
							</div>
						</div>
					</div>
					<img class="img-bottom" src="https://samarindakota.go.id/assets/portal/img/man.png" alt="man">
				</div>

				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="swiper-container top-navigation" data-show-items="2">
								<div class="swiper-wrapper">

									<div class="swiper-slide">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">

												<div class="fb-page" data-href="https://www.facebook.com/kominfowajo" 
													data-tabs="timeline,events,messages" 
													data-height="505" 
													data-width="325"
													data-adapt-container-width="true"
													data-show-facepile="true"></div>

											</div>

										</div>
									</div>

									<div class="swiper-slide">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
												<a class="twitter-timeline"  href="https://twitter.com/wajokab" data-height="500">Tweets by @wajokab</a>
												<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

		</div>

		<style type="text/css">
	.logo-bawah {
		margin-top: 10px
	}
	.open-time {
		margin-left: 70px;
	}
	.open-time h5 {
		margin-bottom: 0;
		font-size: 18px;
		font-family: 'Lato', sans-serif;
		text-transform: uppercase;
	}
	.open-time p {	
		margin-bottom: 10px;
		color: #fff;
		font-size: 15.5px;
	}
	.open-time .info {
		color: #fff;
		font-size: 15.5px;
	}
	.contact-item .icon-bawah {
		color: #fff!important;
		fill: #fff!important;
	}
	.btn-persegi {
		padding: 15px 50px;
		border-radius: 5px;
	}
	.btn-persegi:after {
		box-shadow: 2px 3px 1px 0px rgba(1, 162, 60, 0.5)!important;
	}
	.footer {
		padding: 50px 0;
		box-shadow: 0 2px 8px 0 #dbdbdb;
	}
	.sub-footer {
		background: #f8f8f8;
		margin-top: 10px;
		text-align: left;
		padding: 0 0 10px;
	}
	.sub-footer span, .sub-footer a {
		color: #333;
		line-height: 18px;
	}
	.bg-footer {
		background: #f8f8f8;
		padding: 50px 0px 0 0;
	}
	.logo-bawah img {
		height: 85px;
	}
	@media (max-width: 768px) {
		.sembunyi {
			display: none;
		}
		.footer {
			padding: 20px 0;
		}
		.logo-bawah {
			margin-top: 0px;
		}
		body.crumina-grid .col-xs-12 {
			margin-top: 0;
		}
		.open-time h5 {
			font-size: 14px;
		}
		.footer .widget-title {
			margin-bottom: 10px;
		}
		.open-time p, .open-time .info {
			font-size: 11px;
		}
		.footer .w-contacts .btn {
			margin: 20px 0 5px;
		}
		.bg-footer {
			padding-right: 30px;
		}
		.sub-footer span, .sub-footer a {
			line-height: 14px;
			font-size: 10px;
		}
		.logo-bawah img {
			height: 60px;
		}
		.w-info .site-logo {
			margin-bottom: 5px;
		}
		.w-follow {
			font-size: 13px;
			margin-bottom: 10px
		}
	}

</style>
