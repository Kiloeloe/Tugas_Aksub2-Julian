<nav class="navbar navbar-expand-lg bg-light">
    <div class="container" ms-auto-scrollbar>
      <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/items')}}"><i class="uil uil-list-ul me-1"></i>List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/items/manage')}}"><i class="uil uil-create-dashboard me-1"></i>Manage</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
