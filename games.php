<!DOCTYPE html>
<html>
    <head>
        <title>Infinite Esports</title>
        <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    </head>

    <body>
        <header>
        <div class="flex">
            <div class="logo">
                <a href="#"><img src="logo3.png" alt="infinite logo"/></a>
            </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="players.php">Players</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
        </header>

          <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">Search for more games</h5>
        <hr class="my-1">
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
        <section id="game-types-boxes">
            <center><h1>Registration</h1></center>
            <div class="flex">
                <div class="box Pubg">
                    <div class="shade">
                    <span class="badge Pubg">Pubg</span>
                    <div class="contents">
                    <a href="register.php" id="login-register-buttons">Register</a>
                    </div>
                    </div>
                </div>
                <br>
                <div class="box COD">
                    <div class="shade">
                    <span class="badge COD">COD</span>
                    <div class="contents">
                    <a href="register.php" id="login-register-buttons">Register</a>
                    </div>
                    </div>
                </div>
                <br>
                <div class="box Csgo">
                    <div class="shade">
                    <span class="badge csgo">CS:GO</span>
                    <div class="contents">
                    <a href="Regcs.php" id="login-register-buttons">Register</a>
                    </div>
                    </div>
                </div>
                <br>
                <div class="box ludo">
                    <div class="shade">
                    <span class="badge ludo">Valorant</span>
                    <div class="contents">
                    <a href="Regcs.php" id="login-register-buttons">Register</a>
                    </div>
                    </div>
                </div>
                </div>
         </section>

         <section id="video">
            <h1>Video Gallery</h1>
            <div class="vid">
            <video src="PUBG.mp4" controls="controls" loop="loop" autoplay="autoplay" width="500" ></video>
            <video src="cod.mp4" controls="controls" loop="loop" autoplay="autoplay" width="500" ></video>
            <video src="csgo.mp4" controls="controls" loop="loop" autoplay="autoplay" width="500" ></video>
            </div>
        </section>

        <footer>
            <div class="flex">
                <small>Copyright &copy; 2019 All rights reserved | this template is made with <span class="footer-heart">&#9829; by Ishan & Rohan </a></small>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
        
                <li>
                    <a href="players.php">Games</a>
                </li>
                
                <li>
                    <a href="contact.php">contact</a>
                </li>
            </ul>
            </div>    
        </footer>
        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
            </body>
        </html>