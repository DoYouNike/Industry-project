<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CompareTheHealthcare</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
</head>
<body>

<?php
    include 'nav.php';
    include 'searchFunction.php'
?>

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="" id="top">
        <div class="container animate-bottom">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h1 class="mb-5" style="">Search and compare medical procedures from over 1,200,000 entries!</h1>
                </div>
                <?php
                    include 'searchform.php';
                ?>
            </div>
        </div>
    </div>
</header>
<style>
    .loader {
        border: 10px solid #f3f3f3; /* Light grey */
        border-top: 10px solid #5cb85c; /* Green */
        border-radius: 50%;
        width: 100px;
        height: 100px;
        animation: spin 0.8s linear infinite;
    }

    div.visible {
        display: block;
    }

    div.hidden {
        display: none;
    }

    .banner {
        height: 150px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 }
        to { bottom:0px; opacity:1 }
    }

    @keyframes animatebottom {
        from{ bottom:-100px; opacity:0 }
        to{ bottom:0; opacity:1 }
    }

    .center{
        position: absolute;
        left: 50%;
        top: 50%;
    }
</style>

<div id="hide">
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row animate-bottom">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <a href="#health" style="text-decoration: none">
                        <div class="features-icons-icon d-flex">
                        <i class="icon-heart m-auto text-success"></i>
                        </div></a>
                        <h3>Health</h3>
                        
                        <p class="lead mb-0">Your health is important</p>
                    </div>
                </div>               
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <a href="#choice" style="text-decoration: none">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-layers m-auto text-success"></i>
                        </div>
                        </a>
                        <h3>Choice</h3>                        
                        <p class="lead mb-0">Find the procedure that's right for you</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <a href="#location" style="text-decoration: none">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-map m-auto text-success"></i>
                        </div>
                        </a>    
                        <h3>Location</h3>                
                        <p class="lead mb-0">Locate your nearest facility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
        <a id ="health">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                     style="background-image: url('img/bg-medic2.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <div class="container">
                        <div class="col-md-10" style="margin-left: 70px">
                            <h2>Health</h2>
                            <p class="lead mb-1">Strong health is vital to human happiness and well-being. Our platform aims to find the best procedure for you and help you save more in the process.</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <a id ="choice">
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-medic.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <div class="container">
                        <div class="col-md-10" style="margin-left: 70px">
                            <h2>Choice</h2>
                            <p class="lead mb-0">Healthcare can be expensive. We understand that options are paramount in making your decision. Our search queries 100's of procedures from 1,000's of hospitals across the entire US.</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <a id ="location">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-wheelchair.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <div class="container">
                        <div class="col-md-10" style="margin-left: 70px">
                            <h2>Location</h2>
                            <p class="lead mb-0">We locate the facilities closet to you. All of our results can be viewed on a map in relation to you; the user.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What professionals are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                        <h5>Dr Margaret E.</h5>
                        <p class="font-weight-light mb-0">"Compare the Healthcare is great for browsing the procedures that our hospital offer."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                        <h5>Dr Fred S.</h5>
                        <p class="font-weight-light mb-0">"Our hospital uses the CompareTheHealthcare platform to ensure that we are offering competitive prices."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                        <h5>Dr Sarah W.</h5>
                        <p class="font-weight-light mb-0">"50% of my patients say they found their procedure through a price comparison website."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Ready to get started? Get comparing now!</h2>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    </div>
                    <div class="text-center u-margin-top-big">
                        <button type="button" class="btn btn-lg btn-success" onclick="moveToDiv('top')">Compare</button>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php
include 'footer.php';
?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<script src="jquery.ui.autocomplete.scroll.js"></script>



<!---->
<!--<script src="jquery.ui.autocomplete.scroll.js"></script>-->
<style>
.ui-autocomplete {
background-color: #ffffff;
}
* html .ui-autocomplete {
    background-color: #ffffff;
}
.ui-menu-item .ui-menu-item-wrapper.ui-state-active {
    background: #6693bc !important;
    font-weight: bold !important;
    color: #ffffff !important;
} 
.ui-menu .ui-menu-item:hover, .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus {
  cursor: pointer; 
}
</style>

<script>
    searchFunc();
</script>

<script>
    var pos;
    $(document).ready(function(){
        navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            sessionStorage.setItem("lat",pos.lat);
            sessionStorage.setItem("lng",pos.lng);


        });

        console.log(pos.lat);
    });
</script>


<script>
    //hide div and show loader
    function hide(id) {
        var x = document.getElementById(id);
        x.style.display = "none";
        $("div#loader").removeClass("hidden");
        window.location.hash = '#loader';
    }

    //unhide a div
    function show(id) {
        var x = document.getElementById(id);
        x.style.display = "block";
    }

    //move to div with id
    function moveToDiv(id) {
        window.location.hash = '#' + id;
    }
</script>

</body>
</html>
