<nav class="navbar navbar-expand-lg navbar-custom navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('icon/logo baru.png') }}" alt="Logo Toko" class="btn d-inline-block align-text-top rounded-circle">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavContent" aria-controls="navbarNavContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- Menu utama di sebelah kanan -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="btn nav-link" href="https://wa.me/62859106982313">Contact</a>
        </li>
        <!-- Ikon keranjang dan akun -->
        <li class="nav-item">
          <a class="nav-link" href="/cart" aria-label="Keranjang Belanja" wire:navigate>
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login" aria-label="Akun Pengguna">
            <i class="fas fa-user"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
