<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css">
<title>Κολοκυθάκι</title>
</head>
  <!--Navbar-->
  <header class="header">
    <nav style="z-index: 100" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../">Kolokithaki</a>
        <?php if (isset($_SESSION["username"])): ?>
          <div class="align-items-start">
          <a class="navbar-brand" href="../profile/">Το προφίλ μου</a>
          <a class="navbar-brand" href="../upload_recipe/">Δημιουργία νέας συνταγής</a>
        </div>

        <?php else: ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="align-items-end">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Είσοδος
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end row g-3" aria-labelledby="navbarDropdown">
                    <li>
                      <form class="form-horizontal" method="post" action="../includes/login.inc.php" accept-charset="UTF-8">
                        <input class="form-control form-control-sm rounded-0" id="uid" type="text" name="uid" placeholder="Ονομα Χρήστη"><br>
                        <input class="form-control form-control-sm rounded-0" id="pwd"type="password" name="pwd" placeholder="Κωδικός"><br>
                        <div class="col text-center">
                                <input class="btn btn-success rounded-0" type="submit" name="submit" value="Είσοδος">
                        </div>
                        <br>
                        <div>
                          <?php
                            include "includes/errorsSign.inc.php"
                          ?>
                        </div>
                     </form>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-center" href="../sign_up/">Εγγραφή</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
      <div class="collapse navbar-collapse" style="display: flex; justify-content: center;" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav-item">
            <div class="justify-content-md-center">
              <form class="d-flex" action="../search/">
                  <input class="form-control rounded-0" type="search" placeholder="Αναζήτηση συνταγής" aria-label="Search">
                  <button class="btn btn-outline-success rounded-0" type="submit">Αναζήτηση</button>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
