<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pseudoprojekt</title>
    <meta name="description" content="Pseudoprojekt">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<p>Click the button to display a message!</p>

<button onclick="myFunction()">Tere maailm</button>

<script>
    function myFunction() {
        alert("Tere maailm!");
    }
</script>

<br>

<br>

<script type="text/javascript">
    function show_helloworld_alert_box()
    {
        alert("Hello world!");
    }
</script>

<script type="text/javascript">
    function prevent_leave()
    {
        alert("J��me siia!");
    }
</script>

<a href="http://WWW.khk.ee"
   onClick="show_helloworld_alert_box()">Tere maailm
</a>

<br>

<br>

<a href="http://somelink.com"
    onclick="prevent_leave(); return false;">J&auml;&auml;me siia
</a>

<br>

<br>

<p>
    <img alt="Trippy cat" src="cat.gif"
         style="height: 300px; width: 350px" id="imgClickAndChange" onclick="changeImage()"  />
</p>

<script language="javascript">
    function changeImage() {

        if (document.getElementById("imgClickAndChange").src == "dog.gif")
        {
            document.getElementById("imgClickAndChange").src = "cat.gif";
        }
        else
        {
            document.getElementById("imgClickAndChange").src = "dog.gif";
        }
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
