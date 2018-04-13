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
                <img class="sideMe" src="/images/me.png" >
                <div class="divintro">
                    <p class="sideIntroMe">Welcome to my blog! I'm a full time programmer , professional napper and avid makeup hoarder. Find out more about me here. But enough about me, how are you?</p>
                </div>
            </div>
            </br>
        

            <div id="emailSignUp">
                                    
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <form action="https://acourtsthoughts.us17.list-manage.com/subscribe/post?u=ef3aaef602350c2f71bdfcc03&amp;id=bd297d52e2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <h2>Sign up to hear when I post!</h2>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef3aaef602350c2f71bdfcc03_bd297d52e2" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
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