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
  background-color: white;
}

/* Full-width input fields */
input[type=email], input[type=text],input[type=password],input[type=text], input[type=tel]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus, input[type=text]:focus, input[type=range]:focus{
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

	var ph = thisform.phnum.value;
	var pass = thisform.password.value;
	var conpass = thisform.pswrepeat.value;
	
	
	if (pass != conpass) 
	{ 
	alert("You first Passwords is not similar with 2nd password. Please enter same password in both"); 
	thisform.pswrepeat.focus();
	return false; 
	}
	
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
<form action="logd.php" onsubmit="return validate(this)" method="post">
  <div class="container">
    <h1>Enter Tanker Details</h1>
    <hr>
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" >

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" required>
    
	<label for="phone"><b>Phone</b></label>
    <input type="tel" name="phone" required>
    
    <input type="submit" name="submit" id="login-register-buttons" value="Register"></a>
      <a href="Register.php" id="login-register-butons">Cancel</a>
  </div>
  
  
</form>
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