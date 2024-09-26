<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <span class="fs-4"></span>
  </a>
  <hr>

  <ul class="nav nav-pills flex-column mb-auto gap-4">
    <li class="nav-item">
      <a href="./index.php" class="<?= basename($_SERVER['REQUEST_URI']) === 'index.php' ? 'nav-link active' : 'nav-link text-secondary' ?> d-flex align-items-center">
        <svg class="bi pe-none me-2" width="24" height="16" fill="<?= basename($_SERVER['REQUEST_URI']) === 'index.php' ? 'black' : 'white' ?>">
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
        </svg>
        Home
      </a>
    </li>

    <li>
      <a href="./about.php" class="<?= basename($_SERVER['REQUEST_URI']) === 'about.php' ? 'nav-link active' : 'nav-link text-secondary' ?> d-flex align-items-center">
        <svg class="bi pe-none me-2" width="24" height="16" fill="<?= basename($_SERVER['REQUEST_URI']) === 'about.php' ? 'black' : 'white' ?>">
          <path d=" M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
        About
      </a>
    </li>

    <li>
      <a href="./projects.php" class="<?= basename($_SERVER['REQUEST_URI']) === 'projects.php' ? 'nav-link active' : 'nav-link text-secondary' ?> d-flex align-items-center">
        <svg class="bi pe-none me-2" width="24" height="16" fill="<?= basename($_SERVER['REQUEST_URI']) === 'projects.php' ? 'black' : 'white' ?>">
          <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z" />
        </svg>
        Projects
      </a>
    </li>

    <li>
      <a href="./contacts.php" class="<?= basename($_SERVER['REQUEST_URI']) === 'contacts.php' ? 'nav-link active' : 'nav-link text-secondary' ?> d-flex align-items-center">
        <svg class="bi pe-none me-2" width="24" height="16" fill="<?= basename($_SERVER['REQUEST_URI']) === 'contacts.php' ? 'black' : 'white' ?>">
          <path fill-rule=" evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
        </svg>
        Contacts
      </a>
    </li>
  </ul>

  <hr>
  <div class="dropdown d-flex justify-content-center">
    <p class="text-secondary">Copyright © <?php echo date('Y') ?></p>
  </div>
</div>