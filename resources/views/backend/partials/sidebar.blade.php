<aside class="main-sidebar">
  <section class="sidebar">
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

    <ul class="sidebar-menu">
      <li class="header"><span>MAIN NAVIGATION</span></li>
    </ul>
    <ul class="sidebar-menu">
      @foreach (config('sidebar') as $item)
        @if (empty($item['subMenu']))
          <li @class(['active' => $item['isActive']])>
            <a href="{{ route($item['route']) }}">
              <i class="{{ $item['icon'] }}"></i>
              <span>{{ $item['label'] }}</span>
            </a>
          </li>
        @else
          <li @class(['active' => $item['isActive']])>
            <a href="#">
              <i class="{{ $item['icon'] }}"></i>
              <span>{{ $item['label'] }}</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class='treeview-menu'>
              @foreach ($item['subMenu'] as $subMenu)
                <li @class(['active' => $subMenu['isActive']])>
                  <a href="{{ route($subMenu['route']) }}">
                    <i class="{{ $subMenu['icon'] }}"></i>
                    <span>{{ $subMenu['label'] }}</span>
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
        @endif
      @endforeach
    </ul>
  </section>
</aside>
