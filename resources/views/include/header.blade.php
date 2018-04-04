<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="/home">Dashboard</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="/home">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="/insert ">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Table</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    @guest
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
      @else
      <li class="nav-item" style="padding-right:8px">
        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
          {{ Auth::user()->name }} <span></span>
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}">
            Logout
        </a>
    </li>
    @endguest
    </ul>
 </div>
</nav>
