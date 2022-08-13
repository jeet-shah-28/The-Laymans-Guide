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
    body
	{
        font-family: 'Quicksand', sans-serif;
		color: black;
        align-content: center;
        background-image: url("img/content_bg2.jpg");
        /* background-size: cover; */
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
        height: 200px;
        margin-right: -1.45%;
        
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
<body>
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
                <li><abbr title="Dark mode not available"><img id="dark" src="img/darkmode.png"></li></abbr>
                <li><abbr title="Light mode not available"><img id="light" src="img/lightmode.png"></li></abbr>
                </div>
            </ul>
    </div>

<h1>VIDEO CONFERENCING</h1>
<div class="bottom">
    <h2>What is it ?</h2>
    <div class="first">
        <div class="left">
            <p>Video conferencing is a highly convenient use of technology that allows users in different locations to hold face-to-face meetings. There are many ways to utilize video conferencing technology, such as company meetings, job training sessions, or addressing board members.</p>
        </div>
        <div class="right" style="background-image: url('img/vid1.png'); background-size: 94%;"> 
            <!-- <img src="img/ewallet_intro.jpg"> -->
        </div>
    </div>

    <h2>How does it work?</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/vid2.png');">
        </div>
        <div class="left">
            <p>Video conferencing allows people at two or more locations to see and hear each other at the same time, using computer and communications technology. They exchange visual information with Webcams (digital video cameras) and streaming video. Audio content may be distributed via computer or the telephone system.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <H2>Saves Time and Money!</H2>
    <div class="first">
        <div class="left">
           <p>Consider for a moment the costs associated with a traditional face-to-face meeting. For a meeting that participants must travel to attend, costs can add up quickly.  Even in-office meetings can come with an array of costs, including the paid time employees spend setting up the meeting and waiting for latecomers to arrive  All of these costs add up to some big numbers: In a study published in the European Journal of Work and Organizational Philosophy, researchers from multiple universities found that businesses waste approximately $37 billion on ineffective meetings every year.</p>
        </div>
        <div class="right"  style="background-image: url('img/vid3.jpg'); background-size: 96%;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>Can be less personal than a face-to-face meeting</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/vid4.jpg'); background-size: 95%;">
        </div>
        <div class="left">
            <p>While video conferencing is generally more personal than a conference that’s conducted over the phone, it does have the potential to be less personal than a face-to-face meeting, especially if some attendees aren’t actively participating.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>How do I set it up?</h2>
    <div class="first">
        <div class="left">
            <p>Connecting to a video conference from your laptop is simple enough. Download your favorite video conferencing app, select to use your embedded webcam and microphone, pop in some headphones and connect to your virtual meeting room. But most meetings include at least one meeting room for groups to join together. Sliding a laptop with a Skype call to the end of the meeting room table and crowding around it isn’t the answer. There's a better solution for web conferencing, and it doesn't include complicated conferencing software and dongles. Here’s how to set up a video conference room so you can conduct productive and professional business meetings.</p>
        </div>
        <div class="right" style="background-image: url('img/vid5.jpg'); background-size: 96%;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
   
</div>
</div>
