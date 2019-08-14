<?=$this->layout('index');?>

<body>
<div class="container">
	<!--BREAKING NEWS -->
	<div id="breaking-news">
	<span>Berita Terkini</span>
	<?php
	$headlines = $this->post()->getHeadline('5', 'DESC', WEB_LANG_ID);
	foreach($headlines as $headline){
	?>
	<div class="breaking-news-scroll">
	<a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>" title=""><?=$headline['title'];?></a></li>
	
	</div>
	<?php } ?>
	</div><!--#END breaking-news-->

	<div class="section">
		<div class="row">
			<div class="site-content col-md-12">
				<div class="row">
					<div class="col-sm-12">
						<div id="home-slider">
							<div class="post feature-post">
							<div class="entry-header">
							<div class="entry-thumbnail">
							<img class="img-responsive" src="http://tangerangkab.go.id/images/1505057584.png" alt="" />
							</div></div>
							<div class="post-content">
							<h2 class="entry-title" style="font-size:20pt;">
							<a>Bupati dan Pemerintah Kabupaten Tangerang Meraih Penghargaan Keuangan</a>
							</h2>
							</div>
							</div>
							<!--/post-->
							<div class="post feature-post">
							<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1501587538.png" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>Dirgahayu Kemerdekaan Republik Indonesia Ke-72 </a>
											</h2>
										</div>
									</div><!--/post-->
																	<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1496720894.jpg" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>Prestasi SINOVIK 2017</a>
											</h2>
										</div>
									</div><!--/post-->
																	<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1486707849.png" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>Sosial Media Kabupaten Tangerang</a>
											</h2>
										</div>
									</div><!--/post-->
																	<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1486707775.png" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>Prestasi  Akuntabilitas Kinerja </a>
											</h2>
										</div>
									</div><!--/post-->
																	<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1483938786.jpg" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>One Team, One Spirit, One Goal</a>
											</h2>
										</div>
									</div><!--/post-->
																	<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="http://tangerangkab.go.id/images/1482737038.png" alt="" />
											</div>

										</div>
										<div class="post-content">
											<h2 class="entry-title" style="font-size:20pt;">
												<a>Ulang Tahun Kabupaten Tangerang ke-73</a>
											</h2>
										</div>
									</div><!--/post-->
																					</div>
					</div>
				</div>
				<div class="row">

					<div class="col-sm-3">
																																					<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
																								<img class="img-responsive" src="http://tangerangkab.go.id/images/1505057378_270x225.jpeg" alt="" />
											</div>
											<div class="catagory"><span><a>Kegiatan</a></span></div>
										</div>
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i><a>
														10-Sep-17
													</a></li>
													<li class="publish-date"><i class="fa fa-clock-o"></i><a>
														10:09pm
													</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/586">HAORNAS XXXIV 2017 BUPATI ZAKI RAIH PENGHARGAAN OLAHRAGA DARI KEMENPORA</a>
											</h2>
										</div>
									</div><!--/post-->
																																																																																																							</div>

																																																				<div class="col-sm-3">
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
																								<img class="img-responsive" src="http://tangerangkab.go.id/images/1504590260_270x225.jpg" alt="" />
											</div>
											<div class="catagory"><a>Kesehatan</a></div>
										</div>
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i>
														<a>
															05-Sep-17
														</a>
													</li>
													<li class="publish-date"><i class="fa fa-clock-o"></i>
														<a>
															12:09pm
														</a>
													</li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/576">PMI Kabupaten Tangerang Selenggarakan Bakti Sosial Operasi Katarak</a>
											</h2>
										</div>
									</div><!--/post-->
								</div>
																																			<div class="col-sm-3">
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
																								<img class="img-responsive" src="http://tangerangkab.go.id/images/1504084282_270x225.JPG" alt="" />
											</div>
											<div class="catagory"><a>Kegiatan</a></div>
										</div>
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i>
														<a>
															30-Aug-17
														</a>
													</li>
													<li class="publish-date"><i class="fa fa-clock-o"></i>
														<a>
															04:08pm
														</a>
													</li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/574">HUT PRAMUKA KE-56  PRAMUKA GARDA TERDEPAN PERUBAHAN GENERASI MUDA BANGSA</a>
											</h2>
										</div>
									</div><!--/post-->
								</div>
																																			<div class="col-sm-3">
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
																								<img class="img-responsive" src="http://tangerangkab.go.id/images/1503885903_270x225.jpg" alt="" />
											</div>
											<div class="catagory"><a>Kegiatan</a></div>
										</div>
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i>
														<a>
															28-Aug-17
														</a>
													</li>
													<li class="publish-date"><i class="fa fa-clock-o"></i>
														<a>
															09:08am
														</a>
													</li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/566">ZAKI MONITORING PILKADES </a>
											</h2>
										</div>
									</div><!--/post-->
								</div>
																													</div>
			</div><!--/#content-->
		</div>
	</div><!--/.section-->

	<div class="section">
		<div class="latest-news-wrapper">
			<h1 class="section-title"><span>Berita Terbaru</span></h1>
			<div id="latest-news-berita-baru">
															<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1505111860.jpeg" alt="" />
								</div>
								<div class="catagory"><span><a>KEBAKARAN</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												11-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												01:09pm
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/587">KEBAKARAN DI PT. H.K PLASTIK KOSAMBI</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1505057378.jpeg" alt="" />
								</div>
								<div class="catagory"><span><a>Kegiatan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												10-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												10:09pm
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/586">HAORNAS XXXIV 2017 BUPATI ZAKI RAIH PENGHARGAAN OLAHRAGA DARI KEMENPORA</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504856521.JPG" alt="" />
								</div>
								<div class="catagory"><span><a>Kegiatan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												08-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												02:09pm
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/585">Kemeriahan Hingga Bantuan Pada Hari Anak Nasional Tingkat Kab Tangerang</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504841463.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Berita </a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												08-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												10:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/584">Kejar Akreditasi, Puskemas Kresek Berbenah Diri</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504833454.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Satuan Pendidikan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												08-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												08:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/583">Juknis BOS, Permendikbud Nomor 26 Tahun 2017</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504832015.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Kurikulum</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												08-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												07:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/582">Silabus SD Tematik Terpadu Kurikulum 2013</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504770260.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Kegiatan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												07-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												02:09pm
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/581">KIRAB PORKAB DIMULAI DI KOSAMBI</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504753675.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Kesiswaan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												07-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												10:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/580">Kebijakan Baru Setiap Siswa Dua Rapor Sulit Diterapkan</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504752904.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Berita </a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												07-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												09:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/579">Puluhan Pejabat di Jajaran Dinas Kesehatan Dipromosi &amp; Dirotasi</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504752841.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Berita </a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												07-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												09:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/578">Sukses Perayaan HUT RI Dimulai Suskes Kesehatan Paskibra</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504752527.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Guru dan Tenaga Pendidik</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												07-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												09:09am
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/577">Kemdikbud Rumuskan Aturan Baru Tunjangan Guru</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1504590260.jpg" alt="" />
								</div>
								<div class="catagory"><span><a>Kesehatan</a></span></div>
							</div>
							<div class="post-content">
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><i class="fa fa-calendar"></i>
											<a>
												05-Sep-17
											</a>
										</li>
										<li class="publish-date"><i class="fa fa-clock-o"></i>
											<a>
												12:09pm
											</a>
										</li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="http://tangerangkab.go.id/detail-konten/show-berita/576">PMI Kabupaten Tangerang Selenggarakan Bakti Sosial Operasi Katarak</a>
								</h2>
							</div>
						</div><!--/post-->
												</div>
		</div><!--/.latest-news-wrapper-->
	</div><!--/.section-->

	<div class="section">
		<h1 class="section-title"><span>Sistem Informasi Tangerang Gemilang</span></h1>
		<div class="latest-news-wrapper">
			<div id="latest-news-aplikasi">
															<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482997853.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id/e-report2016/" target="_blank">E-Report</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482743322.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id/emonev/page_login.php" target="_blank">E-Monev</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482996698.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://sakip.tangerangkab.go.id/portal/home" target="_blank">E-SAKIP</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482742884.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id:86/" target="_blank">PPID : Pejabat Pengelola Informasi &amp; Dokumentasi (Permohonan Informasi Publik Online)</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482980672.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://bkol.tangerangkab.go.id" target="_blank">E-Ketenagakerjaan</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1482998525.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://pajak.tangerangkab.go.id" target="_blank">Pajak Online</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1484100800.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="https://sirup.lkpp.go.id/sirup/home/rekapKldi?idKldi=D50" target="_blank">SiRUP : Sistem Informasi Rencana Umum Pengadaan</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1484101156.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="https://lpse.tangerangkab.go.id/eproc4" target="_blank">LPSE : Layanan Pengadaan Secara Elektronik</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1484108560.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id:89/" target="_blank">Presensi Online</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1484629233.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id:83/" target="_blank">SIMPEDU : Sistem Informasi Pengaduan Terpadu</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1484636807.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://app.tangerangkab.go.id:88/" target="_blank">SIMONOF</a>
								</h2>
							</div>
						</div><!--/post-->
											<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="http://tangerangkab.go.id/images/1496635124.png" alt="" />
								</div>

							</div>
							<div class="post-content" style="padding:5px 15px;">
								<h2 class="entry-title">
									<a href="http://adik.9tins.com" target="_blank">ADIKBANGTARU: Aplikasi Data dan Informasi Keuangan Tata Ruang &amp; Bangunan</a>
								</h2>
							</div>
						</div><!--/post-->
												</div>
		</div><!--/.latest-news-wrapper-->
	</div><!--/.section-->

	<div class="section">
		<div class="latest-news-wrapper">
			<h1 class="section-title"><span>Link SKPD</span></h1>
			<div id="latest-news-jejaring" style="padding-top:25px;">
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/disnaker" target="_blank">Dinas Tenaga Kerja</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/diskominfo" target="_blank">Dinas Komunikasi dan Informatika</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/disdik" target="_blank">Dinas Pendidikan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dinkes" target="_blank">Dinas Kesehatan</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dinsos" target="_blank">Dinas Sosial</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/disbudpar" target="_blank">Dinas Pemuda Olahraga, Kebudayaan dan Pariwisata</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/disdukcapil" target="_blank">Dinas Kependudukan dan Pencatatan Sipil</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/binamarga" target="_blank">Dinas Bina Marga dan Sumber Daya Air</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/tataruang" target="_blank">Dinas Tata Ruang dan Bangunan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/perumahan" target="_blank">Dinas Perumahan, Pemukiman, dan Pemakaman</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dishub" target="_blank">Dinas Perhubungan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/koperasi" target="_blank">Dinas Koperasi dan Usaha Mikro</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/perikanan" target="_blank">Dinas Perikanan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/disperindag" target="_blank">Dinas Perindustrian dan Perdagangan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/pertanian" target="_blank">Dinas Pertanian dan Ketahanan Pangan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/lingkunganhidup" target="_blank">Dinas Lingkungan Hidup dan Kebersihan</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/bapenda" target="_blank">Badan Pendapatan Daerah</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/bpkad" target="_blank">Badan Pengelola Keuangan dan Aset Daerah</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/inspektorat" target="_blank">Inspektorat</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kepegawaian" target="_blank">Badan Kepegawaian Pengembangan SDM</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dpmptsp" target="_blank">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dpppa" target="_blank">Dinas Pemberdayaan Perempuan dan Perlindungan Anak</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dpmpd" target="_blank">Dinas Pemberdayaan Masyarakat dan Pemerintahan Desa</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/bappeda" target="_blank">Badan Perencanaan Pembangunan Daerah</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/perpustakaan" target="_blank">Dinas Perpustakaan dan Arsip</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/bpbd" target="_blank">Badan Penanggulangan Bencana Daerah</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/dppkb" target="_blank">Dinas Pengendalian Penduduk dan Keluarga Berencana</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/satpolpp" target="_blank">Satuan Polisi Pamong Praja</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/setwan" target="_blank">Sekertaris Dewan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/balaraja" target="_blank">Kecamatan Balaraja</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/cikupa" target="_blank">Kecamatan Cikupa</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/cisauk" target="_blank">Kecamatan Cisauk</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/cisoka" target="_blank">Kecamatan Cisoka</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/curug" target="_blank">Kecamatan Curug</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/gunungkaler" target="_blank">Kecamatan Gunung Kaler</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/jambe" target="_blank">Kecamatan Jambe</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/jayanti" target="_blank">Kecamatan Jayanti</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kelapadua" target="_blank">Kecamatan Kelapa Dua</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kemiri" target="_blank">Kecamatan Kemiri</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kosambi" target="_blank">Kecamatan Kosambi</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kresek" target="_blank">Kecamatan Kresek</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kronjo" target="_blank">Kecamatan Kronjo</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/legok" target="_blank">Kecamatan Legok</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/mauk" target="_blank">Kecamatan Mauk</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/mekarbaru" target="_blank">Kecamatan Mekar Baru</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/pagedangan" target="_blank">Kecamatan Pagedangan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/pakuhaji" target="_blank">Kecamatan Pakuhaji</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/panongan" target="_blank">Kecamatan Panongan</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/pasarkemis" target="_blank">Kecamatan Pasar Kemis</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/rajeg" target="_blank">Kecamatan Rajeg</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/sepatan" target="_blank">Kecamatan Sepatan</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/sepatantimur" target="_blank">Kecamatan Sepatan Timur</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/sindangjaya" target="_blank">Kecamatan Sindang Jaya</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/solear" target="_blank">Kecamatan Solear</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/sukadiri" target="_blank">Kecamatan Sukadiri</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/sukamulya" target="_blank">Kecamatan Sukamulya</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/teluknaga" target="_blank">Kecamatan Teluk Naga</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/tigaraksa" target="_blank">Kecamatan Tigaraksa</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/rsutangerang" target="_blank">Rumah Sakit Umum Tangerang</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/rsudbalaraja" target="_blank">Rumah Sakit Umum Daerah Balaraja</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kesbangpol" target="_blank">Kesbangpol</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/setda" target="_blank">Setda</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kerjasama" target="_blank">Bidang Kerjasama Sekretariat Daerah</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/englishpage" target="_blank">English Page</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
									<div class="league-result" style="margin-right:10%">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/kohod" target="_blank">Desa IT Kohod</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/korpri" target="_blank">KORPRI Kabupaten Tangerang</a>
									</div>
								</div>
							</li>
		        							<li>
								<div class="row">
									<div>
										<a class="team-name" href="http://tangerangkab.go.id/jdih" target="_blank">Jaringan Dokumentasi dan Informasi Hukum</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
							</div>
		</div>
	</div>

	<div class="section">
		<div class="row">
			<div class="site-content col-md-6">
				<div class="section photo-gallery">
					<h1 class="section-title title">Galeri Foto</h1>
					<div id="photo-gallery" class="carousel slide carousel-fade post" data-ride="carousel">
						<div class="carousel-inner">
																															<div class="item active">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738585.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738700.JPG" alt="" /></a>
										<h2><a>Arahan Bupati Kepada Kepala Dinas, Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738729.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738743.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738796.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482738963.JPG" alt="" /></a>
										<h2><a>Bupati mengibarkan bendera tanda Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73 dimulai</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739009.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739056.JPG" alt="" /></a>
										<h2><a>Bupati dan Sekda Kabupaten Tangerang Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739098.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalam Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739150.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalang Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739217.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalang Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739237.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalang Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482739275.JPG" alt="" /></a>
										<h2><a>Gerak Jalan Santai Dan Sepeda Santai Dalang Rangka Ulang Tahun Kabupaten Tangerang Ke-73</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482744205.jpeg" alt="" /></a>
										<h2><a> Tangerang Radio 93.4 FM Satu Suara Untuk Kearifan Lokal</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482745683.jpg" alt="" /></a>
										<h2><a>Gerakan Gemilang Tangerang Bersih 2016, Desa Buaran Bambu Kecamatan Paku Haji</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482745824.JPG" alt="" /></a>
										<h2><a>Gerakan Gemilang Tangerang Bersih 2016, Desa Cukang Galih Kecamatan Curug</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482745871.jpg" alt="" /></a>
										<h2><a>Gerakan Gemilang Tangerang Bersih 2016, Desa Curug Wetan Kecamatan Curug</a></h2>
									</div>
																																								<div class="item">
										<a><img class="img-responsive" src="http://tangerangkab.go.id/images/1482745923.jpg" alt="" /></a>
										<h2><a>Gerakan Gemilang Tangerang Bersih 2016, Kecamatan Rajeg</a></h2>
									</div>
																							
						</div><!--/carousel-inner-->

						<ol class="gallery-indicators carousel-indicators">
																						<li data-target="#photo-gallery" data-slide-to="0" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738585_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="1" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738700_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="2" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738729_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="3" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738743_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="4" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738796_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="5" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482738963_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="6" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739009_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="7" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739056_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="8" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739098_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="9" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739150_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="10" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739217_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="11" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739237_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="12" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482739275_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="13" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482744205_40x40.jpeg" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="14" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482745683_40x40.jpg" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="15" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482745824_40x40.JPG" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="16" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482745871_40x40.jpg" alt="" />
								</li>
																						<li data-target="#photo-gallery" data-slide-to="17" class="active">
																		<img class="img-responsive" src="http://tangerangkab.go.id/images/1482745923_40x40.jpg" alt="" />
								</li>
																				</ol><!--/gallery-indicators-->

						<div class="gallery-turner">
							<a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="right-photo" href="#photo-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div><!--/photo-gallery-->
			</div>

			<div class="site-content col-md-6">
				<div class="section">
					<h1 class="section-title" style="margin-bottom:50px;"><span>Video</span></h1>
					<div class="latest-news-wrapper">
						<div style="width:94%;">
							<div class="section photo-gallery" style="margin-top:-1%">
																																<div class="post" style="border-bottom:0px;">
										<div class="entry-header">
											<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VG_7x31TRg8" allowfullscreen></iframe>
											</div>
										</div>
										<div class="post-content" style="padding:20px 15px 10px 15px;">
											<div class="video-catagory">
												<h2 class="entry-title">
													<a>Bupati Tangerang Zaki Iskandar Mengucapkan Selamat Menjalankan Ibadah Puasa </a>
												</h2>
											</div>
										</div>
									</div><!--/post-->
																																																																												<div class="list-post" style="padding-bottom:5px;padding-top:5px;background:#fff;">
								<ul>
																																																																				<li><a href="https://www.youtube.com/watch?v=SVurbGgc0uM" style="padding:10px 15px;" target="_blank">Sanitasi Sekolah dalam membangun visi misi Kabupaten Tangerang melalui 25 Program Unggulan<i class="fa fa-angle-right"></i></a></li>
																																																		<li><a href="https://www.youtube.com/watch?v=MJRJWRgzyH4" style="padding:10px 15px;" target="_blank">Kemeriahan Karnaval Budaya HUT ke-73 Kabupaten Tangerang (TV ONE)<i class="fa fa-angle-right"></i></a></li>
																																														</ul>
								<ul>
									<li style="padding:10px 15px; text-align:center;">
											<span class="badge">
												<a href="http://tangerangkab.go.id/video/view" style="padding:0px; color:white;">
													Lihat Semua Video
												</a>
											</span>
									</li>
								</ul>
							</div><!--/list-post-->
						</div> <!-- /.video-section -->
						</div>
				</div><!--/.section-->
			</div>

		</div>

		<div class="col-md-12 col-sm-8">
			<div id="site-content">
				<div class="row">
					<div class="col-md-9 col-sm-6">
						<div class="left-content">
															<div class="section world-news">
									<h1 class="section-title title">Informasi Umum</h1>
									<div class="cat-menu">
										<ul class="list-inline">
											<li><a href="http://tangerangkab.go.id/berita/show/11">Lihat Semua</a></li>
										</ul>
									</div>
									<div class="post">
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i>
														<a href="#">
															26-Dec-16
														</a>
													</li>
													<li class="publish-date"><i class="fa fa-clock-o"></i>
														<a href="#">
															02:12pm
														</a>
													</li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/4">RATUSAN RIBU MASYARAKAT KABUPATEN TANGERANG SERENTAK LAKUKAN KEBERSIHAN MASAL</a>
											</h2>
											<div class="entry-content">
																																																			Kelapa
																											Dua
																											-
																											Dalam
																											rangka
																											memperingati
																											Hut
																											Kabupaten
																											Tangerang
																											Ke-73,
																											Bupati
																											Tangerang
																											A.
																											Zaki
																											Iskandar
																											mengajak
																											seluruh
																											masyarakat
																											Kabupaten
																											Tangerang
																											untuk
																											melakukan
																											gerakan
																											kebersihan
																											masal.
																											Acara
																											Seremonial
																											ini
																											dilaksanakan
																											di
																											Situ
																											Kelapa
																											Dua
																											Kecamatan
																											Kelapa
																											Dua
																											Kabupaten
																											Tangerang.
																											Kamis,
																											(22/12/2016).

Kepala
																										...
																								<br/>

											</div>
										</div>
										<div class="list-post">
											<ul>
																																																																																									<li><a href="http://tangerangkab.go.id/detail-konten/show-berita/3">ZAKI LAKUKAN PELETAKAN BATU PERTAMA PEMBANGUNAN INTAKE PDAM <i class="fa fa-angle-right"></i></a></li>
																																																																	<li><a href="http://tangerangkab.go.id/detail-konten/show-berita/431">ATURAN JAM KERJA ASN <i class="fa fa-angle-right"></i></a></li>
																																																																	<li><a href="http://tangerangkab.go.id/detail-konten/show-berita/444">KABUPATEN TANGERANG RAIH WTP 9 KALI BERTURUT-TURUT <i class="fa fa-angle-right"></i></a></li>
																																																																																																																																																																																																									</ul>
										</div><!--/list-post-->
									</div><!--/post-->
								</div><!--/.section-->
													</div><!--/.left-content-->

						<div class="left-content">
															<div class="section world-news">
									<h1 class="section-title title">Teknologi Informasi</h1>
									<div class="cat-menu">
										<ul class="list-inline">
											<li><a href="http://tangerangkab.go.id/berita/show/14">Lihat Semua</a></li>
										</ul>
									</div>
									<div class="post">
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-calendar"></i>
														<a href="#">
															27-Mar-17
														</a>
													</li>
													<li class="publish-date"><i class="fa fa-clock-o"></i>
														<a href="#">
															02:03pm
														</a>
													</li>
												</ul>
											</div>

											<h2 class="entry-title">
												<a href="http://tangerangkab.go.id/detail-konten/show-berita/351">Tata Cara Penggunaan Presensi Online</a>
											</h2>
											<div class="entry-content">
																																																			TATA
																											CARA
																											PENGGUNAAN
																											PRESENSI
																											ONLINE
																											KABUPATEN
																											TANGERANG

Presented
																											by:
																											DISKOMIFO
																											Kabupaten
																											Tangerang


	Panduan
																											presensi
																											bagi
																											Pegawai
																											(non
																											Admin),
																											berbentuk
																											video.
	
		Reset
																											Password
																											[lihat
																											disini]
		Intervensi
																											[lihat
																											disini]
	
	


&nbsp;

																																				</div>
										</div>
										<div class="list-post">
											<ul>
																																																																									</ul>
										</div><!--/list-post-->
									</div><!--/post-->
								</div><!--/.section-->
													</div><!--/.left-content-->

						<div class="left-content">
													</div><!--/.left-content-->

						<div class="left-content">
													</div><!--/.left-content-->
					</div>

					<div class="col-md-3 col-sm-6">
						<div id="sitebar">
							<div class="section sports-section widget">
								<h1 class="section-title title">Berita SKPD</h1>
								<div class="cat-menu">
									<ul class="list-inline">
										<li><a href="http://tangerangkab.go.id/berita-skpd/show">Lihat Semua</a></li>
									</ul>
								</div>
								<ul class="post-list">
																														<li>
												<div class="post small-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
																																															<img class="img-responsive" src="http://tangerangkab.go.id/images/1505111860_95x95.jpeg" />
																													</div>
													</div>
													<div class="post-content">
														<div class="video-catagory">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/587">
																Bpbd															</a>
														</div>
														<h2 class="entry-title">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/587">KEBAKARAN DI PT. H.K PLASTIK KOSAMBI</a>
														</h2>
													</div>
												</div><!--/post-->
											</li>
																					<li>
												<div class="post small-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
																																															<img class="img-responsive" src="http://tangerangkab.go.id/images/1505057378_95x95.jpeg" />
																													</div>
													</div>
													<div class="post-content">
														<div class="video-catagory">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/586">
																Diskominfo															</a>
														</div>
														<h2 class="entry-title">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/586">HAORNAS XXXIV 2017 BUPATI ZAKI RAIH PENGHARGAAN OLAHRAGA DARI KEMENPORA</a>
														</h2>
													</div>
												</div><!--/post-->
											</li>
																					<li>
												<div class="post small-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
																																															<img class="img-responsive" src="http://tangerangkab.go.id/images/1504832015_95x95.jpg" />
																													</div>
													</div>
													<div class="post-content">
														<div class="video-catagory">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/582">
																Disdik															</a>
														</div>
														<h2 class="entry-title">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/582">Silabus SD Tematik Terpadu Kurikulum 2013</a>
														</h2>
													</div>
												</div><!--/post-->
											</li>
																					<li>
												<div class="post small-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
																																															<img class="img-responsive" src="http://tangerangkab.go.id/images/1504833454_95x95.jpg" />
																													</div>
													</div>
													<div class="post-content">
														<div class="video-catagory">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/583">
																Disdik															</a>
														</div>
														<h2 class="entry-title">
															<a href="http://tangerangkab.go.id/detail-konten/show-berita/583">Juknis BOS, Permendikbud Nomor 26 Tahun 2017</a>
														</h2>
													</div>
												</div><!--/post-->
											</li>
																											</ul>
							</div><!--/#widget-->

							<div class="widget meta-widget">
								<div class="meta-tab">
									<div class="tab-content">
										<div class="add featured-add">
											<div class="widget follow-us">
												<h1 class="section-title title">Follow Us</h1>
												<ul class="list-inline social-icons">
																																										<li><a href="http://facebook.com/pemkabtangerang" target="_blank"><i class="fa fa-facebook"></i></a></li>
																																																								<li><a href="http://twitter.com/pemkabtangerang" target="_blank"><i class="fa fa-twitter"></i></a></li>
																																																								<li><a href="https://www.youtube.com/channel/UCtVWN-uKBS8MOyeYZiFGxmg" target="_blank"><i class="fa fa-youtube"></i></a></li>
																																							</ul>
											</div><!--/#widget-->
											<div class="widget">
												<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
	                                            <div id="gpr-kominfo-widget-container"></div>
											</div><!--/#widget-->
										</div>
									</div>
								</div>
							</div><!--/#widget-->
						</div><!--/#sitebar-->
					</div>
				</div>
			</div><!--/#site-content-->
		</div>
		</div>
	</div>

	<div class="section">
		<div class="latest-news-wrapper">
			<h1 class="section-title"><span>Media Promosi</span></h1>
			<div id="latest-news-promosi" style="padding-top:25px;">
									<div class="league-result" style="margin-right:10%;background-color: transparent;">
						<ul>
		        							<li>
								<div class="row">
									<div>
										<a href="http://" target="_blank">
											<img style="margin-bottom:10px;" src="http://tangerangkab.go.id/images/1482743625.png" alt="" />
										</a>
									</div>
								</div>
							</li>
		        						</ul>
					</div>
							</div>
		</div>
	</div>


      </div>

    </div>
