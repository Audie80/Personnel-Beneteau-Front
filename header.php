<!DOCTYPE html>
<html class="no-js" LANG="FR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <TITLE>Personnel Beneteau</TITLE>
	<META NAME="DESCRIPTION" CONTENT="Outil de gestion du personnel et des congés pour le commanditaire virtuel Beneteau"/>
	<META NAME="AUTHOR" CONTENT="Aude Velly Menut"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- Font Awesome -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- CSS personnalisé -->
  <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<!--[if IE<11]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif] -->

    <header class="mb-5 pb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 fixed-top shadow-sm">
          <a class="navbar-brand" href="https://www.beneteau.com/fr"><img src="img/logo_header_dark-blue.svg" alt="Logo de l'entreprise Beneteau"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="employees.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Personnels
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="employees.php">Liste du personnel</a>
                  <a class="dropdown-item" href="leaves.php">Planning des congés</a>
                </div>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Application indisponible pour le moment">
                <a class="nav-link disabled">Factures</a>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Application indisponible pour le moment">
                <a class="nav-link disabled">Clients</a>
              </li>
            </ul>
            <a href="/" class="btn btn-info font-weight-bold ml-5" role="button">Retour à l'accueil</a>
            <!--déploiement local <a href="/personnel-beneteau-front" class="btn btn-info font-weight-bold ml-5" role="button">Retour à l'accueil</a> -->
          </div>
        </nav>
    </header>

    <section class="container-fluid my-5 py-3">
      <div class="container-fluid">