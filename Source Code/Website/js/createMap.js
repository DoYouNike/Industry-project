// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

var map, infoWindow;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 12
    });
    addMarker();

    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
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

function addMarker(lat, lng){
    var marker = new google.maps.Marker({
        position: {lat: 56.4620, lng: -2.9707},
        map: map,
        title: 'Hospital',
        icon: {
            url:'https://www.homedepot.com/catalog/swatchImages/35/04/04a604de-8b52-4cd8-a394-6286f00b438d_35.jpg',
            scaledSize : new google.maps.Size(50, 25)
        },
        label: {
            text: "$5000",
            color: 'white',
            fontSize: '14px',
            fontWeight: 'bold'
        }
    })
}

function calDis(point1, point2)
{
    var d = (google.maps.geometry.spherical.computeDistanceBetween(point1, point2) / 1000).toFixed(2);
    console.log(d);
}
