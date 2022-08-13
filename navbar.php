
<?php session_start(); 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['user'] = "No account :(";
    }
?>
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
        document.getElementById('light').style.background = 'black';
        document.getElementById('dark').style.background = 'white';
    }

    function toggle_dark()
    {
        document.body.classList.add('dark_body');
        document.body.classList.remove('light_body');
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
        var links = document.getElementsByTagName("a");

        for(var i=0 ; i<links.length ; i++)
        {
            links[i].style.color = 'black';
        }
    }
</script>

<style>
    *{
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
        margin-top: 25px ;
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
        font-weight: bold;
        padding: 0 10px;
        color: black;
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
    .info{
        display: flex;
        margin-left: auto;
        margin-top: 90px;
    }
    .left, .right{
        flex-basis: 50%;
    }
    .right img{
        margin-top: -10px;
        width: 100%;
    }
    .left h1{
        font-size: 100px;
    }
    .left h3{
        font-size: 35px;
    }
    span{
        color: #004aad;
    }
    .left p{
        font-size: 24px;
        margin: 50px 0;
    }
    .btn button{
        padding: 7px 30px;
        margin-right: 15px;
        outline: none;
        border: 1px solid #004aad;
        border-radius: 20px;
        cursor: pointer;
        color: #004aad;
        background-color: transparent;
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
    .social{
        width: 200px;
        text-align: center;
        position: relative;
        margin-left: 160px;
    }
    .social img{
        height: 20px;
        margin: 0 5px;
    }
    .social::after{
        content: '';
        width: 150px;
        height: 1px;
        background: rgb(52, 152, 219);
        position: absolute;
        left: -160px;
        top: 10px;
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
<div class="main" name="main">
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
                <li><abbr title="Toggle dark mode"><img id="dark" src="img/darkmode.png" onclick="toggle_dark()"></abbr></li>
                <li><abbr title="Toggle light mode"><img id="light" src="img/lightmode.png" onclick="toggle_light()"></abbr></li>
                </div>
            </ul>
    </div>
    <div class="info">
        <div class="left">
            <h1>Wel<span>come</span></h1>
            <h3>Ready to expand <span>your knowledge</span></h3>
            <p>
                The world is moving ahead<br>
                Time to get into your brain shoes<br>
                And Run with the world<br>
            </p>
            <div class="btn">
                <a href="intro.html"><button type="button" class="primary">Explore our website</button></a>
                <a href="http://localhost/FWD%20Project/connection.php"><button type="button">Sign Up</button></a>
            </div>
            <div class="social" id="social">
                <a href="https://twitter.com/"><img src="img/twitter.png" id="twiter"></a>
                <a href="https://www.instagram.com/"><img src="img/insta.png" id="insta"></a>
                <a href="https://in.pinterest.com/"><img src="img/pinterest.png" id="pin"></a>
                <a href="https://www.facebook.com/"><img src="img/facebook.png" id="fb"></a>
            </div>
        </div>

        <div class="right">
            <img src="bluishgreen_brain.png">
        </div>
    </div>
</div>
</body>
</html>