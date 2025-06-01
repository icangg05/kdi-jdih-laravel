<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img class="img-circle" src="{{ asset('assets') }}/backend/img/default-user.png" width="160" height="auto"
          alt="myImage">
      </div>
      <div class="pull-left info">
        <p>{{ ucfirst(auth()->user()->username) }}</p>
        <a href="{{ route('backend.dashboard') }}"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form> --}}

    <ul class="sidebar-menu">
      <li class="header"><span>MAIN NAVIGATION</span></li>
    </ul>
    <ul class="sidebar-menu">
      <li @class(['active' => Request::routeIs('backend.dashboard')])>
        <a href="{{ route('backend.dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      <li @class(['active' => Request::is('dashboard/peraturan*')])>
        <a href="#">
          <i class="fa fa-bank"></i> <span>Dokumen Hukum</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class='treeview-menu'>
          <li @class(['active' => Request::routeIs('backend.peraturan.index')])>
            <a href="{{ route('backend.peraturan.index') }}"><i class="fa fa-pencil-square-o"></i>
              <span>Peraturan</span></a>
          </li>
          <li><a href="/backend/monografi/index"><i class="fa fa-pencil-square-o"></i> <span>Monografi
                Hukum</span></a></li>
          <li><a href="/backend/artikel/index"><i class="fa fa-pencil-square-o"></i> <span>Artikel
                Hukum</span></a></li>
          <li><a href="/backend/putusan/index"><i class="fa fa-balance-scale"></i> <span>Putusan</span></a></li>
        </ul>
      </li>
      <li><a href="/backend/site/index"><i class="fa fa-recycle"></i> <span>Sirkulasi</span> <i
            class="fa fa-angle-left pull-right"></i></a>
        <ul class='treeview-menu'>
          <li><a href="/backend/sirkulasi/peminjaman"><i class="fa fa-circle-o"></i> <span>Peminjaman</span></a>
          </li>
          <li><a href="/backend/sirkulasi/pengembalian"><i class="fa fa-circle-o"></i>
              <span>Pengembalian</span></a></li>
          <li><a href="/backend/sirkulasi/index"><i class="fa fa-circle-o"></i> <span>Sejarah
                Peminjaman</span></a></li>
        </ul>
      </li>
      <li @class(['active' => Request::is('dashboard/berita*')])>
        <a href="{{ route('backend.berita.index') }}"><i class="fa fa-image"></i>
          <span>Berita</span></a>
      </li>
      <li><a href="/backend/narasi/update?id=1"><i class="fa fa-pencil-square-o"></i> <span>Narasi &amp;
            Quotes</span></a></li>
      <li @class(['active' => Request::is('dashboard/informasi-hukum*')])>
        <a href="{{ route('backend.informasi-hukum.index') }}">
          <i class="fa fa-pencil-square-o"></i> <span>Informasi Hukum</span></a>
      </li>
      <li @class(['active' => Request::is('dashboard/pengumuman*')])>
        <a href="{{ route('backend.pengumuman.index') }}">
          <i class="fa fa-image"></i> <span>Pengumuman</span></a>
      </li>
      <li @class(['active' => Request::is('dashboard/video*')])>
        <a href="{{ route('backend.video.index') }}">
          <i class="fa fa-video-camera"></i> <span>Video</span></a>
      </li>
      <li><a href="/backend/site/index"><i class="fa fa-database"></i> <span>Master Data</span> <i
            class="fa fa-angle-left pull-right"></i></a>
        <ul class='treeview-menu'>
          <li><a href="/backend/gmd/index"><i class="fa fa-circle-o"></i> <span>GMD</span></a></li>
          <li><a href="/backend/jenis-informasi-hukum/index"><i class="fa fa-circle-o"></i> <span>Jenis Informasi
                Hukum</span></a></li>
          <li><a href="/backend/jenis-pengarang/index"><i class="fa fa-circle-o"></i> <span>Jenis
                Pengarang</span></a></li>
          <li><a href="/backend/kala-terbit/index"><i class="fa fa-circle-o"></i> <span>Kala Terbit</span></a>
          </li>
          <li><a href="/backend/penerbit/index"><i class="fa fa-circle-o"></i> <span>Penerbit</span></a></li>
          <li><a href="/backend/pengarang/index"><i class="fa fa-circle-o"></i> <span>Pengarang</span></a></li>
          <li><a href="/backend/pola-eksemplar/index"><i class="fa fa-circle-o"></i> <span>Pola
                Eksemplar</span></a></li>
          <li><a href="/backend/daerah/index"><i class="fa fa-circle-o"></i> <span>Tempat Penetapan</span></a>
          </li>
          <li><a href="/backend/tipe-koleksi/index"><i class="fa fa-circle-o"></i> <span>Tipe Koleksi</span></a>
          </li>
          <li><a href="/backend/tipe-pengarang/index"><i class="fa fa-circle-o"></i> <span>Tipe
                Pengarang</span></a></li>
          <li><a href="/backend/tipe-dokumen/index"><i class="fa fa-circle-o"></i> <span>Tipe Dokumen</span></a>
          </li>
          <li><a href="/backend/tipe-kata-kunci/index"><i class="fa fa-circle-o"></i> <span>Tipe Kata
                Kunci</span></a></li>
          <li><a href="/backend/klasifikasi/index"><i class="fa fa-circle-o"></i> <span>Klasifikasi</span></a>
          </li>
          <li><a href="/backend/bidang-hukum/index"><i class="fa fa-circle-o"></i> <span>Bidang Hukum</span></a>
          </li>
          <li><a href="/backend/bahasa/index"><i class="fa fa-circle-o"></i> <span>Bahasa</span></a></li>
          <li><a href="/backend/urusan-pemerintahan/index"><i class="fa fa-circle-o"></i> <span>Urusan
                Pemerintahan</span></a></li>
        </ul>
      </li>
      <li><a href="/backend/site/index"><i class="fa fa-unlock"></i> <span>Akses Kontrol</span> <i
            class="fa fa-angle-left pull-right"></i></a>
        <ul class='treeview-menu'>
          <li><a href="/backend/admin/user/index"><i class="fa fa-users"></i> <span>User</span></a></li>
          <li><a href="/backend/member/index"><i class="fa fa-users"></i> <span>Member</span></a></li>
          <li><a href="/backend/admin/route/index"><i class="fa fa-gears"></i> <span>Route</span></a></li>
          <li><a href="/backend/admin/role/index"><i class="fa fa-cog"></i> <span>Role</span></a></li>
          <li><a href="/backend/admin/menu/index"><i class="fa fa-map"></i> <span>Menu</span></a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
