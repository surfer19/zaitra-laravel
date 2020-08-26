<nav class="navbar navbar-zaitra navbar-expand-lg navbar-dark fixed-top" id="menu-toggle">
    <a class="navbar-brand" href="#">
        <img src="{{ url('images/zaitra-logo.svg') }}" width="40" height="40" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRODUCTS</a>
      </li>
      <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/services') }}">SERVICES</a>
      </li>
    </ul>
  </div>
</nav>
