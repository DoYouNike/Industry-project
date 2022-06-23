<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=MY_KEY&callback=calDis" async defer></script>
<script type="text/javascript">
//alert(calDistance(33.997,-85.925,34.017,-85.993));
//function calcDistance(fromLat, fromLng, toLat, toLng) {
  //    var d = google.maps.geometry.spherical.computeDistanceBetween(
     //   new google.maps.LatLng(fromLat, fromLng), new google.maps.LatLng(toLat, toLng));
    //    return d;
  // }
  function calDis() {
   var loc1 = new google.maps.LatLng(34.0287125,-85.9495366);
   var loc2 = new google.maps.LatLng(34.0772293,-86.0721629);

   alert((google.maps.geometry.spherical.computeDistanceBetween(loc1,loc2) / 1000).toFixed(1));
}
</script>   
