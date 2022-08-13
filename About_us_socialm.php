<?php session_start(); 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['user'] = "No account :(";
    }
?>
<script>
    var logo = document.getElementById('logo');
    var twit = document.getElementById('twitter');
    var insta = document.getElementById('insta');
    var pin = document.getElementById('pin');
    var fb = document.getElementById('fb');

    var social = document.getElementById('social');

    // $("body").onload(function()
    // {
    //     $("#bottom").animate({transform: "scale(1.1)"},2000,'linear');
    // });

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
</script>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Work+Sans&display=swap" rel="stylesheet">
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
            background: rgb(19, 19, 19)  url("img/blob_pink-purple.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80% 100%;
        }
        .light_body
        {
            color: black;
            background: white url("img/blob_pink-purple.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80% 100%;
        }

        body
        {
            font-family: 'Quicksand', sans-serif;
            color: black;
            align-content: center;
            background-image: url("img/blob_pink-purple.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80% 100%;
        }
        .navbar{
            margin-top: 5px ;
            margin-left: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 10px;
            border-bottom: 0.5px solid lightgrey;
        }
        .navbar2{
            margin-top: 25px;
            margin-left: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
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
        /*Transparent Button*/
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
        /*Solid button*/
        .btn .primary{
            background: linear-gradient(#0072be,#004aad);
            color: white;
        }
        .btn button:hover{
            box-shadow: 0px 5px 15px rgb(0, 74, 173);
        }
        .btn{
            margin-bottom: 50px;
        }
        .social{
            width: 200px;
            text-align: center;
            position: relative;
            margin-top: 5%;
            margin-left: 43%;
        }
        .social img{
            height: 20px;
            margin: 0 5px;
        }
        .social::before{
            content: '';
            width: 150px;
            height: 1px;
            background: rgb(52, 152, 219);
            position: absolute;
            right: 180px;
            top: 10px;
        }
        .social::after{
            content: '';
            width: 150px;
            height: 1px;
            background: rgb(52, 152, 219);
            position: absolute;
            left: 180px;
            top: 10px;
        }
        .centre{
            margin-top: 15vh;
            margin-left: 23vw;
            width: 50%;
            padding: 10px;
        }
        .bottom {
            position: relative;
            padding: 0;
            display: flex;
            transform: scale(1.1);
            margin-left: auto;
            margin-top: 30px;
        }
        .left, .right{
            flex-basis: 33%;
            text-align: center;
        }
        .right
        {
            /*border: 2px solid black;*/
            padding: 10px;
            box-shadow: 0px 5px 15px #808080;
            border-radius: 40px;
            background-color: #ffffff;
            margin-left: 30px;
            opacity: 1;
            position: relative;
            text-align: justify;
            animation: faderight 2s ease forwards;
            animation-delay: 1.5s;
        }
        .left
        {
            /*border: 2px solid black;*/
            opacity: 1;
            box-shadow: 0px 5px 15px #808080;
            position: relative;
            border-radius: 40px;
            background-image: url("img/phone.gif");
            background-size: cover;
            background-repeat: no-repeat;
            animation: fadeleft 2s ease forwards;
            margin-left: 200px;
            animation-delay: 1.5s;
        }
        .left img
        {
            width: 200px;
            height: 200px;
            position: relative;
        }

        .right img
        {
            position: relative;
        }

        .left .right p
        {
            position: absolute;
        }

        .images
        {
            opacity: 1;
            border-radius: 50%;
            transform: scale(0.7);
            box-shadow: 0px 10px 15px rgba(0, 74, 173,0.4);
        }

        h2
        {
            font-size: 30px;
            margin-top: 60px;
            text-align: center;
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
<html>
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
    <h2>About Us</h2>
    <div class="bottom" id="bottom">
        <div class="left" id="current">
        </div>
        <div class="middle">
        </div>
        <div class="right" id="right">
            <h1>
                The Developers
            </h1>
            <br>
            <p>This project was made by C088 Jeet Shah, C091 Hitansh Shah, C093 Vansh Shah for the FWD mini project.
                The website "The Layman's Guide" is aimed at the senior/non-tech savvy generation, attempting
                to teach this generation the potential of their smartphones and how they can make their day to day
                life easier in a short summarised and non technical manner.
                <br>
                <br>
                This website was built using concepts of HTML, CSS, Javascript and PHP, taught to us by ouw Web
                Development faculty Mrs. Hiral Modi. </p>
        </div>
    </div>
    <div class="social" id="social">
        <a href="https://twitter.com/"><img src="img/twitter.png" id="twiter"></a>
        <a href="https://www.instagram.com/"><img src="img/insta.png" id="insta"></a>
        <a href="https://in.pinterest.com/"><img src="img/pinterest.png" id="pin"></a>
        <a href="https://www.facebook.com/"><img src="img/facebook.png" id="fb"></a>
    </div>
</div>
</body>
</html>