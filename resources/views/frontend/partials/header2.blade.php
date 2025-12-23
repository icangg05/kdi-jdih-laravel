<header>
	<div class="navbar-default"
		style="border-bottom: 1px solid #616161; background: rgba(7, 7, 7, 0.77); box-shadow: 0px 5px 6px 0px rgba(0, 0, 0, 0.25); backdrop-filter: blur(4px);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="menu_area">
						<nav class="navbar navbar-expand-lg navbar-light no-padding justify-content-between">
							<div class="navbar-header navbar-header-custom d-flex align-items-center">
								<!-- start logo -->
								<a wire:navigate.hover class="navbar-brand" href="{{ route('frontend.beranda') }}">
									<img id="logo"
										src="{{ asset('assets/img/logo-new-jdih.png') }}" alt="logo"></a> <!-- end logo -->
								<div class="title-logo">
									<p>JARINGAN DOKUMENTASI DAN INFORMASI HUKUM</p>
									<h3>PEMERINTAH KOTA KENDARI</h3>
								</div>
							</div>

							<div class="navbar-toggler"></div>

							{{-- Menu --}}
							<ul id="nav" class="navbar-nav ml-left">
								<li class="{{ Request::routeIs('frontend.beranda') ? 'current' : '' }}">
									<a wire:navigate.hover href="{{ route('frontend.beranda') }}">Beranda</a>
								</li>
								<li class="{{ Request::routeIs('frontend.profil') ? 'current' : '' }} has-sub">
									<span class="submenu-button"></span>
									<a wire:navigate.hover href="javascript:void(0)" class="href_class">Profil</a>
									<ul>
										<li><a wire:navigate.hover href="{{ route('frontend.profil', 'sekilas-sejarah') }}">Sekilas Sejarah</a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.profil', 'dasar-hukum') }}">Dasar Hukum</a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.profil', 'visi') }}">Visi </a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.profil', 'misi') }}">Misi</a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.profil', 'sto') }}">Struktur Organisasi</a></li>
									</ul>
								</li>
								<li
									class="{{ Request::routeIs('frontend.dokumen.index') || Request::routeIs('frontend.dokumen.show') ? 'current' : '' }} has-sub">
									<span class="submenu-button"></span>
									<a wire:navigate.hover href=#>Jenis Dokumen</a>
									<ul>
										<li><a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'peraturan') }}">Peraturan dan
												Keputusan</a>
										</li>
										<li><a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'monografi') }}">Monografi</a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'artikel') }}">Artikel / Majalah
												Hukum</a></li>
										<li><a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'putusan') }}">Putusan</a></li>
									</ul>
								</li>
								<li
									class="{{ Request::routeIs('frontend.pengumuman.index') || Request::routeIs('frontend.pengumuman.show') ? 'current' : '' }}">
									<a wire:navigate.hover href="{{ route('frontend.pengumuman.index') }}">Pengumuman</a>
								</li>
								<li class="{{ Request::is('informasi-hukum*') ? 'current' : '' }} has-sub">
									<span class="submenu-button"></span>
									<a wire:navigate.hover href=#>Informasi Hukum</a>

									@php
										$jenisInformasiHukum = DB::table('jenis_informasi_hukum')->pluck('singkatan', 'id');
									@endphp

									<ul>
										@foreach ($jenisInformasiHukum as $key => $item)
											<li>
												<a wire:navigate.hover href="{{ route('frontend.informasi-hukum.index', $key) }}">
													{{ $item }}
												</a>
											</li>
										@endforeach
									</ul>
								</li>
								<li
									class="{{ Request::routeIs('frontend.berita.index') || Request::routeIs('frontend.berita.show') ? 'current' : '' }}">
									<a wire:navigate.hover href="{{ route('frontend.berita.index') }}">Berita</a>
								</li>
							</ul>
							{{-- End menu --}}
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
