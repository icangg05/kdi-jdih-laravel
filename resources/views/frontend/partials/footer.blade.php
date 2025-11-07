@php
	$contact = '0821-3527-3000';
	$email   = 'pemkot@kendarikota.go.id';
	$address = 'Jl. Drs. H. Abd. Silondae No. 8 , Kel. Mandonga Kec. Mandonga 93111';

	$fb = [
    'url'   => 'https://www.facebook.com/share/1armp948ym/',
    'label' => 'JDIH Kota Kendari',
	];
  $ig = [
    'url'   => 'https://www.instagram.com/jdihkotakendari2?igsh=MWVqNDN6Y3Y4ZmtjcA==',
    'label' => 'jdihkotakendari2',
  ];
  $yt = [
    'url'   => 'https://www.youtube.com/@jdihkotakendari',
    'label' => 'JDIH KENDARI',
	];
  $tt = [
    'url'   => 'https://www.tiktok.com/@jdihkotakendari',
    'label' => 'JDIH',
  ];
@endphp

<footer>
	<div class="footer-area padding-90px-tb md-padding-70px-tb sm-padding-50px-tb">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 sm-margin-40px-bottom">

					<!-- start logo -->
					<img class="margin-10px-bottom xs-margin-5px-bottom" src="{{ asset('assets/img/logo-new-jdih.png') }}"
						alt="">
					<!-- end logo -->
					<p class="paragraph">JDIH Kota Kendari hadir untuk meningkatkan pelayanan kepada masyarakat atas
						kebutuhan dokumentasi dan informasi hukum secara lengkap, akurat, mudah dan cepat.</p>
				</div>

				<div class="col-lg-3 col-sm-6 mobile-margin-40px-bottom">
					<h3 class="footer-title-style1">Tautan</h3>
					<ul class="list-style-1 no-margin-bottom">
						<li><a target="_blank" href="https://www.kemenkumham.go.id/">Portal Kemenkumham R.I.</a></li>
						<li><a target="_blank" href="https://www.bphn.go.id/">Portal BPHN</a></li>
						<li><a target="_blank" href="https://jdihn.go.id/">Portal JDIHN</a></li>
						<li><a target="_blank" href="https://portal.kendarikota.go.id/">Portal eGovernment Kota Kendari</a></li>
					</ul>
				</div>

				<div class="col-lg-4 col-sm-6 sm-margin-40px-bottom">
					<h3 class="footer-title-style1">Kontak Kami</h3>
					<ul class="list-style-1 no-margin">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#F3871D" viewBox="0 0 24 24">
								<path d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38
						0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
							</svg>
							<span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
								Bagian Hukum Setda Kota Kendari
							</span>
							<span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-35px-left">{{ $address }}</span>
						</li>

						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#F3871D" viewBox="0 0 24 24">
								<path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1
						0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V21a1 1 0
						01-1 1C10.07 22 2 13.93 2 3a1 1 0 011-1h3.5a1 1 0 011 1c0
						1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z" />
							</svg>
							<span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
								{{ $contact }}
							</span>
						</li>

						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#F3871D" viewBox="0 0 24 24">
								<path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2
						2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0
						4l-8 5-8-5V6l8 5 8-5v2z" />
							</svg>
							<span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
								{{ $email }}
							</span>
						</li>
					</ul>
				</div>

				@php
					$pengunjung = DB::table('pengunjung')->first();
				@endphp

				<div class="col-lg-2 statistik col-sm-6 mobile-margin-40px-bottom">
					<h3 class="footer-title-style1">Statistik Pengunjung</h3>
					<ul class="list-style-1 no-margin-bottom">
						<li><span>Hari Ini :</span><span class="value">{{ rand(5, 100) }}</span></li>
						<li><span>Bulan Ini :</span><span class="value">{{ rand(150, 500) }}</span></li>
						<li><span>Total Ini :</span><span class="value">{{ $pengunjung->jumlah_keseluruhan }}</span></li>
					</ul>
					<div class="form">
						<p>Apakah pelayanan dokumentasi di Bagian Hukum Setda. Kota Kendari dirasa puas?</p>
						<a target="_blank" href="https://forms.gle/wtEHAoVe7EcZ8AHx6" class="btn btn-primary"><i
								class="fa-solid fa-square-poll-vertical"></i> &nbsp;Ikuti Survey Kami</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bar xs-padding-15px-tb">
		<div class="container">
			<div class="float-right xs-width-100 text-center xs-margin-5px-bottom">
				<ul class="social-icon-style no-margin">
					<li>
						<a target="_blank" class="text-white"
							href="{{ $fb['url'] }}">
							<!-- Facebook SVG -->
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
								<path d="M22 12a10 10 0 1 0-11.5 9.87v-6.99H8v-2.88h2.5V9.41c0-2.47
																									1.47-3.84 3.72-3.84 1.08 0 2.21.19 2.21.19v2.43h-1.25c-1.23
																									0-1.62.76-1.62 1.54v1.85H16.9l-.4 2.88h-2.56v6.99A10 10 0 0 0 22 12" />
							</svg>
						</a>&nbsp;
						{{ $fb['label'] }}
					</li>

          <li>
						<a target="_blank" class="text-white" href="{{ $ig['url'] }}">
							<!-- Instagram SVG -->
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
								<path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8
																									0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7
																									0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7
																									0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5
																									3.2A5.8 5.8 0 1 0 17.8 13 5.8 5.8 0 0
																									0 12 7.2zm0 9.6A3.8 3.8 0 1 1 15.8
																									13 3.8 3.8 0 0 1 12 16.8zm4.3-10.9a1.3
																									1.3 0 1 0 1.3 1.3 1.3 1.3 0 0
																									0-1.3-1.3z" />
							</svg>
						</a>&nbsp;
						{{ $ig['label'] }}
					</li>

					<li>
						<a target="_blank" class="text-white" href="{{ $yt['url'] }}">
							<!-- YouTube SVG -->
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
								<path d="M21.8 8s-.2-1.4-.8-2c-.8-.8-1.7-.8-2.1-.9C16.4 5
																									12 5 12 5h-.1s-4.4 0-6.9.1c-.4 0-1.3.1-2.1.9-.6.6-.8 2-.8
																									2S2 9.6 2 11.3v1.3c0 1.7.2 3.3.2 3.3s.2 1.4.8 2c.8.8
																									1.9.8 2.4.9 1.8.2 7.6.2 7.6.2s4.4 0 6.9-.1c.4 0
																									1.3-.1 2.1-.9.6-.6.8-2 .8-2s.2-1.7.2-3.3v-1.3c0-1.7-.2-3.3-.2-3.3zM10
																									14.7V9.3l5.2 2.7-5.2 2.7z" />
							</svg>
						</a>&nbsp;
						{{ $yt['label'] }}
					</li>

					<li>
						<a target="_blank" class="text-white" href="{{ $tt['url'] }}">
							<!-- TikTok SVG -->
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
								<path d="M20.3 7.6c-2 0-3.6-1.6-3.6-3.6V3h-3.2v12.3c0
																									1.7-1.4 3.2-3.2 3.2S7 17 7
																									15.3s1.4-3.2 3.2-3.2c.3 0 .6
																									0 .9.1V9c-.3 0-.6-.1-.9-.1-3.3
																									0-6 2.7-6 6s2.7 6 6 6 6-2.7
																									6-6v-5.6c1 .8 2.3 1.3 3.6
																									1.3h.8V7.6h-1.2z" />
							</svg>
						</a>&nbsp;
						{{ $tt['label'] }}
					</li>
				</ul>

			</div>
			<div class="float-left xs-width-100 text-center">
				<p class="text-medium-black font-weight-600 margin-5px-top xs-no-margin-top">&copy; 2025 All Rights
					Reserved by <a target="_blank" class="text-black" href="https://bphn.go.id">BPHN</a></p>
			</div>
		</div>
	</div>
</footer>
