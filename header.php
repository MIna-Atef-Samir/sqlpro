
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="#">Manoly</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  <?= ($activePage == 'index') ? 'active':''; ?>">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item  <?= ($activePage == 'conn') ? 'active':''; ?>">
              <a class="nav-link" href="conn.php">check login</a>
            </li>
            <li class="nav-item  <?= ($activePage == 'show') ? 'active':''; ?>">
              <a class="nav-link" href="show.php">MY Data</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
<!-- navbar -->