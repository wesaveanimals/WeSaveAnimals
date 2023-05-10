<?php
$msg="";
if(!empty($_REQUEST['msg'])){
    $msg = $_REQUEST['msg'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/wesaveanimals logo.png" type="image/x-icon">
    <title>We Save Animals</title>
</head>
<body>
    <div id="bar"></div>
    <div id="container">
    <div><p id="message" style="color:red;"><?php echo $msg ?></p></div>
        <div id="header">
            <img id="logo" src="images/wesaveanimals logo.png" width="80px" height="80px">
            <div id="menu">
            <ul>
                <b>
                <li><a href="index.hphp">HOME</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="services.html">SERVICES</a>
                <ul class="dropdown">
                    <li><a href="services.html#rescue">RESCUE OF INJURED & OLD STRAY ANIMALS</a></li>
                    <li><a href="services.html#medical">MEDICAL TREATMENT</a></li>
                    <li><a href="services.html#rehab">REHABILATION CENTRE</a></li>
                    <li><a href="services.html#adopt">ADOPTION&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li><a href="services.html#volunteer">VOLUNTEER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul></li>
                <li><a href="gallery.html">GALLERY</a>
                <ul class="dropdown">
                    <li><a href="gallery.html#shelter">SHELTER PICTURES</a></li>
                    <li><a href="gallery.html#rescue">RESCUE DIARIES</a></li>
                    <li><a href="gallery.html#aware">AWARENESS PROGRAM</a></li>
                </ul></li>
                <li><a href="contactus.html">CONTACT US</a></li></b>
                <a href="donate.html"><button id="donatebutton"><b>DONATE</b></button></a>
            </div>
        </div>
        <div id="welcome"><P id="welcomequote"> WELCOME TO WE SAVE ANIMALS(WSA) WELFARE TRUST,</P></div>
        <div class="quotes">
            <div class="quotesimage">
                <img class="mySlides" src="images/home page quotes.png" style="width:100%">
                <img class="mySlides" src="images/home page quotes 2.png" style="width:100%">
                <img class="mySlides" src="images/home page quotes 3.png" style="width:100%">
                <img class="mySlides" src="images/home page quotes 4.png" style="width:100%">
            </div>
        </div>
       <div id="option">
        <div id="donateinfo" class="optioninfo"><h1 class="extraspace">DONATE</h1><br><p>Every Rupee makes difference<br> in the lives of these animals.</p><br><a href="donate.html"><button class="orangeknowmore">KNOW MORE</button></a></div>
        <div id="adoptinfo" class="optioninfo"><h1 class="extraspace">ADOPT</h1><br><p>Everyone deserves home.<br> See how you can help our <br> shelter animals find forever <br> families.</p><br><a href="services.html#adopt"><button class="orangeknowmore">KNOW MORE</button></a></div>
        <div id="volunteerinfo" class="optioninfo"><h1 class="extraspace">VOLUNTEER</h1><br><p>Find volunteer opportunities in<br> We Save Animals Welfare Trust.</p><br><a href="services.html#volunteer"><button class="grayknowmore">KNOW MORE</button></a></div>
       </div>
       <h1>Our Review's</h1><br>
       <div class="quotes">
        <div class="quotesimage">
            <img class="reviews" src="images/home page review.png" style="width:100%">
            <img class="reviews" src="images/home page review 2.png" style="width:100%">
        </div>
    </div>
    <div id="details">
        <div id="time">
            <h1 class="heading">HOUSE OF OPERATION</h1><br>
            <p class="paragraph">At the shelter, staff members are in the office and available most weekdays</p><br>
            <p class="paragraph"><b>MONDAY-FRIDAY</b></p>
            <p class="paragraph"><b>10:00AM-5:00PM</b></p>
        </div>
        <div id="address">
            <h1 class="heading">ADDRESS</h1><br>
            <p class="paragraph">Sy.No. 18/2, K. Chudahalli, Somanahalli Post, Near Guhantara Resort & KMS Farm, Uttarahalli Hobli, Kanakapura Main Road, Bangalore - 560 082</p><br>
            <p class="paragraph"><b>
                EMAIL - wsatrustindia@gmail.com</b></p>
            <p class="paragraph"><b>RESCUE LINE - +91-9632300046</b></p>
        </div>
    </div>
    </div>
    <footer>
        <div id="socialmedia">
            <p style="font-size:30px;color: white;">Follow Us on:&nbsp;<a href="https://www.facebook.com/WSA-We-Save-Animals-1663165890625653/?hc_ref=ARQ7vjLG3HV5adfBbiHtF6yOfhxAc-vHyBR6IC_l3cnIDUFiVYrMWs55MWhjJnGKdKw"><img class="icons" src="images/facebook.png"></a>&nbsp;<a href="https://www.instagram.com/invites/contact/?i=23fdh7it96ti&utm_content=38eqpv2"><img class="icons" src="images/instagram.png"></a>&nbsp;<a href="https://www.youtube.com/channel/UCoe7IQVULtg7o59XiWgIBSg"><img class="icons" src="images/youtube.png"></a>&nbsp;<a href="https://maps.app.goo.gl/wT9ZL3hq55VcUWzt6"><img class="icons" src="images/gmaps.png"></a></p>
        </div>
        <div id="subscribe">
           <h1 style="color: white;">Subscribe.</h1>
           <form action="subscribe.php" method="GET">
            
            <input class="input" type="text" placeholder="Name" name="name" required style="border:none; border-radius:5px;"><br>
            <input class="input" type="email" placeholder="email" name="email" required style="border:none; border-radius:5px;"><br>
            <input class="input grayknowmore" style="margin-right: 60px;padding: 5px 10px; width:80px ;" type="submit">
           </form>
        </div><br>
        <div id="copyrights">
            <p>&copy; 2020. We Save Animals (WSA) Welfare Trust.
                All Rights Reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>