<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet" type="text/css" />
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: transparent;
}

/* Full-width input fields */
input[type=text], input[type=text],input[type=text],input[type=text],input[type=number],input[type=number],input[type=number],input[type=number],input[type=tel]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus, input[type=text]:focus,input[type=text]:focus,input[type=number]:focus,input[type=number]:focus,input[type=number]:focus,input[type=number]:focus, input[type=range]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<SCRIPT type="text/javascript">
function validate(thisform)
{
		if(ph.length<10)
	{
		alert("phone number must have atleast 10 digits");
		thisform.phnum.focus();	
		return false;
	}
	if(isNaN(ph))
	{
		alert("Invalid phone number");
		thisform.phnum.focus();	
		return false;
	}
		return true;
}
</SCRIPT>

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
                <a href="login.php" id="login-register-button">Login</a>
            </div>
        </header>
<section id="hero-img">
<form action="insert.php" onsubmit="return validate(this)" method="post">
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <br>
     <input type="radio" id="male" name="gender" value="male" onclick="regs()" >
     <label for="male">solo</label><br>
     <input type="radio" id="female" name="gender" value="female" onclick="regd()">
     <label for="female">duo</label><br>
     <input type="radio" id="other" name="gender" value="other" onclick="regsq()">
     <label for="other">squad</label>
     <br>
     <br>
     <a href="games.php" id="login-register-butons">Cancel</a>
     <script type="text/javascript">
       function regs(){
        window.location.href = "regs.php"
       }
       function regd(){
        window.location.href = "regd.php"
       }
       function regsq(){
        window.location.href = "regsq.php"
       }
       </script>
   </div>
</form>
</section>
        <footer>
            <div class="flex">
                <small>Copyright &copy; 2019 All rights reserved | this template is made with <span class="footer-heart">&#9829; by Ishan & Rohan </a></small>
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