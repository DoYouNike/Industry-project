<!DOCTYPE html>
<html lang="en">

<?php
include("php/dbConnection.php");

if (!connect()) {
    echo 'Connection to DB failed';
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CompareTheHealthcare</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Table CSS -->
    <link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">

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

<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        width: 100%;
        background-color: grey;
    }
    html, body {
        height: 100%;
        width: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    /*html, body {*/
    /*    height: 70%;*/
    /*    margin: 0;*/
    /*    padding: 50px;*/
    /*}*/
</style>

<body>

<div id="myDiv" class="">

    <?php
    include 'nav.php';
    include 'searchFunction.php';
    ?>


    <!--The div element for the map -->

    <br><br>
    <div class="container animate-bottom">
        <div class="">
            <h1 class="mb-4" style=""><?php echo $_GET['procedure']; ?></h1>
        </div>
        <div class="row">
            <div class="card mb-3 col-12">
                <div class="row">
                    <div class="container col-6">
                        <div class=" d-flex flex-row justify-content-center align-items-center" id="mapdiv">
                            <div class="container-fluid animate-bottom">
                                <div id="map" style="width: 100%; height: 400px; margin: 1rem; border-radius: 1rem;"></div>
                            </div>
                        </div>
                    </div>
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2204.4998106133826!2d-2.9802712197200103!3d56.45915007077937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c296634d29a3e67!2sQueen%20Mother%20Building%20(QMB)!5e0!3m2!1sen!2suk!4v1569491470212!5m2!1sen!2suk" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <div class="col-6">
                        <div class="card-body" style="font-size: 20px;">
                            <h5 class="card-title"><?php echo $_GET['providerName']; ?></h5>
                            <p class="card-text"><?php echo $_GET['providerStreet']; ?></p>
                            <p class="card-text"><?php echo $_GET['providerCity']; ?></p>
                            <p class="card-text"><?php echo $_GET['state']; ?></p>
                            <p class="card-text"><?php echo $_GET['zip']; ?></p>
                            <p class="card-text text-muted">Approximately <?php echo $_GET['distance']; ?> miles away from you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="row">-->
<!--            <div class="card mb-3 col-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-8">-->
<!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2204.4998106133826!2d-2.9802712197200103!3d56.45915007077937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c296634d29a3e67!2sQueen%20Mother%20Building%20(QMB)!5e0!3m2!1sen!2suk!4v1569491470212!5m2!1sen!2suk" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        <div class="card-block px-2">-->
<!--                            <h4 class="card-title">Title</h4>-->
<!--                            <p class="card-text">Description</p>-->
<!--                            <a href="#" class="btn btn-primary">BUTTON</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div id="number_format_chart" style="height: 350px"></div>
                            <div class="card-body" style="width: 800px">
                                <h5 class="card-title" style="font-size: 25px;">Average Uninsured Cost</h5>
                                <p class="card-text" style="font-size: 18px;" id="2017un">2017 Cost: <b>$</b></p>
<!--                                <a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div id="number_format_chart2" style="height: 350px"></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 25px;">Average Cost After Medicare</h5>
                                <p class="card-text" style="font-size: 18px;" id="2017in">2017 Cost: <b>$</b></p>
<!--                                <a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Masthead -->
    <header class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-bottom">
                <div class="col-xl-10 mx-auto">
                    <h1 class="mb-4" style="">Search again?</h1>
                </div>
                <?php
                include 'searchform.php';
                ?>
            </div>
        </div>
    </header>

    <?php
    include 'footer.php';
    ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
</body>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
<style>

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

<script>
    searchFunc();
</script>

<script>
    var response;

    $(document).ready(function() {
        console.log("here", "<?php echo $_GET['providerID']; ?>");
        $(function() {
            $.get("http://localhost:5432/historicsearch?drggroup=" + "<?php echo $_GET['drg']; ?>" + "&providerid=" + "<?php echo $_GET['providerID']; ?>", function(result) {
                response = result;   // save it to a variable for later use
                response = JSON.parse(response);

                var recentUninsured = Math.round(response[0].averageUninsured2017); //get the 2017 value
                var lastYearUninsured = Math.round(response[0].averageUninsured2016); //get previous year
                var predictedUninsured = null;

                var recentInsured = Math.round(response[0].averageInsured2017); //get the 2017 value
                var lastYearInsured = Math.round(response[0].averageInsured2016); //get previous year
                var predictedInsured = null;


                if (lastYearUninsured == null){
                    predictedUninsured = recentUninsured;
                }
                else{
                    predictedUninsured = recentUninsured + (recentUninsured - lastYearUninsured)*(-1);
                }

                if (lastYearInsured == null){
                    predictedInsured = recentInsured;
                }
                else{
                    predictedInsured = recentInsured + (recentInsured - lastYearInsured)*(-1);
                }

                google.charts.load('current', {packages:['corechart']});
                google.charts.setOnLoadCallback(drawStuff);

                function drawStuff() {
                    var div;
                    div = document.getElementById('2017un');
                    div.innerHTML += "<b>" + Math.round(response[0].averageUninsured2017) + "</b>" + "<br/>" + "2018 Cost Prediction: <b>$" + predictedUninsured + "</b>";

                    div = document.getElementById('2017in');
                    div.innerHTML += "<b>" + Math.round(response[0].averageInsured2017) + "</b>" + "<br/>" + "2018 Cost Prediction: <b>$" + predictedInsured + "</b>";

                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Year');
                    data.addColumn('number', '$');
                    data.addRows([
                        ['2011', Math.round(response[0].averageUninsured2011)],
                        ['2012', Math.round(response[0].averageUninsured2012)],
                        ['2013', Math.round(response[0].averageUninsured2013)],
                        ['2014', Math.round(response[0].averageUninsured2014)],
                        ['2015', Math.round(response[0].averageUninsured2015)],
                        ['2016', Math.round(response[0].averageUninsured2016)],
                        ['2017', Math.round(response[0].averageUninsured2017)],
                        ['2018', predictedUninsured]
                    ]);

                    var data2 = new google.visualization.DataTable();
                    data2.addColumn('string', 'Year');
                    data2.addColumn('number', '$');
                    data2.addRows([
                        ['2011', Math.round(response[0].averageInsured2011)],
                        ['2012', Math.round(response[0].averageInsured2012)],
                        ['2013', Math.round(response[0].averageInsured2013)],
                        ['2014', Math.round(response[0].averageInsured2014)],
                        ['2015', Math.round(response[0].averageInsured2015)],
                        ['2016', Math.round(response[0].averageInsured2016)],
                        ['2017', Math.round(response[0].averageInsured2017)],
                        ['2018', predictedInsured]
                    ]);

                    var options = {
                        title: '',
                        legend: '',
                        colors: ['#5cb85c'],
                        lineWidth: 2,
                        bar: {groupWidth: '95%'},
                        vAxis: { gridlines: { count: 2 }, title: 'Dollars' },
                        hAxis: { title: 'Year'},
                        // trendlines: {
                        //     0: {type: 'linear', color: '#111', opacity: .3}
                        // },
                    };

                    var chart = new google.visualization.SteppedAreaChart(document.getElementById('number_format_chart'));
                    chart.draw(data, options);
                    var chart = new google.visualization.SteppedAreaChart(document.getElementById('number_format_chart2'));
                    chart.draw(data2, options);
                }
            });
        });
    });

</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLcbphE65MYIFNgdDIF1WoP23O13zERk4&callback=initMap" async defer></script>

<script>
    var map, infoWindow;
    var markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: parseFloat("<?php echo $_GET['lat']; ?>"), lng: parseFloat("<?php echo $_GET['lng']; ?>")},
            zoom: 14
        });

        addMarker(parseFloat("<?php echo $_GET['lat']; ?>"), parseFloat("<?php echo $_GET['lng']; ?>"), "<?php echo $_GET['providerName']; ?>", parseFloat("<?php echo $_GET['distance']; ?>"))
    }

    function addMarker(lat = 0, lng = 0, name = 'Hospital', dis = 0){
        var marker = new google.maps.Marker({
            position: {lat: lat, lng: lng},
            map: map,
            title: name,
            animation: google.maps.Animation.DROP,
            // icon: {
            //     url:'https://www.homedepot.com/catalog/swatchImages/35/04/04a604de-8b52-4cd8-a394-6286f00b438d_35.jpg',
            //     scaledSize : new google.maps.Size(50, 25)
            // },
            // label: {
            //     text: "$" + val,
            //     color: 'white',
            //     fontSize: '14px',
            //     fontWeight: 'bold'
            // }
        });

        markers.push(marker);

        var contentString = name + '<br>' + dis + " miles from you";

        google.maps.event.addListener(marker, 'click', function() {
            infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            infowindow.open(map,marker);
        });
    }

    function DeleteMarkers() {
        //Loop through all the markers and remove
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers = [];
    }

    function calDis(point1, point2)
    {
        var d = (google.maps.geometry.spherical.computeDistanceBetween(point1, point2) / 1000).toFixed(2);
        console.log(d);
    }
</script>

</body>
</html>
