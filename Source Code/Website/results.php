<!DOCTYPE html>
<html lang="en">

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

<body onload="myFunction()" style="margin:0;">

<div style="display:none;" id="myDiv" class="">

    <?php
        include 'nav.php';
        include 'searchFunction.php';
    ?>



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

        .active a{
            background-color: #5cb85c !important;
            border-color: #5cb85c !important;
            color: white !important;
            font-weight: 500;
        }

        .page-link{
            color: #5cb85c !important;
            font-weight: 500;
        }

        .dropdown-toggle{
            background-color: #5cb85c !important;
            border-color: #5cb85c !important;
            color: white !important;
            font-weight: 500;
        }

        .dropdown-item:selected{
            background-color: #5cb85c !important;
            color: white !important;
            font-weight: 500;
        }

    </style>

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

    <!--The div element for the map -->
    <div class=" d-flex flex-row justify-content-center align-items-center" id="mapdiv">
        <div class="container-fluid animate-bottom">
            <div id="map" style="width: 100%; height: 400px; margin-top: 0rem; border-radius: 1rem;"></div>
            <br>
            <h4 class="text-center">Take a look at what we've found...</h4>
            <h5 class="text-center">Results for "<?php echo $_GET['Search']; ?>"</h5>
            <p class="text-center text-muted">Click on column headers to filter results</p>
        </div>
    </div>

    <div>
        <div class="d-flex flex-row justify-content-center align-items-center animate-bottom">
            <div class="col-11">
                <table id="table"
                       data-pagination="true"
                       data-side-pagination="client"
                       data-silent-sort="false"
                       data-search="true"
                       data-url= ""
                       data-detail-view="true"
                       data-detail-view-icon="false"
                       data-classes="table table-hover"
                       data-sort-name="distance"
                       data-sort-order="asc"
                       class="">
                    <thead>
                    <tr>
                        <th data-field="definition" data-sortable="false" data-visible="false">Procedure</th>
                        <th data-field="providerName" data-sortable="false">Hospital</th>
                        <th data-field="providerCity" data-sortable="false">City</th>
                        <th data-field="providerState" data-sortable="true">State</th>
                        <th data-field="latitude" data-sortable="true" data-visible="false">Latitude</th>
                        <th data-field="longitude" data-sortable="true" data-visible="false">Longitude</th>
                        <th data-field="distance" data-sortable="true" data-formatter="distanceFormatter">Distance (Miles)</th>
                        <th data-field="Average Uninsured Cost" data-sortable="true" data-formatter="priceFormatter">Avg Uninsured Cost</th>
                        <th data-field="Average Insured Cost" data-sortable="true" data-formatter="priceFormatter">Avg Insured Cost</th>
                        <th data-field="drgID" data-sortable="true" data-visible="false">DRG</th>
                        <th data-field="providerID" data-sortable="false" data-visible="false">Provider ID</th>
                        <th data-field="providerStreetAddress" data-sortable="true" data-visible="false">Street Address</th>
                        <th data-field="providerZipCode" data-sortable="true" data-visible="false">Zip</th>
                        <th data-field="year_" data-sortable="true" data-visible="false">Year</th>
                    </tr>
                </table>
            </div>
        </div>
        <br><br><br>
    </div>

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
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
</body>

<div id="loader" class="">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="d-flex flex-row justify-content-center align-items-center">
        <h3>Fetching your results. We won't be a moment...</h3>
    </div>
    <br>
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-row">
            <div class="loader"></div>
        </div>
    </div>
</div>







<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<script src="jquery.ui.autocomplete.scroll.js"></script>
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
    var $table = $('#table');
    var data;
    var pos;
    var request;
    $(document).ready(function() {

        if ("<?php echo $_GET['zipCode']; ?>") {
            request = new XMLHttpRequest();
            request.open('GET', "https://maps.googleapis.com/maps/api/geocode/json?address=" + "<?php echo $_GET['zipCode']; ?>" + " &key=AIzaSyBLcbphE65MYIFNgdDIF1WoP23O13zERk4", false);  // `false` makes the request synchronous
            request.send(null);
            request = JSON.parse(request.responseText);

            pos = {
                lat: request.results[0].geometry.location.lat,
                lng: request.results[0].geometry.location.lng
            };

            // pos.lat = request.results[0].geometry.location.lat;
            // pos.lng = request.results[0].geometry.location.lng;
            console.log('zip set');
            console.log(pos.lat);
        }
        else{
            // navigator.geolocation.getCurrentPosition(function(position) {
            //     pos = {
            //         lat: position.coords.latitude,
            //         lng: position.coords.longitude
            //     };
            // });
            console.log(sessionStorage.getItem("lat"));
            console.log(sessionStorage.getItem("lng"));

            pos = {
                lat: parseFloat(sessionStorage.getItem("lat")),
                lng: parseFloat(sessionStorage.getItem("lng"))
            };

            console.log(pos.lat);
            console.log(pos.lng);
        }
        console.log(pos.lat);
        console.log(pos.lng);

        $(function() {
            $.get(getParams(), function(result){
                var jsonDataCall = result;   // save it to a variable for later use


                if (jsonDataCall == "No results"){
                    jsonDataCall = ""
                }
                else{
                    jsonDataCall = JSON.parse(jsonDataCall);
                    for (i = 0; i < jsonDataCall.length; i++){
                        console.log(pos.lat, pos.lng);
                        jsonDataCall[i].distance = getDis(jsonDataCall[i].latitude, jsonDataCall[i].longitude, pos.lat, pos.lng);
                        // console.log(JSON.stringify(myJson[i]));
                    }
                }

                data = jsonDataCall;
                $table.bootstrapTable({
                    //set table data
                    data: jsonDataCall,
                    // event triggered by clicking on a row
                    onClickRow: function (row, $element) {
                        // row: the record corresponding to the clicked row,
                        // $element: the tr element.
                        window.location.href = "detailview.php?procedure=" + row.definition + "&drg=" + row.drgID + "&providerName=" + row.providerName + "&providerID=" + row.providerID + "&providerStreet=" + row.providerStreetAddress + "&providerCity=" + row.providerCity + "&state=" + row.providerState + "&zip=" + row.providerZipCode+ "&distance=" + row.distance + "&lat="+ row.latitude + "&lng="+ row.longitude;
                    },
                    // Fires after the table body is rendered/updated
                    onPostBody: function (data) {
                        var temp =  $('#table').bootstrapTable('getData', {useCurrentPage: true});
                        DeleteMarkers();
                        for(j=0; j < temp.length; j++){
                            addMarker(temp[j].latitude, temp[j].longitude, temp[j]["Average Insured Cost"], temp[j]["Average Uninsured Cost"], temp[j].providerName, temp[j].distance);
                        }
                        console.log(temp);
                    },
                    onLoadSuccess: function (data) {
                        var temp =  $('#table').bootstrapTable('getData', {useCurrentPage: true});
                        for(j=0; j < temp.length; j++){
                            addMarker(temp[j].latitude, temp[j].longitude, temp[j]["Average Insured Cost"], temp[j]["Average Uninsured Cost"], temp[j].providerName, temp[j].distance);
                        }
                        console.log(temp);
                    }
                });
                if (jsonDataCall) {
                    var temp = $('#table').bootstrapTable('getData', {useCurrentPage: true});
                    for (j = 0; j < temp.length; j++) {
                        addMarker(temp[j].latitude, temp[j].longitude, temp[j]["Average Insured Cost"], temp[j]["Average Uninsured Cost"], temp[j].providerName, temp[j].distance);
                    }
                }

                window.addEventListener('load', function() {
                    if (jsonDataCall) {
                        var temp = $('#table').bootstrapTable('getData', {useCurrentPage: true});
                        for (k = 0; k < 10; k++) {
                            addMarker(temp[k].latitude, temp[k].longitude, temp[k]["Average Insured Cost"], temp[k]["Average Uninsured Cost"], temp[k].providerName, temp[k].distance);
                        }
                    }
                });
            });
        });
    });

    //move to div with id
    function moveToDiv(id) {
        window.location.hash = '#' + id;
    }

    //round val, add commas, add dollar sign
    function priceFormatter(value, row, index, field) {
        return '$' + Math.round(value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    //calculate distance
    function distanceFormatter(value, row, index, field) {
        var val = value;
        val = getDis(row.latitude,row.longitude, pos.lat, pos.lng);
        return val;
    }

    function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }

    function getDis(lat1,lon1,lat2,lon2)
    {
        //console.log(lat1,lon1,lat2,lon2)
        if ((lat1 == lat2) && (lon1 == lon2)) {
            return 0;
        }
        else{
            var earthR = 6371;
            var degrLat = degrtoRad(lat2 - lat1);
            var degrLon = degrtoRad(lon2 - lon1);
            var lat1 = degrtoRad(lat1);
            var lat2 = degrtoRad(lat2);

            var a = Math.sin(degrLat/2) * Math.sin(degrLat/2) + Math.sin(degrLon/2) * Math.sin(degrLon/2) * Math.cos(lat1) * Math.cos(lat2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            var distance = earthR * c * 0.621371;
            return distance.toFixed(1);;
        }
    }

    function degrtoRad(value)
    {
        return value * Math.PI / 180;
    }
</script>

<script>
    // loading script
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>



<script>
    // get search parameters
    var apiCall;
    var search;
    var state;
    var price;
    var zip;

    function getParams() {
        search = "<?php echo $_GET['Search']; ?>";
        state = "<?php echo $_GET['state']; ?>";
        price = "<?php echo $_GET['price']; ?>";
        zip = "<?php echo $_GET['zipCode']; ?>";

        if(state == null){
            state = "";
        }
        if(price == null){
            price = "";
        }

        search = search.split(" ")[0]; //extract drg code

        return apiCall = "http://localhost:5432/search?drggroup=" + search + "&providerstate=" + state + "&pricelimit=" + price;
    }

    function refreshTable(url) {
        var $table = $('#table');

        $table.bootstrapTable('refresh', {
            url: url
        })
    }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLcbphE65MYIFNgdDIF1WoP23O13zERk4&callback=initMap" async defer></script>

<script>
    var map, infoWindow;
    var markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 5
        });

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // var pos = {
                //     lat: position.coords.latitude,
                //     lng: position.coords.longitude
                // };
                infoWindow.setPosition(pos);
                infoWindow.setContent('Location');
                infoWindow.open(map);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

    function addMarker(lat = 0, lng = 0, insured = 0, uninsured = 0, name = 'Hospital', dis = 0){
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

        var contentString = name + '<br>' +  priceFormatter(insured) + " with Medicare" + '<br>' +  priceFormatter(uninsured) + " when uninsured" + '<br>' + dis + " miles from you";

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
