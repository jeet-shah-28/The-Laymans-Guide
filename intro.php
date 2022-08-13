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
    body
	{
        font-family: 'Quicksand', sans-serif;
		color: black;
        align-content: center;
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
        position: relative;
        padding: 0;
        display: flex;
        margin-left: auto;
        margin-top: 30px;
    }
    .left, .right{
        flex-basis: 50%;
        text-align: center;
    }
    .right
    {
        opacity: 0;
        position: relative;
        /* border-left: 2px solid black; */
        animation: faderight 2s ease forwards;
        animation-delay: 1.5s;
    }
    .left
    {
        opacity: 0;
        /* width: 0%; */
        position: relative;
        animation: fadeleft 2s ease forwards;
        animation-delay: 1.5s; 
    }
    .left img
    {
        /* width: 0%; */
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
        box-shadow: 0px 10px 15px rgb(0, 74, 173,0.4);
    }

    .images_anim
    {
        animation: split 3s ease-in forwards;
    }

    .images_hover
    {
        cursor: pointer;
        animation: hoverimg 0.5s ease-in forwards;
    }

    @keyframes hoverimg {
        0%{transform: scale(0.7);}
        100%{transform: scale(0.8);}
    }


    @keyframes fadeleft {
        0%{opacity: 0; transform: translateX(180px);}
        50%{opacity: 0.5;}
        100%{opacity: 1;}
    }

    @keyframes faderight {
        0%{opacity: 0; transform: translateX(-180px);}
        50%{opacity: 0.5;}
        100%{opacity: 1;}
    }

    @keyframes split
    {
        0%{transform: scale(0);}
        100%{transform: scale(0.7);}
    }

    .middle
    {
        border: 1px rgb(65, 62, 62) solid;
        animation: grow 3s ease forwards;
    }

    @keyframes grow {
        0%{align-self: center;}
        100%{padding-top: 50%;}
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

<div class="bottom">
    <div class="left" id="current">
        <u><h2>Digital Trends</h2></u>
        <a href="http://localhost/FWD%20Project/vidconf.php"><img src="img/vid_conf.jpeg" class="images images_anim" id="current1" onmouseover="src='img/vid_conf_hover.jpg'; addanim(id)" onmouseout="src='img/vid_conf.jpeg'; removeanim(id)" ></a>
        <a href="http://localhost/FWD%20Project/ewallet.php"><img src="img/ewallets.jpg" class="images images_anim" id="current2" style="top: 15%" onmouseover="src='img/ewallets_hover.jpg'; addanim(id)" onmouseout="src='img/ewallets.jpg'; removeanim(id)"></a>
        <a href="http://localhost/FWD%20Project/food.php"><img src="img/food.jpeg" class="images images_anim" id="current3"  style="top: -10%; right: 20%;" onmouseover="src='img/food_hover.jpg'; addanim(id)" onmouseout="src='img/food.jpeg'; removeanim(id)"></a>
        <a href="http://localhost/FWD%20Project/transport.php"><img src="img/transport_clg.jpeg" class="images images_anim" id="current4"  style="top: 10%; right: 20%;" onmouseover="src='img/transport_clg_hover.jpg'; addanim(id)" onmouseout="src='img/transport_clg.jpeg'; removeanim(id)"></a>
    </div>
    <div class="middle"></div>
    <div class="right">
        <u><h2>Non-Digital Trends</h2></u>
        <a href="http://localhost/FWD%20Project/soft.php"><img src="img/soft_skills.png" class="images images_anim" id="nontech1"  style="top: 15%" onmouseover="src='img/soft_skills_hover.png'; addanim(id)" onmouseout="src='img/soft_skills.png'; removeanim(id)"></a>
        <a href="http://localhost/FWD%20Project/mass.php"><img src="img/mass_media.jfif" class="images images_anim" id="nontech2"  onmouseover="src='img/mass_media_hover.jpg'; addanim(id)" onmouseout="src='img/mass_media.jfif'; removeanim(id)"></a>
        <a href="http://localhost/FWD%20Project/logistics.php"><img src="img/logistics.jfif" class="images images_anim" id="nontech3"  style="top: 10%; right: -20%;" onmouseover="src='img/logistics_hover.jpg'; addanim(id)" onmouseout="src='img/logistics.jfif'; removeanim(id)"></a>
        <a href="http://localhost/FWD%20Project/climate.php"><img src="img/climate.jfif" class="images images_anim" id="nontech4"  style="top: -10%; right: -20%;" onmouseover="src='img/climate_hover.jpg'; addanim(id)" onmouseout="src='img/climate.jfif'; removeanim(id)"></a>
    </div>
</div>
    <script>
        
        function addanim(id) {
            var current = document.getElementById(id);
            current.classList.add('images_hover');
        }
        function removeanim(id)
        {
            var current = document.getElementById(id);
            current.classList.remove('images_hover');
            current.classList.remove('images_anim');
        }
 </script>
</div>
</body>
</html>