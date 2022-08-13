<?php session_start(); 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['user'] = "No account :(";
    }
?>
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
        background-image: url("img/content_bg2.jpg");
        /* background-size: cover; */
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
    .centre{
        margin-top: 15vh;
        margin-left: 23vw;
        width: 50%;
        padding: 10px;
    }

    .bottom{
        display: flex;
        flex-direction: column;
        margin-top: 30px;
    }

    .first
    {
        position: relative;
        padding: 0;
        display: flex;
        flex-direction: row;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: white;
        box-shadow: 0px 5px 15px gray;
    }

    .left, .right{
        flex-basis: auto;
    }
    .left
    {
        /* border: 1px black solid; */
        opacity: 1;
        /* width: 0%; */
        position: relative;
        width: 100%;
        align-self: center;
        padding: 15px;
        /* animation: fadeleft 2s ease forwards;
        animation-delay: 1.5s;  */
    }

    .right
    {
        background-image: url("img/ewallet3.jpg");
        background-size: contain;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        /* margin-right: -1.45%; */
        
        /* border: 1px black solid; */
        opacity: 1;
        position: relative;
        flex-shrink: 1;
    }
    .right img
    {
        position: relative;
        transform: scale(0.5);
        /* top: -30%; */
    }

    h1
    {
        margin-top: 20px;
        color: #0072be;
        text-decoration: underline;
    }

    p{
        font-size: large;
        text-align: justify;
    }

    .p1
    {
        margin-top: 10%;
        display: inline-block;
        width: 50%;
        border: 1px solid black;
        position: relative;
        top: -30%;
    }

    .img1
    {
        transform: scale(0.8);
        position: relative;
        top: 10%;
        border: 1px solid black;
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
                <li><img id="dark" src="img/darkmode.png"></li>
                <li><img id="light" src="img/lightmode.png"></li>
                </div>
            </ul>
    </div>

<h1>CAB BOOKING SERVICE</h1>
<div class="bottom">
    <h2>What is it ?</h2>
    <div class="first">
        <div class="left">
            <p>Gone is the old fashion way of halting public transports like Taxis and Autorickshaws by waving and here is the newer way of booking a means of public transport on your phone with just a few taps. There are multiple applications which offer a suite of vehicles, so the user has an option to choose what’s the best for him.</p>
        </div>
        <div class="right" style="background-image: url('img/cab1.jpg'); background-size: 100% 100%;"> 
            <!-- <img src="img/ewallet_intro.jpg"> -->
        </div>
    </div>

    <h2>How does it work?</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/cab2.jpg'); background-size: 100% 100%;">
        </div>
        <div class="left">
            <p>The system here is quiet simple. Vehicle owners are in contract with the companies that are providing these services. When a user books a vehicle for themselves, the nearest available driver is pinged with the details of the user’s pick up location and the user’s drop location. If the driver finds the pickup and drop location comfortable, they will arrive there and ask for an OTP. Once the OTP has been verified, the user is picked up and dropped at the respective location. After the transport, the user can pay by cash or by an E-wallet. The fare is given within the application after the transport and an approximate fare is given to the user before they confirm pickup.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <H2>How safe is it?</H2>
    <div class="first">
        <div class="left">
           <p>Such services are as safe as they can get. For starters, once the user books a vehicle, the details of the vehicle including the model of the car and the license plate of the car are given to the user. Along with that the user is given the identity details i.e. the name of the driver and their contact number so the user can contact them in case of delay. Once the journey has started, the application itself acts as a map showing the navigation route the driver will take to the user’s drop location. Along with the map, the user is also provided with an emergency SOS button in the app which will contact emergency services in case of unforeseen circumstances that require such action. If the user forgets their belonging/s in the vehicle, they can contact the driver and ask them to meet them in order to return it to them. The fare of the vehicle is system generated and the driver cannot tamper with it. Furthermore a user can post a complaint and give rating to the driver according to their experience. The user is also provided with a log of their booked vehicles and the fares at the end of the journey so as to keep track on the money spent on transport.</p>
        </div>
        <div class="right" style="background-image: url('img/cab3.jpg'); background-size: 100% 100%;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>Transport options?</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/cab4.png'); background-size: 100% 100%;">
        </div>
        <div class="left">
            <p>Such transport providers offer multiple options based on the users choice. There is the economy version which costs less, the sub-premium version which costs more but overall has a better user experience and there is the premium version which provides a luxury car for transport. For commuters, some of these transport providers also have a carpool option where a car follows a fixed route and pickups up passengers that book the driver.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>How do I set it up?</h2>
    <div class="first">
        <div class="left">
            <p>First off, download the application from Play Store/App Store. Some of the well known transport providers are Uber, Ola, Meru Cabs etc. After that, register with your phone number. Once done, you </p>
        </div>
        <div class="right" style="background-image: url('img/cab5.jpg'); height: 200px; background-size: 100% 100%;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
   
</div>
</div>
