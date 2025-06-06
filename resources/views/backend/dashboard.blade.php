<x-layouts.backend title="Dashboard" :listNav="[['label' => 'Dashboard']]">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $countPeraturan }}</h3>
          <p>Peraturan</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a class="small-box-footer" href="/backend/peraturan/index">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $countMonografi }}</h3>
          <p>Monografi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a class="small-box-footer" href="/backend/monografi/index">More info <i
            class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $countArtikel }}</h3>
          <p>Artikel</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a class="small-box-footer" href="/backend/artikel/index">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $countPutusan }}</h3>
          <p>Putusan</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a class="small-box-footer" href="/backend/putusan/index">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
</x-layouts.backend>
