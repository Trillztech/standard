<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <title>homepage</title>
</head>

<body onload="typeWrite()">

    <!-- <div class="container"> -->

    <header data-aos="fade-up">
        <?php require 'header.php'; ?>
    </header>
    
<!-- homepage html -->

    <div class="home">

    <div class="bod">
         <div class="text" data-aos="fade-down">

             <h1 id="iwords2"></h1>
             <h2></h2>
             <p data-aos="zoom-in">Build your dreams with minexLimited Investment Company
              Start Your Bitcoin Investment Today!
              We are here to make your dream successful. You made the right choice to grow with us. Just Enjoy Our Best Rates While We Are Doing The Rest For You</p>
              
             <a href="login.php"><button>log in</button></a>
        <div class="frame">
             <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                </div>
                <script>
// script for typewrite

var i = 0;
var txt = "Welcome to MinexLimited";
var speed = 100;

function typeWrite(){
    if (i < txt.length) {
        document.getElementById('iwords2').innerHTML += txt.charAt(i); 
        i++;
        setTimeout(typeWrite,speed);
    }
}
// end
</script>
         </div>   
    </div>
    </div>
<!-- homepage ends -->


<!-- why choose us html -->
<div class="nice"></div>
<div class="second">
    <section data-aos="fade-right">
        <h2>why choose us </h2><br>
        <p>MinexLimited.com is offering management of finances based on fixed conditions. Our team has developed the highly profitable investment plans with one-time accruals of income after a certain period.</p>
    </section>

    <section data-aos="fade-left">
        <img src="img/5580755.png" alt="file format not supported">
    </section>
</div>

<!-- get started -->
<div class="nice" id="how"></div>
<div class="nice" id="how"></div>
<div class="get">
<div data-aos="zoom-in">
<h3>how it works</h3>
<h2>step by step prsedio</h2>
<p>MinexLimited is an Investment company that is available to more than 98 countries worldwide. Here we will guide you on how to earn in a unique way</p>
</div>

<div id="diva">
<section data-aos="zoom-in-up">
    <img src="img/create.png" alt="file format not supported" data-aos="zoom-in-down">
    <h3>create account</h3>
<p>Firstly, register on the website and fill in your correct details.</p>
</section>

<section data-aos="zoom-in-up">
<img src="img/deposit.png" alt="file format not supported" data-aos="zoom-in-down">
<h3>make first deposit</h3>
<p>Choose any of the plans suitable to your budget and then make payment. Your acoount is instantly credited.</p>
</section>

<section data-aos="zoom-in-up">
<img src="img/withdraw.png" alt="file format not supported" data-aos="zoom-in-down">
<h3>make your withdrawal</h3>
<p>After your plan Interval(48 hours or 15 hours) from your deposit time, you will instantly be credited in your wallet address.</p>
</section>
</div>
</div>

<!-- html for choose a plan -->
<div class="nice"></div>
<div class="choose" id="choose">
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>basic plan</h2>
        <div>
        <h2>10%</h2>
        after 2 days
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $50</p>
        <p>max deposit: &nbsp &nbsp $999</p> <br>
        <a href="login.php"><button class="button">invest</button></a> <br><br>
    </section>
    
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>regular plan</h2>
        <div>
        <h2>12%</h2>
        after 4 days
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $1000</p>
        <p>max deposit: &nbsp &nbsp $3000</p> <br>
        <a href="login.php"><button class="button">invest</button></a> <br><br>
    </section>
    
    
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>standard plan</h2>
        <div>
        <h2>15%</h2>
        after 6 days
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $4000</p>
        <p>max deposit: &nbsp &nbsp $6000</p> <br>
        <a href="login.php"><button class="button">invest</button></a><br><br>
    </section>
    
    
    
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>premium plan</h2>
        <div>
        <h2>18%</h2>
        after 15 hours
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $6000</p>
        <p>max deposit: &nbsp &nbsp $12000</p> <br>
        <a href="login.php"><button class="button">invest</button></a> <br><br>
    </section>
    
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>gold plan</h2>
        <div>
        <h2>20%</h2>
        after 8 hours
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $15000</p>
        <p>max deposit: &nbsp &nbsp $100000</p> <br>
        <a href="login.php"><button class="button">invest</button></a><br><br>
    </section>
    
    <section data-aos="fade-up"
     data-aos-duration="3000">
        <h2>diamond plan</h2>
        <div>
        <h2>25%</h2>
        after 4 hours
        </div>
        <img src="img/planborder.png" alt="file not supported">
        <p>min deposit: &nbsp &nbsp $100000</p>
        <p>max deposit: &nbsp &nbsp no limit</p> <br>
        <a href="login.php"><button class="button">invest</button></a> <br><br>
    </section>
    
</div>

<!-- calculator for plans -->

<div class="nice"></div>

<div class="cal" onchange="selectcoin()" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">

    <form action="#" method="post" name="myforms">
  <select name="selectform" id="set"  onchange="selectcoinx()">
  <option value="Select A Plan">Select A Plan</option>
  <option value="Basic Plan" >Basic Plan</option>
  <option value="Regular Plan" >Regular Plan</option>
  <option value="Standard Plan" >Standard Plan</option>
  <option value="Premium Plan" >Premium Plan</option>
  <option value="Gold Plan" >Gold Plan</option>
  <option value="Diamond Plan">Diamond Plan</option>
  </select>

<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" >
  <input type="text" name="percentage_name" id="cent" value="0%" readonly>
  <input type="number" name="roi" id="roi" placeholder="ROI" readonly>
  </div>
  </form>
</div>


<!-- faq section -->

<div class="nice" id="faq"></div>
<div class="nice"></div>

<div class="faq">
<div class="giv">

<div class="astdiv" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <h3>FAQS</h3>
        <h2>Frequently Asked Questions</h2><br>
        <p>Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p><br><br><br>
    </div>

    <div class="anddiv">
<div class="wrapper" data-aos="zoom-in">
  <div class="contan" data-aos="zoom-in-right">
    <div class="question">
    What is MinexLimited investment company ?
    </div>
    <div class="answercont">
      <div class="answer"><br><br>A. &nbsp MinexLimited provide an approach to managing your wealth which provides expertise and the flexibility to help you achieve the life style you desire.
<br><br><br>
      We are acredited trading company with 5 years in a forex market. We introduce MinexLimited Investment platform and technology to help users who can not trade profitably in a forex market to earn by investing in our platform.

      </div>
    </div>
  </div>
  
  <div class="contan" data-aos="zoom-in-left">
    <div class="question">
    How Do I Get started ?
    </div>
    <div class="answercont">
      <div class="answer"><br><br>A. &nbsp To get started with MinexLimited Investment company, you will navigate to find advisor fill in your details. >>> verify your email address and login to your dashbaord.<br><br>

      </div>
    </div>
  </div>
  
  <div class="contan" data-aos="zoom-in-right">
    <div class="question">
    How Do I Make Deposit To My Account After Signup ?
    </div>
    <div class="answercont">
      <div class="answer"><br><br>A. &nbsp Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium mollitia facere reprehenderit blanditiis nemo corrupti aspernatur id maiores, iure sed eos commodi voluptatum a? Impedit, quas minima? Tempora, repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium mollitia facere reprehenderit blanditiis nemo corrupti aspernatur id maiores, iure sed eos commodi voluptatum a? Impedit, quas minima? Tempora, repellat

      </div>
    </div>
  </div>
  
  <div class="contan" data-aos="zoom-in-left">
    <div class="question">
    How Long will it take me to withdraw my earning ?
    </div>
    <div class="answercont">
      <div class="answer"><br><br> A. &nbsp In MinexLimited withdrawal interval is within a given period of plan you selected. You will always have continus withdrawal as long as you have active investment in the system.
<br><br>

      </div>
    </div>
  </div>
  </div>
</div>
  </div>

  <script>

let question = document.querySelectorAll(".question");

question.forEach(question => {
question.addEventListener("click", event => {
const active = document.querySelector(".question.active");
if(active && active !== question ) {
active.classList.toggle("active");
active.nextElementSibling.style.maxHeight = 0;
}
question.classList.toggle("active");
const answer = question.nextElementSibling;
if(question.classList.contains("active")){
answer.style.maxHeight = answer.scrollHeight + "px";
} else {
answer.style.maxHeight = 0;
}
})
})
  </script>

<!-- about us  -->

<div class="nice" id="about"></div>
<div class="nice"></div>

<div class="about">

<section data-aos="fade-down">
    <h3>the MinexLimited financial</h3>
    <h2>about the MinexLimited financial</h2>
</section>

<section id="sect">

    <div data-aos="fade-up">
        <p>MinexLimited Investment is an investment company  Incorporated in the year 2016.

We provide an approach to managing your wealth which provides expertise and the flexibility to help you achieve the life style you desire.
</p>

<p>
We are acredited trading company with 6 years in a forex market. We introduce MinexLimited Investment platform and technology to help users who can not trade profitably in a forex market to earn by investing in our platform.</p>

<p>
We indulge ourselves with Real Estate Investment, Crypto Currency Investment, Forex Trading.
Bitivest allow investors to participate and benefit from the company using four different crypto currencies as a means of payment.

MinexLimited have six(6) major mining packages; All packages mature within the specify period.</p>
    </div>

    <div data-aos="fade-left">
        <img src="img/IMG_0264.PNG" alt="file format not supported">
    </div>

</section>
</div>

<!-- patners  -->

<div class="nice"></div>

<div class="patners">
    <div data-aos="fade-down">
        <h3>patners</h3>
        <h2>our most trusted clients</h2>
    </div>
    <div class="img" data-aos="fade-up">
    <img src="img/pay-method1.png" alt="file format not supported">
    <img src="img/pay-method2.png" alt="file format not supported">
    <img src="img/pay-method3.png" alt="file format not supported">
    <img src="img/pay-method5.png" alt="file format not supported">
    <img src="img/pay-method7.png" alt="file format not supported">
</div>
</div>

<!-- contact us page -->

<div class="nice" id="contact"></div>
    <div class="nice"></div>

<div class="seven">

    <span data-aos="fade-down-right">
    <h4>contact us</h4>
    <p>get in touch!</p>
    </span>

    <div class="man">

        <section data-aos="zoom-in">
            <form action="" method="post">
                <span>
                <input type="text" placeholder="name*" name="name">
                <input type="email" placeholder="email*" name="email">
            </span>
                <input type="text" placeholder="enter subject*" name="subject">
                <textarea name="mesage" id="mnm" cols="40" rows="4" placeholder="message"></textarea>
                <input type="submit" value="Submit" name="sunb" class="butt"> <div>
            <?php
            if (isset($_POST['sunb'])) {
                require 'msg_action.php';
             }
 ?>
            </div>
            </form>
        </section>

        <section id="spat"data-aos="zoom-in-left">

            <span>
                <section id="icon">
            <i class="fas fa-envelope"></i>
        </section>

        <section id="tet">
             <h5>email</h5>
            <p>support@sitename.com</p>
        </section>
           
            </span>

            <span>
                <section id="icon">
            <i class="fas fa-map-marker-alt"></i>
        </section>

        <section id="tet">
            <h5>address</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit....</p>
        </section>

            </span>

            <span>
                <section id="icon">
                <i class="fas fa-phone-alt"></i>
        </section>

        <section id="tet">
            <h5>contact</h5>
            <p>+44 7888 884850</p>
        </section>
            </span>

        </section>

    </div>
    </div>

    <!-- html for statics -->

    <div class="nice"></div>

    <div class="stat">

        <section id="count" data-aos="zoom-out-down">
            
            <div onscroll="guiity()">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i><br>
                <p  id="could">4345</p>
                <p> running days</p>
            </div>

            <div>
            <i class="fa fa-user-plus" aria-hidden="true"></i><br>
                <p>8000+</p>
                <p> accounts</p>
            </div>

            <div>
                <!-- <i class="fab fa-bitcoin"></i> -->
                <!-- <i class="fas fa-box-open"></i> -->
                <i class="fas fa-donate"></i><br>
                <p>$7000000.10+</p>
                <p> Deposits</p>
            </div>

            <div>
            <i class="fas fa-hand-holding-usd"></i><br>
                <p>$8000000.00+</p>
                <p> withdrawals</p>
            </div>

        </section>
        
        <section id="nill" data-aos="fade-up"
     data-aos-duration="3000">

            <div id="ram" data-aos="zoom-out-right">
         <?php require 'last_depo.php';?>
            </div>

            <div id="ray" data-aos="zoom-out-left">
         <?php require 'last_with.php';?>
            </div>
            </div>

        </section>
    </div>

<!-- client review html -->
<div class="nice"></div>

    <div id="kit" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <h3> clients review</h3>
        <p>what our customers say</p>
    </div>

<div class="review">
    <div class="over" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <section>
            " <br>
            Just to say many thanks for a very positive meeting yesterday. Hilly and i came away feeling well satisfied that we are able to continue enjoying life without too much stress on the old finances and should be able to carry on with our present lifestyle for some time to come. Very satisfied with the way you are managing affairs and hope this will continue into the future. <br>
        </section>

        <section>
            " <br>
            We have been with MinexLimited investment for three years.This small team have made effort to get to know us and so the services we recieve feels personal. Jeremy has helped us to focus on what we what out of life. The peace of mind we have from knowing our finanaces are being so well managed is priceless  <br>
        </section>

        <section>
            " <br>
        MinexLimited investmet provides an excellent service, be it on business or on personal level. i have found the company's advice regarding investment opportunities particularly helpful everything is well explained fully no matter how complex the subject .I am pleased to see the results in comparison to the experiences one reads or hears about in the media. I get the feeling that MinexLimited investment are ahead of the game.  <br>
        </section>
    </div>
</div>

<!-- coin market -->

<div class="nice"></div>
<div class="nice"></div>

<div class="frameed" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
<div class="coin">
<iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=100&pref_coin_id=1505&graph=yes" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0; background:white;"></iframe>
</div>

<div class="coinx">
<iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="none" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe>
</div>
</div>


<?php require 'footer.php'; ?>