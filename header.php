<header id="header">
  <div class="container">
    <img src="./assets/logoHeader.png" alt="Logo">
    <nav class="nav-centro">
      <ul>
        <li><a href="/sistema-cadastro/home" class="<?= ($request === 'home') ? 'active' : '' ?>">Home</a></li>
        <li><a href="/sistema-cadastro/cadastro" class="<?= ($request === 'cadastro') ? 'active' : '' ?>">Cadastro</a></li>
        <li><a href="/sistema-cadastro/listagem" class="<?= ($request === 'listagem') ? 'active' : '' ?>">Listagem</a></li>
      </ul>
    </nav>
    <div class="hamburguer" id="hamburguer">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>