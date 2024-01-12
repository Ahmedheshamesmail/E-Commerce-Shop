<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php"><?php echo lang('Admin') ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><?php echo lang('category') ?></a>
        </li>        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><?php echo lang('ITEMS') ?></a>
        </li>        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><?php echo lang('MEMBERS') ?></a>
        </li>        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><?php echo lang('STATISTICS') ?></a>
        </li>        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><?php echo lang('LOGS') ?></a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right d-lg-flex col-lg-3 justify-content-lg-end">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['Username'] ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Members.php?do=Edit&userid=<?php echo $_SESSION['ID']; ?>">Edit Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>