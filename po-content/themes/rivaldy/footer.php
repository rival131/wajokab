<div class="bg-footer">
	<footer class="footer" id="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="widget w-info">
						<div class="site-logo logo-bawah">
							<a href="<?=BASE_URL;?>" class="full-block"></a>
							<img src="<?=$this->asset('/images/logo/footer-wajo.png')?>">
						</div>
					</div>
					<div class="widget w-follow">
						<ul>
							<li>Sosial Media :</li>
														<li><a href="https://facebook.com/PemerintahKotaSamarinda" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
																					<li><a href="https://twitter.com/pemkotsmd" target="_blank"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="https://instagram.com/pemkotsamarinda" target="_blank"><i class="fa fa-instagram"></i></a></li>
																					<li><a href="https://linkedin.com/enterwindcom" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
													</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="open-time">
						<h5 class="widget-title">Jam Operasional</h5>
						<p><strong>Hari Kerja:</strong><br>Senin - Kamis: 7.30 s/d 16.00<br> Jum'at: 7.30 s/d 16.00</p>
						<p><strong>Libur:</strong><br> Sabtu, Minggu &amp; Libur Nasional</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-sm-offset-0 col-xs-12 sembunyi">&nbsp;</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-sm-offset-0 col-xs-12">
				
					<div class="widget w-contacts open-time">
						<h5 class="widget-title">Hotline</h5>
						<div class="contact-item display-flex">
							<svg class="utouch-icon icon-bawah utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
							<span class="info">xxx - Panggilan Darurat</span>
						</div>
						<div class="contact-item display-flex">
							<svg class="utouch-icon icon-bawah utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
							<span class="info">info@wajokab.go.id</span>
						</div>

					<!--	<a href="#" class="btn btn--green full-width btn--with-shadow js-message-popup cd-nav-trigger btn-persegi">
							Kirim Pesan
						</a>-->
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<span>
						Copyright © 2019 Dinas Komunikasi, Informatika dan Statistik Kabupaten Wajo					</span>
					
				</div>
			</div>
		</div>
	</div>
</div>		<div class="window-popup message-popup">
	<a href="#" class="popup-close js-popup-close cd-nav-trigger">
		<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
	</a>
	<div class="send-message-popup">
		<h5>KIRIM PESAN</h5>
		<p>Silahkan Kirim Pertanyaan, Kritik maupun Saran untuk kami melalui formulir berikut.</p>
		<form method="POST" action="https://samarindakota.go.id/website/kirim" accept-charset="UTF-8" autocomplete="off"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="jQHFf0OD75nNlVMARhNDwikhwlumJ87NKnoggtWz">
			<div class="with-icon">
				<input placeholder="Nama Anda" required name="nama" type="text">
				<svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
			</div>

			<div class="with-icon">
				<input placeholder="Alamat Email" required name="email" type="email">
				<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
			</div>

			<div class="with-icon">
				<input placeholder="Nomor Telepon" required name="telepon" type="tel">
				<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
			</div>

			<div class="with-icon">
				<textarea placeholder="Isi Pesan" required style="height: 180px" name="pesan" cols="50" rows="10"></textarea>
				<svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
			</div>

			<button class="btn btn--green btn--with-shadow full-width">
				Kirim Pesan
			</button>

		</form>
	</div>
</div>	