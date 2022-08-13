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
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width: 50%;
        height: 200px;
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

<h1>SOFT SKILLS</h1>
<div class="bottom">
    <h2>What is it ?</h2>
    <div class="first">
        <div class="left">
            <p>Soft skills relate to how you work. Soft skills include interpersonal (people) skills, communication skills, listening skills, time management, and empathy, among others. So, skill development should not only cover hard skills but the emphasis should also be laid on how to improve soft skills using which you can create a positive impact. If you are looking forward to taking your career to new heights then here is a blog that will elucidate on various soft skills.</p>

        </div>
        <div class="right" style="background-image: url('img/soft1.png'); background-size: 100% 100%;"> 
            <!-- <img src="img/ewallet_intro.jpg"> -->
        </div>
    </div>

    <h2>Why are soft skills important? </h2>
    <div class="first">
        <div class="right" style="background-image: url('img/soft2.png'); background-size: 100% 100%;">
        </div>
        <div class="left">
            <p>Effective communication under high stress, empathising or encouraging a team member who might be struggling, and working collaboratively to meet a deadline are all examples of soft skills that carry the highest importance to any organisation. 
                Soft skills also represent many abilities that can’t be replicated by artificial intelligence (AI), which will only increase their importance in the future.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <H2>Increases creativity?</H2>
    <div class="first">
        <div class="left">
           <p>Learning to approach your work in a more creative, even unorthodox, way is something that you can learn to do.
            Simple things like keeping an open mind when confronted with ideas rather than immediately shutting them down or utilising creative techniques like mind maps, role-playing, or provocations can be extremely helpful. 
            </p>
        </div>
        <div class="right" style="background-image: url('img/soft3.jpeg'); background-size: 100% 100%;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>Improve communication skills</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/soft4.jpg');">
        </div>
        <div class="left">
            <p>Communications are a key aspect of almost all jobs and are utilised every day, so learning how to communicate effectively is a crucial skill. You can take steps to improve your communication by focusing on the basics, like simplifying your message or doing a quick check of how your body language might be affecting your communication skills. Plus, make sure you’re fully engaged when you’re listening to others as this will lead them to be more attentive when you’re speaking. </p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>Improve critical thinking</h2>
    <div class="first">
        <div class="left">
            <p>Being able to demonstrate situations where you have employed critical thinking to employers is a valuable asset. The first step to thinking more critically is to consider thoroughly the information you’re presented with. Ask questions, explore motivations on all sides, and don’t take anything at face value. By rigorously evaluating information, you’ll be better placed to make informed decisions, which is the essence of critical thinking. </p>
        </div>
        <div class="right" style="background-image: url('img/soft5.png'); background-size: 100% 1005;">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
   
</div>
</div>
