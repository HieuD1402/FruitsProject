<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Fruist VN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="categories.php">Collection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About us</a>
        </li>
        <?php
          if(isset($_SESSION['auth']))
          {
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?=$_SESSION['auth_user']['name'];?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="my-orders.php">My order</a></li>
                  <!-- <li><a class="dropdown-item" href="#">About us</a></li> -->
                  <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
              </li>
            <?php   
          }else {
              ?>
                <li class="nav-item">
                  <a class="nav-link active" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="login.php">Login</a>
                </li>
              <?php
          }

        ?>


        
        
      </ul>
    </div>
  </div>
</nav>