<?php
session_start();
if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = 'Please login or register to access the favorites page';
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body >
        <!--This is the start of the Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="imgs/dexipedia.png" style="max-height: 75px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <?php
                // if the user is logged in we show the logout button, else we show the login/register buttons.
                if (isset($_SESSION['id'])) {
                    echo '<a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>';
                } else {
                    echo '<a class="nav-link" href="login.php">Login / Register<span class="sr-only">(current)</span></a>';
                }
                ?>
              </li>

              <!-- Dropdown menu within the nav bar -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Poke-Focused
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="favorites.php">Favourite Pokemon</a>
                  <a class="dropdown-item" href="#">Pokedex</a>
                  <a class="dropdown-item" href="#">Pokemon Minigames</a>
                </div>
              </li>

              <!-- Dropdown menu within the nav bar -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More...
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About</a>
                  <a class="dropdown-item" href="#">Credit</a>
                  <a class="dropdown-item" href="#">FeedBack</a>
                </div>
              </li>
            </ul>
            <!-- Search -->
            <form action="#" method="POST" target="_self" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>       
        <!--End of Nav Bar-->
        <div>
            <p>The same way that pokedex work, but instead of printing all pokemon print only the user favorite pokemon</p>
        </div>
    </body>
</html>
