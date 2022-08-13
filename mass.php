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
        box-shadow: 0px 5px 15px rgb(0, 74, 173);
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
        background-image: url("img/mass3.jpg");
        background-size: 96% 100%;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
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

<h1>Mass Media</h1>
<div class="bottom">
    <h2>What is it ?</h2>
    <div class="first">
        <div class="left">
            <p>
                Any form of communication or propagation of one’s ideals to a larger audience is called Mass Media.
                Mass media includes advertising, social media posts, posters, flyers, newspapers etc. Having a good knowledge of
                mass media is essential both in day to day life and in the business life of a person as it helps with marketing and
                promotion of one's business. Overtime mass media has propagated to digital mass media i.e. on social media platforms etc.
                This article is a quick guide into the Types of Mass Media.
            </p>
        </div>
        <div class="right" style="background-image: url('img/mass1.PNG'); background-size: 90% 100%">
            <!-- <img src="img/ewallet_intro.jpg"> -->
        </div>
    </div>

    <h2>Major Types of Mass Media : </h2>
    <div class="first">
        <div class="right" style="background-image: url('img/mass2.jpg'); background-size: 90% 100%">
        </div>
        <div class="left">
            <h3>Traditional Media</h3>
            <p>
                Traditional or Cultural Media is one of the oldest types of Mass Media.
                Such type of media is different for different people based on their beliefs, culture and language.
                It refers to propagation of one's ideals and beliefs through cultural elements like native dances,
                statues, paintings, or form of music.
                Such form of media is used during festivals/auspicious days or at rural places with high beliefs.
            </p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <div class="first">
        <div class="left">
            <h3>Print Media</h3>
            <p>
                As the name suggests, Print Media refers to any kind of Printed Material i.e. books, newspapers, journals etc.
                Such media is used to keep permanent records of events or research and can be copied and mailed for its propagation/sale.
                Businesses like Advertising companies use such media to advertise their clients business on billboards giving it more credibility etc.
            </p>
        </div>
        <div class="right">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <div class="first">
        <div class="right" style="background-image: url('img/mass4.png'); background-size: 90% 100%;">
        </div>
        <div class="left">
            <h3>Digital Media</h3>
            <p>
                Earlier known as E-Media which was broadcasted by means of Radios and Emails,
                the newer Digital Media refers to propagation of ideals using Social Media Platforms like Twitter,
                Facebook, Instagram. It is one of the most famous types of Media and is also the fastest one.
                Users spread messages via posts, receive reactions via comments and can also monetize their pages
                via ads from sponsoring company. Digital media can either by a photograph or a full fledged video/film which makes
                it highly flexible and versatile. The demographic however has a higher percentage of teenagers and young adults, and
                the platform on which the person posts also has the ability to give the statistics of which post was liked the most and which
                didn't do well. Digital media can be accessed from anywhere i.e.
                a phone or a laptop or even a smart Television making it the most efficient and fastest source of Media.
            </p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>Why does one need this knowlegde?</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/mass5.jpg');">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
        <div class="left">
            <p>
                Mass media has been one of the most significant forces in modern culture. All types of mass media communication whether written,
                broadcast or spoken reach a larger audience thus creating a massive impact.
                <br>
                1. Mass media plays a crucial role in shaping how we view the world.<br>
                2. Intensive use of mass media has resulted in the world to appear smaller and closer.<br>
                3. It also promotes the distribution of goods and services.<br>
                4. The fundamental objectives of mass media are to inform, educate and entertain the masses.<br>
                5. It is known to be an important player in democracy and the smooth functioning of the nation.<br>
                6. Media is the watchdog of society.<br>
                7. Mass media works to transmit heritage and cultural values.<br>
                8. The rise of new mass media creates a global platform to bring people together.<br>

            </p>
        </div>
    </div>
</div>
</div>
