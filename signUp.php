<script>
  var first = localStorage.getItem("first");

  if(!first)
  {
    localStorage.setItem("first", "1");
    document.cookie = 'name = -1';
  }
</script>

<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$db = "fwd_pro";

$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn) {
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if($_COOKIE['name'] == 1)
  {
    $sql = "SELECT * FROM users where uname = '" . $_POST["username"] . "'";
    $res = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($res) > 0)
    {
        $row = mysqli_fetch_array($res);
        
        if($_POST["email"] == $row["email_id"])
        {
            echo "<script> alert('Account with this email already exists !');</script>";
        }
        else
        {
            echo "<script> alert('Username already exists !');</script>";
        }
    }
    else 
    {
        $sql = "INSERT INTO users (fname, uname, email_id, passwords) VALUES ('" . $_POST["first"]  . "','" . $_POST["username"] . "','" . $_POST["email"] . "','" . $_POST["pass"] . "')";

        if (mysqli_query($conn, $sql))
        {
            echo "<script> alert('Signed Up successfully'); window.location = 'http://localhost/FWD%20Project/navbar.php'</script>";
            $_SESSION['user'] = $_POST["username"];
            exit;
        }
        else
        {
          // echo("Error adding data into the table:<br><br>" . mysqli_error($conn));
        }
    } 
  }
  else if($_COOKIE['name'] == 2)
  {  
  $sql = "SELECT * FROM users where uname = '" . $_POST["username"] . "'";
  $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0)
    {
        $row = mysqli_fetch_array($res);
        
        if($_POST["pass"] == $row["passwords"])
        {
            echo "<script> alert('Logged In successfully'); window.location = 'http://localhost/FWD%20Project/navbar.php'</script>";
            $_SESSION['user'] = $_POST["username"];
            exit;
        }
        else
        {
            echo "<script> alert('Wrong password ! Please login again !');</script>";
        }
    }
    else 
    {
        echo "<script>alert('No such account exists ! Please sign up first !');</script>";
    } 
  }
}
mysqli_close($conn);
?>

<script>
    function login() {
        var gif = document.getElementById('gif');
        var login = document.getElementById('login_left');
        var signuppart = document.getElementById('signup_left');
        signuppart.style.opacity = 0;
        login.style.opacity = 1;
        gif.classList.add('animate');
        login.classList.add('animatelogin');
    }
    function signup()
    {
        var gif = document.getElementById('gif');
        var signuppart = document.getElementById('signup_left');
        var login = document.getElementById('login_left');
        login.style.opacity = 0;
        signuppart.style.opacity = 1;
        gif.classList.add('animate');
        signuppart.classList.add('animatesignup');
    }

function validate_s()
{

//--------------------------3 names validation--------------------------
	if(isAlphabet(document.Registration.first,"Please enter a valid first name !"))
	{
        //nothing
	}
	else
	{return false;}
// --------------------------username validation--------------------------
	if (isAlphanumeric(document.Registration.username, "Only letters and numbers are allowed in username !")) 
	{
	// --------------------------email validation--------------------------
		if (emailValidator(document.Registration.email, "Please enter a valid email address!"))
		{
			
		}
		else
		{return false;}
	}
	else
	{return false;}
	
// --------------------------password validation--------------------------
	if (document.Registration.pass.value == "") {
		alert("Please give a Password");
		document.Registration.pass.focus();
		return false;
	}

	if (document.Registration.pass.value.length < 8) {
		alert("Please give a Password of at least 8 characters");
		document.Registration.pass.focus();
		return false;
	}
// --------------------------retype password validation--------------------------
	if (document.Registration.repass.value == "") {
		alert("Please retype your password");
		document.Registration.repass.focus();
		return false;
	}

	if ((document.Registration.pass.value) != (document.Registration.repass.value)) {           
		alert("Your passwords do not match");
		document.Registration.repass.focus();
		return false;
    }
    document.cookie = 'name = 1';
	return true;
}

function validate_l()
{
// --------------------------username validation--------------------------
	if (isAlphanumeric(document.Login.username, "Only letters and numbers are allowed in username !")) 
	{
        //nothing
	}
	else
	{return false;}
	
// --------------------------password validation--------------------------
	if (document.Login.pass.value == "") {
		alert("Please give a Password");
		document.Login.pass.focus();
		return false;
    }
    document.cookie = 'name = 2';
	return true;
}

function isNumber(field, msg){
	var numExp = /^[0-9]+$/;
	if(field.value.match(numExp)){
		return true;
	}else{
		alert(msg);
		field.focus();
		return false;
	}
}

function isAlphabet(field, msg){
	var alphaExp = /^[a-z A-Z]+$/;
	if(field.value.match(alphaExp)){
		return true;
	}else{
		alert(msg);
		field.focus();
		return false;
	}
}

function isAlphanumeric(field, msg){
	var alphanumExp = /^[a-zA-Z0-9]+$/;
	if(field.value.match(alphanumExp)){
		return true;
	}else{
		alert(msg);
		field.focus();
		return false;
	}
}

function emailValidator(field, msg){
	
	var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(field.value.match(emailExp)){
		return true;
	}else{
		alert(msg);
		field.focus();
		return false;
	}
}
</script>


<style>
	body
	{
        font-family: 'Quicksand', sans-serif;
        background-position: center;
        background-image: url('img/blob_pink-purple.png');
        background-size: 75% 100%;
        background-repeat: no-repeat;
		color: black;
        align-content: center;
	}

    .centre{
        margin-top: 15vh;
        margin-left: 23vw;
        width: 50%;
        padding: 10px;
    }
	legend
	{
		font-size: 25px;
	}
	input[type=text]
	{
		border: 0px;
        border-bottom: 1px grey solid;
	}
    input[type=password]
	{
		border: 0px;
        border-bottom: 1px grey solid;
	}
    input[type=text]:focus
    {
        outline: none;
        background: lightblue;
        border-bottom: 2px black solid;
        /* animation: inputting 1s ease forwards; */
    }
    input[type=password]:focus
    {
        outline: none;
        background: lightblue;
        border-bottom: 2px black solid;
        /* animation: inputting 1s ease forwards; */
    }

    @keyframes inputting
    {
        0%{width: 0%}
        100%{}
    }

    .info{
        display: flex;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 5px 15px grey;
        margin-left: auto;
        margin-top: 90px;
        transform: scale(0);
        animation: signup 2s forwards;
        /* opacity: 0; */
    }

    @keyframes signup
    {
        0%{transform: scale(0);}
        100%{transform: scale(1.3);}
    }

    .left
    {
        z-index: 1;
        background-image: url("img/animated_humans.gif");
        background-repeat: no-repeat;
        height: 353px;
        width: 400px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    #gif.animate
    {
        opacity: 0;
        background-image: url("img/second.gif");
        background-size: 100% 100%;
        opacity: 1;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        transform: translateX(100%);
        transition-duration: 2s;
        -webkit-transition-duration: 2s;
    }
    .left, .right{
        flex-basis: auto;
    }
    .right
    {
        width: 384px;
        height: 353px;
        text-align: center;
    } 
    .btn
    {
        width: 30%;
        padding: 7px 30px;
        outline: none;
        border: 1px solid #004aad;
        border-radius: 20px;
        cursor: pointer;
        color: #004aad;
        background-color: transparent;
    }
    .btn:hover
    {
        box-shadow: 0px 5px 15px rgba(17, 32, 51, 0.4);
    }
    .right img
    {
        margin-top: 20%;
        width: 100%;
        z-index: -1;
        transform: scale(0.8);
    }
    .log
    {
        background: linear-gradient(#0072be,#004aad);
        color: white;
    }
    #signup_left
    {
        opacity: 0;
        text-align: center;
        position: absolute;
        width: 0%;
        z-index: -1;
    }
    #signup_left.animatesignup
    {
        opacity: 1;
        width: 50%;
        transition-duration: 2s;
    }
    #signup_left input
    {
        width: 50%;
    }
    #login_left
    {
        opacity: 0;
        padding-top: 8%;
        text-align: center;
        position: absolute;
        width: 0%;
        z-index: -1;
    }
    #login_left.animatelogin
    {
        opacity: 1;
        width: 50%;
        transition-duration: 2s;
    }
    #login_left input
    {
        width: 50%;
    }
    #signup_left a{
        text-decoration: none;
        font-size: small;
    }
    #login_left a{
        text-decoration: none;
        font-size: small;
    }
    a
    {
        font-family: Arial, 'Quicksand', sans-serif;
    }
    .right a{
        font-size: small;
        color: #004aad;
        text-decoration: none;
    }
</style>
<html>
	<head>
        <title>Registration</title>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Work+Sans&display=swap" rel="stylesheet">
	</head>
    <body link="black" alink="blue" vlink="black" style="background-attachment: fixed;" class="centre">
        <div class="info" name="info">
            <div id="signup_left" name="signup">
                <h3>Sign Up</h3>
		        <form  method="POST" name="Registration" action="http://localhost/FWD%20Project/signUp.php">

				<input type="text" name="first" placeholder="Name" autofocus><br><br>
				<input type="text" name="username" placeholder="Username" ><br><br>
				<input type="text" name="email" placeholder="Email" > <br><br>
				<input type="password" name="pass" placeholder="Password"> <br><br>
                <input type="password" name="repass" placeholder="Retype Password"><br><br>
                
                <input type="submit" value="Sign Up" class="btn log" onclick="return(validate_s());">
                <!-- <button type="button" class="btn log" onclick="return(validate());">Sign Up</button> -->
                <br><br><a href="#" onclick="login()">Already have an account?</a>
                </form>
            </div>
            <div id="login_left">
                <h3>Log In</h3>
		        <form method="POST" name="Login" action="http://localhost/FWD%20Project/signUp.php" >
				
				<input type="text" name="username" placeholder="Username" ><br><br>
				<input type="password" name="pass" placeholder="Password"> <br><br>
                
                <input type="submit" value="Log In" class="btn log" onclick="return(validate_l());">
                <!-- <button type="button" class="btn log" onclick="login()">Log In</button> -->
                <br><br><a href="#" onclick="signup()">Don't have an account?</a>
                </form>
            </div>
        <div class="left" id="gif">
        </div>
        <div id="rightout">
        <div class="right">
            <img src="The Layman's Guide_light.png">
            <!-- <h3>Welcome!</h3> -->
            <button type="button" class="btn" id="sign" onclick="signup()" style="margin-top: 10%;">Sign Up</button>
            <hr width="40%">
            <button type="button" class="btn log" onclick="login()">Log In</button>
            <br><br>
            <a href="navbar.html">Back to Home Page</a>
        </div>
        </div>
        </div>
	</body>
</html>