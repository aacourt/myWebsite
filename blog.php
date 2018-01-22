<html>  
<head>
<?php
if($_POST["submit"]) {
    $to = "abigailacourt@hotmail.com";
    $subject = $_POST["name"];
    $txt = "Hello world!";
    $headers = 'From: abby@acourtsthoughts.co.uk';

    mail($to, $subject, $txt, $headers);
}?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112235861-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112235861-1');
    </script>  
    <link rel='stylesheet' href='/css/pageStyles.css'>
    <link rel='stylesheet' href='/css/blogpages.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include ('header.html'); ?>
    <div class="wholeBigContainer">
        <div class="main">
                <?php include ('blogposts/page1.html'); ?>
            </br>
            <!-- <div class="oldernewerbuttons" style="clear:both">
            <button class="raise" type="button"><a >Older</a></button>
            <button class="raise" type="button"><a >Newer</a></button>
            </div> -->
        </div>
        <div id="blogpages" class="Side"> 
            <div id = "introduction">
                <img class="sideMe" src="/images/aboutMe.jpg" >
                <p class="sideIntroMe">Welcome to my blog! I'm a full time programmer , professional napper and avid makeup hoarder. Find out more about me here. But enough about me, how are you?</p>
            </div>
            </br>
        

            <div id="emailSignUp">
                <p id="blogpages">SIGN UP TO HEAR WHEN I NEXT POST!</p>
                <form method="post" action="blog.php">
                    First Name: </br>
                    <input class="emailInputs" type="text" name = "name" >
                    </br>
                    Email: </br>
                    <input class="emailInputs" name = "email" type="email">
                    </br></br>
                    <input name="submit" type="submit" value="Sign Up!">
                </form>
            </div>
            <div class="sideTwitter">
                <a class="twitter-timeline" data-height="400" data-link-color="#ff97be" href="https://twitter.com/acourtsthoughts?ref_src=twsrc%5Etfw" >Tweets by acourtsthoughts</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="sideInsta">
                
            </div>

        </div>
    </div>

</body>
</html>