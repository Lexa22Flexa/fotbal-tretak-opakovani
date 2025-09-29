<nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
  <div class="hapapa naav">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto mb-3">
      <li class="nav-item">
          <?= anchor("/", "Domov", array('class' => 'me-3 fs-5 text-white text-decoration-none')); ?>
        </li>
        <li class="nav-item">
          <?= anchor("sezony", "Sezóny", array('class' => 'me-3 fs-5 text-white text-decoration-none')); ?>
        </li>
        <li class="nav-item zarovnaniVpravo">
          <?= anchor("admin", "Administrace", array('class' => 'me-3 fs-5 text-white text-decoration-none')); ?>
        </li>
      </ul>
    </div>
  </div>
</nav>