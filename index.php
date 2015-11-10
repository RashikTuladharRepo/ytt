<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kratu Technology Pvt. Ltd</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/custom-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="css/ytt-custom.css">
    <link href="css/alpha.css" rel="stylesheet" type="text/css"/>
</head>


<body id="home" data-spy="scroll" data-target="#myNavbar" data-offset="80">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<div class="bg-overlay"></div>
<div id="preloader">
    <div id="status"><img src="img/preloader.gif"><br>
        <small>Please Wait Untill The Page Loads Completely.....</small>
    </div>
</div>


<button id="backoffer" class="btn-success have-a-project"><i class="glyphicon glyphicon-send">&nbsp;</i>Have A Project?</button>
<!--<div id="backoffer" class="backoffer"><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" data-original-title="Have A Project??"><i class="fa fa-question"></i></a></div>-->
<div id="backtotop" class="backtotop"><a href="#home"><i class="fa fa-angle-up hvr-bob"></i></a></div>


<!--nav-->
<?php include "includes/nav.php"; ?>
<!--nav-->
<!--slider-->
<?php include "includes/slider.php"; ?>
<!--slider-->
&nbsp;
<!--services-->
<?php include "includes/services.php"; ?>
<!--services-->
<!--process-->
<?php include "includes/process.php";?>
<!--process-->
<!--team-->
<?php //include "includes/team.php"; ?>
<!--team-->
<!--skills-->
<?php include "includes/skills.php";?>
<!--skills-->
<!--portfolio-->
<?php //include "includes/portfolio.php"; ?>
&nbsp;
<!--portfolio-->
<!--testimonials-->
<?php //include "includes/testimonials.php" ?>
<!--testimonials-->
<!--contact-->
<?php include "includes/contact.php"; ?>
<!--contact-->
<!--footer-->
<?php include "includes/footer.php"; ?>
<!--footer-->
<!--modals-->
<?php include "includes/modals.php"; ?>
<!--modals-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/ytt-custom.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>

    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },6000);
    });

    $(document).ready(function(){
        $("#backoffer").click(function(){
            $("#have-project").modal();
        });

        $(".portfolios-list").click(function(){
            var src = $(this).children("img").attr("src");
            var alt = $(this).children("img").attr("alt");
            $('#imagepreview').attr('src', src);
            $("#portfolioLabel").text(alt);
            $('#imagemodal').modal('show');
        });

    });

    $("#backoffer").click(function(){
        $("#have-project").modal();
    });

    $("#project").click(function(){
        $("#have-project").modal();
    });

    $("#about-us").click(function(){
        $("#who-are-we").modal();
    });

    $("#something-to-say").click(function(){
        $("#feedback").modal();
    });



</script>
<script src="js/skill.js"></script>
<script type="text/javascript" src="js/alpha.js"></script>
</body>
</html>