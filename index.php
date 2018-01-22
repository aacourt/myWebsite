<html>  
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112235861-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112235861-1');
    </script>
    <link rel="stylesheet" href='/css/icons.css'>
    <link rel="stylesheet" href='/css/pageStyles.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}

    </style>
</head>
<body>
    <?php include ('header.html'); ?>
    <div class="picSlider" style="text-align:center">
        <div class="div-slider w3-content w3-display-container" >
        <a href="/blogposts/blogs/07-01-2018.php#disqus_thread"> 
            <img class="mySlides" src="./images/blogpostHeaders/17-01-2018.jpg" style="width:100%"> 
            </a>
            <a href=""> 
            <img class="mySlides" src="./images/blogpostHeaders/2018.png" style="width:100%"> 
            </a>
            <a>
                <img class="mySlides" src="./images/blogpostHeaders/test.png" style="width:100%">
            </a>
            <div id="miniCircleButtons" class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
             </div>
        </div>
</div>
    <script>
        var myIndex = 0;
        var slideIndex = 1;
        // carousel();

        // function carousel() {
        //     var i;
        //     var x = document.getElementsByClassName("mySlides");
        //     for (i = 0; i < x.length; i++) {
        //     x[i].style.display = "none";  
        //     }
        //     myIndex++;
        //     slideIndex = myIndex;
        //     if (myIndex > x.length) {
        //         myIndex = 1
        //     }    
        //     x[myIndex-1].style.display = "block";  
        //     setTimeout(carousel, 5000); // Change image every 2 seconds
        // }

        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
          showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " w3-white";
        }
    </script>
</body>
</html>