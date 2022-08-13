<?php session_start(); 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['user'] = "No account :(";
    }
?>
<!DOCTYPE html>    
<html>    
<head>    
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Work+Sans&display=swap" rel="stylesheet">
  <script>
    var logo = document.getElementById('logo');
    var twit = document.getElementById('twitter');
    var insta = document.getElementById('insta');
    var pin = document.getElementById('pin');
    var fb = document.getElementById('fb');

    var social = document.getElementById('social');

    function show()
    {
        var acc = document.getElementById('acc');
        acc.innerText = "<?php echo $_SESSION['user'] ?>";
    }

    function initial()
    {
      document.getElementById('fname').setAttribute("value","<?php echo $_SESSION['user']; ?>");
        document.getElementById('light').style.background = 'black';
        document.getElementById('dark').style.background = 'white';
    }

    function toggle_dark()
    {
        document.body.classList.add('dark_body');
        document.body.classList.remove('light_body');
        document.getElementById('right').style.background = 'black';
        var links = document.getElementsByTagName("a");

        for(var i=0 ; i<links.length ; i++)
        {
            links[i].style.color = 'white';
        }
    }

    function toggle_light()
    {
        document.body.classList.add('light_body');
        document.body.classList.remove('dark_body');
        document.getElementById('right').style.background = 'white';
        var links = document.getElementsByTagName("a");

        for(var i=0 ; i<links.length ; i++)
        {
            links[i].style.color = 'black';
        }
    }

    function add()
    {
      if (isAlphanumeric(document.getElementById('fname'), "Only letters and numbers are allowed in username !")) 
      {
      // --------------------------email validation--------------------------
        if (emailValidator(document.getElementById('email'), "Please enter a valid email address!"))
        {
          
        }
        else
        {return false;}
      }
      else
      {return false;}
      alert("Thank you for your feedback !");
      return true;
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
* {    
        margin: 0;
        padding: 0;
        font-family: 'Quicksand', sans-serif;
}   
.main{
        width: 80%;
        margin-left: 10%;
    } 

    .dark_body
    {
        color: white;
        background: rgb(19, 19, 19);
    }
    .light_body
    {
        color: black;
        background: white;
    }

    body
	{
        font-family: 'Quicksand', sans-serif;
		    color: black;
        align-content: center;
        
	}
    .navbar{
        margin-top: 5px ;
        margin-left: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 10px;
        border-bottom: 0.5px solid lightgrey;
        /* background-color: #afb8d3; */
    }
    .navbar2{
        margin-top: 25px;
        margin-left: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: #afb8d3; */
    }
    ul{
        flex: 1;
        text-align: right;
    }
    ul li{
        list-style: none;
        margin-left: auto;
        display: inline-block;
    }
    ul li a{
        text-decoration: none;
        color: black;
        font-weight: bold;
        padding: 0 10px;
        position: relative;
    }
    ul li a::after{
        content: '';
        width: 0;
        height: 5px;
        background: #597cee;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 25px;
        border-radius: 20px;
        transition: 0.5s;
    }
    ul li a:hover:after{
        width: 100%;
    }
    .icons{
        margin-left: auto;
        border-left: 1px solid lightgray;
    }
    .icons img{
        height: 25px;
        margin-left: 55px;
        cursor: pointer;
        padding: 5px;
        border: 0px solid lightgray;
        border-radius: 50%;
    }
    .icons img:hover{
        background-color: lightgray;
    }
    span{
        color: #004aad;
    }
    .btn button{
        padding: 7px 30px;
        margin-top: -5%;
        margin-right: 10%;   
        outline: none;
        border: 1px solid #004aad;
        border-radius: 20px;
        cursor: pointer;
        color: #004aad;
        background-color: transparent;
        float: right;
    }
    .btn .primary{
        background: linear-gradient(#0072be,#004aad);
        color: white;
    }
    .btn button:hover{
        box-shadow: 0px 5px 15px rgb(0, 74, 173,0.4);
    }
    .btn{
        margin-bottom: 50px;
    }
    .centre{
        margin-top: 15vh;
        margin-left: 23vw;
        width: 50%;
        padding: 10px;
    }
    .bottom{
        position: relative;
        padding: 0;
        display: flex;
        margin-left: auto;
    }

input[type=text], textarea {    
  width: 50%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  
}    
input[type=email] {    
  width: 50%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
 
}    

.box{
  
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 5px 15px grey;
    margin-top: 10%;
    height: 389px;
    display: flex;
    transform: scale(0);
    animation: signup 2s forwards;
}

@keyframes signup
{
    0%{transform: scale(0);}
    100%{transform: scale(1);}
}

.left .right
{
    flex-basis: 50%;
}
.left
{
    background-image: url("img/feedback_submitted.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 388px;
    width: 612px;
    border-radius: 5px;
}
.right {    
  width: 60%;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #ffffff;      
  padding: 10px;
  border-radius: 10px;       
}    


    
.n {    
  float: left;    
  width: 25%;    
  margin-top: 17px;    
}    
.c {    
  float: left;    
  width: 75%;    
  margin-top: 6px; 
  
}     
  
    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}   

.dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content p {
    color: black;
    background: rgba(60, 142, 218, 0.2);
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content p:hover {background-color: rgba(60, 142, 218, 0.5);}

    .dropdown:hover .dropdown-content {display: block;}
    
</style>    
</head>    
<body onload="initial()">   
    <div class="main">
    <div class="navbar" id="navbar">
        <img src="The_Laymans_Guide.png" id="logo" style="margin-left: 5px;" width="234.5" height="45.5">
            <ul class="navbar2">
                <li><a href="http://localhost/FWD%20Project/navbar.php">Home</a></li>
                <li><a href="http://localhost/FWD%20Project/intro.php">Topics</a></li>
                <li><a href="http://localhost/FWD%20Project/feedback.php">Feedback</a></li>
                <li><a href="http://localhost/FWD%20Project/About_us_socialm.php">About Us</a></li>
                <div class="icons">
                <div class="dropdown" onmouseover="show()">
                <li>
                    <img src="img/user.png" name="userlogo" class="dropimg">
                    <div class="dropdown-content">
                        <p id="acc"></p>
                    </div>
                </li>
                </div>
                <li><img id="dark" src="img/darkmode.png" onclick="toggle_dark()"></li>
                <li><img id="light" src="img/lightmode.png" onclick="toggle_light()"></li>
                </div>
            </ul>
    </div>
  
<div class="box">
  <div class="left" id="img">

  </div>
        <div class="right" id="right"> 
       <h2>ANY SUGGESTIONS ?</h2>  
  <form onsubmit="return(add());">    
    <div class="row">    
      <div class="n">    
        <label for="fname">User Name : </label>    
      </div>    
      <div class="c">    
        <input type="text" id="fname" name="firstname" placeholder="Your User-name">    
      </div>    
    </div>    
    <div class="row">    
      
    <div class="row">    
        <div class="n">    
          <label for="email">Email-Id : </label>    
        </div>    
        <div class="c">    
          <input type="email" id="email" name="mailid" placeholder="Your Email-id">    
        </div>    
      </div>    
    <div class="row">    
        
      
    </div>    
    <div class="row">    
      <div class="n">    
        <label for="feed_back">Feedback : </label>    
      </div>    
      <div class="c">    
        <textarea id="subject" name="subject" placeholder="Your FeedBack" style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row btn">    
      <button class="primary">Submit
    </div>    
  </form>    
</div>    
</div>
</body>    
</html>    