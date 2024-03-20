<nav class="navbar navbar-expand-lg fixed-top navbar-light border" style="background-color: white; color: black;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo.svg')}}" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <a href="{{route('login')}}" class="btn btn-outline-primary mr-2">MASUK</a>
        <a href="{{route('register')}}" class="btn btn-primary">DAFTAR</a>
      </div>
    </div>
</nav>
