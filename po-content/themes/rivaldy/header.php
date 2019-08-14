<header class="header header-has-topbar" id="site-header">
			<div class="header-lines-decoration"><span></span></div>
			<div class="top-bar">
				<div class="container-fluid">
					<div class="top-bar-contact">
						<div class="site-logo">
							<a href="" class="full-block"></a>
							<img src="<?=$this->asset('/images/logo/logo-wajo-header.png')?>">
						</div>
					</div>
					<div class="nav-weather"> 
						<span id="icon-cuaca"></span>
						<span class="location" id="kota">SAMARINDA</span> 
						<span class="degree">
							<span id="weather"></span>
						</span> 
					</div>

					<style type="text/css">
						#tanggal {
							font-size: 11px!important;
						}
					</style>
					<div class="nav-weather" style="width: 170px;"> 
						<span class="location" id="tanggal" style="float:right;"></span> 
						<span class="degree" id="jam"></span> 
					</div>

					<div class="menu-kanan">
						<div class="baris-1">
							<div class="contact-item language-switcher">
								<svg class="utouch-icon world utouch-icon-world-map"><use xlink:href="#utouch-icon-world-map"></use></svg>
								<select>
									<option value="1">Indonesia</option>
									<option value="2">English</option>
								</select>
							</div>
						</div>
						<div class="baris-2">
							<div class="contact-item">
								<svg class="utouch-icon utouch-icon-letter"><use xlink:href="#utouch-icon-letter"></use></svg>
								<a href="https://mail.samarindakota.go.id" target="_blank">WEBMAIL</a>
							</div>
							<div class="contact-item">
								<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
								<a href="https://samarindakota.go.id/website/kontak-kami">KONTAK KAMI</a>
							</div>
						</div>

					</div>

					<a href="#" class="top-bar-close" id="top-bar-close-js">
						<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
					</a>

				</div>
			</div>

			<div class="container-fluid">
				<a href="#" id="top-bar-js" class="top-bar-link"><svg class="utouch-icon utouch-icon-arrow-top"><use xlink:href="#utouch-icon-arrow-top"></use></svg></a>
				<div class="header-content-wrapper">
					<nav id="primary-menu" class="primary-menu">
						<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
							<span class="mob-menu--title">Menu</span>
							<span id="menu-icon-wrapper" class="menu-icon-wrapper">
								<svg width="1000px" height="1000px">
									<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
									<path id="pathE" d="M 300 500 L 700 500"></path>
									<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
								</svg>
							</span>
						</a>
						<ul class="primary-menu-menu">
							<li class="active">
								<a href="https://samarindakota.go.id/website">Beranda</a>
							</li>
							<li class="">
								<a href="#">Selayang Pandang</a>
								<ul class="sub-menu">
																														<li>
												<a href="https://samarindakota.go.id/website/laman/sejarah-samarinda">
													Sejarah Samarinda
												</a>
											</li>
																																								<li>
												<a href="https://samarindakota.go.id/website/laman/visi-dan-misi">
													Visi dan Misi
												</a>
											</li>
																																								<li class="menu-item-has-children">
												<a href="#">
													Gambaran Umum
												</a>
												<ul class="sub-menu">
																										<li>
														<a href="https://samarindakota.go.id/website/laman/kondisi-geografis">
															Kondisi Geografis
														</a>
													</li>
																										<li>
														<a href="https://samarindakota.go.id/website/laman/kondisi-demografi">
															Kondisi Demografi
														</a>
													</li>
																										<li>
														<a href="https://samarindakota.go.id/website/laman/kesejahteraan-masyarakat">
															Kesejahteraan Masyarakat
														</a>
													</li>
																										<li>
														<a href="https://samarindakota.go.id/website/laman/pembagian-wilayah">
															Pembagian Wilayah
														</a>
													</li>
																									</ul>
											</li>
																																								<li>
												<a href="https://samarindakota.go.id/website/laman/makna-lambang">
													Makna Lambang
												</a>
											</li>
																																								<li>
												<a href="https://samarindakota.go.id/website/laman/landasan-hukum">
													Landasan Hukum
												</a>
											</li>
																											</ul>
							</li>

							<li class="menu-item-has-mega-menu menu-item-has-children">
								<a href="#">Pemerintahan</a>

								<div class="megamenu" style="background-image: url(https://samarindakota.go.id/assets/portal/img/menu-pemerintah.png);">
									<div class="megamenu-row">

										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Eksekutif</h5>
													<p class="megamenu-item-info-text">Informasi Eksekutif Pemerintah</p>
												</li>
																								<li>
													<a href="https://samarindakota.go.id/website/laman/walikota">
														Profil Walikota
													</a>
												</li>
																								<li>
													<a href="https://samarindakota.go.id/website/laman/wakil-walikota">
														Profil Wakil Walikota
													</a>
												</li>
																								<li>
													<a href="https://samarindakota.go.id/website/laman/sekretaris-daerah">
														Profil Sekretaris Daerah
													</a>
												</li>
																								<li>
													<a href="https://samarindakota.go.id/website/laman/pejabat-struktural">
														Pejabat Struktural
													</a>
												</li>
																								<li>
													<a href="https://samarindakota.go.id/website/laman/lhkpn">
														LHKPN
													</a>
												</li>
																							</ul>
										</div>
										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Perangkat Daerah</h5>
													<p class="megamenu-item-info-text">Informasi Perangkat Daerah</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/kesekretariatan">Kesekretariatan</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/badan-daerah">Badan Daerah</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/dinas">Dinas</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/kecamatan">Kecamatan</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/kelurahan">Kelurahan</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/pemerintahan/bumd">BUMD</a>
												</li>
											</ul>
										</div>
										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Dok. Perencanaan</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: BAPPEDA Kota Samarinda</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/perencanaan/rpjpd">RPJPD</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/perencanaan/rpjmd">RPJMD</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/perencanaan/renstra">Rencana Strategis</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/perencanaan/musrenbang">Musrenbang</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/perencanaan/rkpd">RKPD</a>
												</li>
											</ul>
										</div>


										<div class="col4">

										</div>

									</div>
								</div>
							</li>

							<li class="menu-item-has-mega-menu menu-item-has-children">
								<a href="#">Sarana & Prasarana</a>

								<div class="megamenu" style="background-image: url(https://samarindakota.go.id/assets/portal/img/menu-sarana.png);">
									<div class="megamenu-row">

										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Kesehatan</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Dinas Kesehatan</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/kesehatan?pages=rumah-sakit">Rumah Sakit</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/kesehatan?pages=puskesmas">Puskesmas</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/kesehatan?pages=apotik">Apotik</a>
												</li>
											</ul>
											<br/>
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Akomodasi</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Dinas Pariwisata</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/akomodasi?pages=hotel-kostel">Hotel & Kostel</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/akomodasi?pages=kost">Kost</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/akomodasi?pages=apartment">Apartement</a>
												</li>
											</ul>
										</div>
										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Pendidikan</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Dinas Pendidikan</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=tk-paud">TK / PAUD</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=sd">SD</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=smp">SMP</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=sma-smk">SMA / SMK</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=perguruan-tinggi">Perguruan Tinggi</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/pendidikan?pages=balai-kursus">Balai Kursus</a>
												</li>
											</ul>
											<br/>
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Fasilitas Kota</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Smart City</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/fasilitas?pages=cctv-online">CCTV Online</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/fasilitas?pages=tempat-rekreasi">Tempat Rekreasi</a>
												</li>
											</ul>
										</div>
										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Transportasi</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Dinas Perhubungan</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/transportasi?pages=angkutan-umum">Angkutan Umum</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/transportasi?pages=terminal">Terminal</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/transportasi?pages=bandara">Bandara</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/transportasi?pages=pelabuhan">Pelabuhan</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/transportasi?pages=shelter">Shelter</a>
												</li>
											</ul>
											
										</div>


										<div class="col4">
											<ul>
												<li class="megamenu-item-info">
													<h5 class="megamenu-item-info-title">Perbelanjaan</h5>
													<p class="megamenu-item-info-text">
														<small>Sumber: Dinas Perdagangan, Pasar & UMKM</small>
													</p>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/perbelanjaan?pages=mall-plaza">Mall & Plaza</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/perbelanjaan?pages=minimarket">Minimarket</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/perbelanjaan?pages=pasar-tradisional">Pasar Tradisional</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/perbelanjaan?pages=pasar-malam">Pasar Malam</a>
												</li>
												<li>
													<a href="https://samarindakota.go.id/website/sarana-prasarana/perbelanjaan?pages=rumah-makan">Resto & Rumah Makan</a>
												</li>
											</ul>
										</div>

									</div>
								</div>
							</li>
							<li class="">
								<a href="#">Layanan Publik</a>
								<ul class="sub-menu">
									<li>
										<a href="https://samarindakota.go.id/website/layanan/perizinan">
											Perizinan
										</a>
									</li>
									<li>
										<a href="https://samarindakota.go.id/website/layanan/kependudukan">
											Kependudukan
										</a>
									</li>
									<li>
										<a href="https://samarindakota.go.id/website/layanan/pengaduan-masyarakat">
											Pengaduan Masyarakat
										</a>
									</li>
									<li>
										<a href="https://samarindakota.go.id/website/layanan/permohonan-informasi">
											Permohonan Informasi
										</a>
									</li>
									<li>
										<a href="https://samarindakota.go.id/website/layanan/bursa-kerja">
											Bursa Kerja
										</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="https://samarindakota.go.id/website/samarinda-dalam-angka">Samarinda Dalam Angka</a>
							</li>
							<li class="">
								<a href="https://samarindakota.go.id/website/smart-city">Smart City</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>