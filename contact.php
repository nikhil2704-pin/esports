<!DOCTYPE html>
<html>
    <head>
        <title>Infinite Esports</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css" />
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
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <a href="login.html" id="login-register-button">Register</a>
            </div>
        </header>
        <main>
          <section id=hero-images>
            <center>
              <canvas id="myCanvas" width="1000" height="100"  style="border:1px solid #d3d3d3;">
              </canvas>
            </center>
            <br>
            <br>
            <br>
            <div class="flex">
              <button type="submit" class="btn" name="submit">login</button>
              <button type="submit" class="btn" name="submit">login</button>
              <button type="submit" class="btn" name="submit">login</button>
              <button type="submit" class="btn" name="submit">login</button>
        </section>
        </main>
<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.textAlign = "center"; 
ctx.font = "60px Verdana";
var gradient = ctx.createLinearGradient(0, 0, 1000, 0);
gradient.addColorStop("0", "#fcca03");
gradient.addColorStop("0.3", "#fcbe03");
gradient.addColorStop("0.5", "#fca103");
gradient.addColorStop("0.6", "#fc6f03");
gradient.addColorStop("0.8", "#fc2803");
gradient.addColorStop("1.0", "red");
ctx.fillStyle = gradient;
ctx.fillText("For any queries Contact Us at", 500, 90);
        function face(){
        window.location.href = "https://www.facebook.com/profile.php?id=100011511405024"
       }
       function insta(){
        window.location.href = "https://www.instagram.com/infinite_esports._/?hl=en"
       }
       function mail(){
        window.location.href = "mailto: bhavikkadam@gmail.com"
       }
</script>
<footer>
    <div class="flex">
        <small>Copyright &copy; 2019 All rights reserved | this template is made with <span class="footer-heart">&#9829;</span>by Ishan & Rohan </a></small>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="games.php">Games</a>
        </li>

        <li>
            <a href="contact.php">contact</a>
        </li>
    </ul>
    </div>    
</footer>

</body>
</html>
