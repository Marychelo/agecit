<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=<?php echo $_SESSION['url']."plantilla/estilo.css";?>>
    <title>AGECIT-<?php echo $_SESSION['lugar']; ?></title>
  </head>
  <body>
    <header>
          <div class="container-title">
            <?php include_once $_SESSION['url'].'plantilla/titulo.php';?>
            <input type="checkbox" id="chek-menu">
            <?php include_once $_SESSION['url'].'plantilla/menu.php';?>

          </div>
    </header>
    <main>