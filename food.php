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
        height: 200px;
        margin-right: -1.4%;
        
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

<h1>FOOD DELIVERY SERVICE</h1>
<div class="bottom">
    <h2>What is it ?</h2>
    <div class="first">
        <div class="left">
            <p>Food delivery service is basically ordering food from a restaurant which will be delivered to your doorstep by a delivery person working for the service you order food from. Such services provide fast deliveries of food from the restaurants which don’t have doorstep delivery or even those which do have doorstep delivery.Food delivery service is basically ordering food from a restaurant which will be delivered to your doorstep by a delivery person working for the service you order food from. Such services provide fast deliveries of food from the restaurants which don’t have doorstep delivery or even those which do have doorstep delivery.</p>
        </div>
        <div class="right" style="background-image: url('img/food1.jpg'); height: 195px; background-size: 96%;">
            <!-- <img src="img/ewallet_intro.jpg"> -->
        </div>
    </div>

    <h2>Pricing and credibility</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/food2.jpg'); margin-top: 50px; margin-right: auto; background-size: 100% ;">
        </div>
        <div class="left">
            <p>The price given by such services is not far off from the price written in the restaurant menu. Apart from that a small delivery fee is added to the final bill. This delivery fee depends upon the distance travelled by the person delivering food. The system works by placing the order in the restaurant, where the food will be prepared. The person supposed to deliver the food will arrive at the restaurant and pickup the food. Once the food is picked up, the user is provided with a map where they can see the live location of the person delivering. The map also shows the location of the restaurant, which prevents fraudulent purchase from some other branch. The map also shows an ETA of the person and also gives basic information such as the name and the phone number of the person in case one needs to contact if there is a delay. Delivery happens at your doorstep. If the delivery person cannot find your house, they will call you for directions. Delivery options include cash on delivery or payment by a credit card/e – wallet.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <H2>Offers</H2>
    <div class="first">
        <div class="left" style="margin-top: 3%; margin-bottom: 3%;">
           <p>One of the advantages of using such services is their offers. These services have themed offers and discounts which reduce the price of the overall order, thus making them more appealing. These services also provide cashback offers on order from specific restaurants or on use of specific cards etc.</p>
        </div>
        <div class="right" style="background-image: url('img/food3.jpg'); background-size: 95% ; ">
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
    <h2>How to set it up?</h2>
    <div class="first">
        <div class="right" style="background-image: url('img/food4.jpg'); background-size: 95%;">
        </div>
        <div class="left">
            <p>A few well known services are Zomato, Swiggy, Food Panda etc. Download their application from the play store. Once done, open it, and create an account by providing your phone number. You will receive an OTP from the service, once entered, your account has been created and you are ready to order. Application of offer coupons is done before the order during the payment of the bill, often highlighted by a red font and a percentage (%) sign.</p>
            <!-- <img src="img/ewallet3.jpg"> -->
        </div>
    </div>
   
   
</div>
</div>
